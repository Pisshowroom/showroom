<?php

namespace App\Http\Controllers\Clients\seller;

use App\Http\Controllers\Controller;
use App\Http\Resources\NotificationResource;
use App\Http\Resources\WithdrawResource;
use App\Models\MasterAccount;
use App\Models\Notification;
use App\Models\Withdraw;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WithdrawController extends Controller
{
    public function isSeller()
    {
        return Auth::guard('web')->user()->is_seller == true;
    }
    public function getCommonData()
    {
        if (Auth::guard('web')->user() && Auth::guard('web')->user()->id) {
            $notifications = Notification::where('user_id', Auth::guard('web')->user()->id)->orderBy('created_at', 'desc')->take(4)->get();
            $data['notification'] = NotificationResource::collection($notifications);
            $data['notif_count'] = Notification::where('user_id', Auth::guard('web')->user()->id)->count();
        } else {
            $data['notification'] = null;
            $data['notif_count'] = 0;
        }

        return $data;
    }


    public function addWithdraw()
    {
        if (!$this->isSeller()) {
            $user = Auth::guard('web')->user();
            return redirect('/pembeli')->with('auth', base64_encode($user->uid));
        }
        $bank = MasterAccount::whereNull('deleted_at')->select(['id', 'provider_name'])->get();
        $data = $this->getCommonData();
        return view('clients.seller.withdraw.add', ['banks' => $bank, 'data' => $data]);
    }
    public function allWithdraw(Request $request)
    {
        $user = Auth::guard('web')->user();
        if (!$this->isSeller()) {
            return redirect('/pembeli')->with('auth', base64_encode($user->uid));
        }
        $status = $request->input('status');

        $withdraw = Withdraw::where('user_id', $user->id)
            ->when($status, function ($query, $status) {
                return $query->where('status', $status);
            })
            ->when($request->filled('search'), function ($q) use ($request) {
                return $q->where('amount', 'like', "%$request->search%");
            })
            ->with('master_account:id,provider_name,image')
            ->orderByDesc('created_at')->paginate(10);
        foreach ($withdraw as  $value) {
            $value->date = parseDates($value->created_at);
        }
        $data = $this->getCommonData();

        return view('clients.seller.withdraw.all', ['withdraws' => $withdraw, 'data' => $data]);
    }
    public function detailWithdraw($id)
    {
        $user = Auth::guard('web')->user();
        if (!$this->isSeller()) {
            return redirect('/pembeli')->with('auth', base64_encode($user->uid));
        }
        $withdraw = Withdraw::where('user_id', $user->id)->with('master_account:id,image')->where('id', $id)->first();
        if (!$withdraw)
            return redirect("/toko/semua-pencairan-uang")->with('error', 'Detail pencairan tidak ditemukan.')->with('auth', base64_encode($user->uid));
        else {
            $withdraw->date = parseDates($withdraw->created_at);
            $data = $this->getCommonData();
            return view('clients.seller.withdraw.detail', ['withdraw' => $withdraw, 'data' => $data]);
        }
    }


    public function storeOrUpdate(Request $request)
    {
        $user = auth()->guard('web')->user();

        $request->validate([
            'master_account_id' => 'required',
            'account_bank_name' => 'required',
            'account_bank_number' => 'required',
            'amount' => 'required',
        ]);

        if ($request->amount > $user->balance) {
            return response()->json([
                "status" => "danger",
                "message" => "Saldo tidak mencukupi"
            ]);
        }

        if ($request->amount < 20000) {
            return response()->json([
                "status" => "danger",
                "message" => "Pencairan minimum adalah Rp 20.000"
            ]);
        }

        $withdraw = Withdraw::find($request->id);

        if ($withdraw && $withdraw->status !== 'Pending') {
            return response()->json([
                "status" => "danger",
                "message" => "Tidak dapat mengedit data. Permintaan pencairan tidak lagi tertunda."
            ]);
        }

        if (!$withdraw) {
            $withdraw = new Withdraw();
            $withdraw->user_id = $user->id;
            $withdraw->status = 'Pending';
        }

        $withdraw->master_account_id = $request->master_account_id;
        $withdraw->account_bank_name = $request->account_bank_name;
        $withdraw->account_bank_number = $request->account_bank_number;
        if ($request->filled('amount'))
            $withdraw->amount = (int) preg_replace("/[^0-9]/", "", $request->amount);

        $withdraw->description = $request->description;
        $withdraw->save();
        return redirect()->route('dashboardSeller.allWithdraw')->with('success', 'Permintaan pencairan berhasil dikirimkan.')->with('auth', base64_encode($user->uid));
    }

    public function deleteWithdraw($id)
    {
        $user = auth()->guard('web')->user();
        $withdraw = Withdraw::where('id', $id)->first();
        if (!$withdraw)
            return redirect("/toko/semua-pencairan-uang")->with('danger', 'Pencairan tidak ditemukan.')->with('auth', base64_encode($user->uid));

        if ($withdraw->status !== 'Pending') {
            return redirect("/toko/semua-pencairan-uang")->with('danger', 'Tidak dapat menghapus pencairan.')->with('auth', base64_encode($user->uid));
        }

        $withdraw->delete();

        return redirect("/toko/semua-pencairan-uang")->with('success', 'Permintaan pencairan uang berhasil dihapus.')->with('auth', base64_encode($user->uid));
    }
}
