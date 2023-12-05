<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\HistoryFundResource;
use App\Http\Resources\WithdrawResource;
use App\Models\HistoryFund;
use App\Models\Withdraw;
use Illuminate\Http\Request;

class WithdrawController extends Controller
{
    public function index(Request $request)
    {
        $user = auth()->guard('api-client')->user();

        $withdraw = Withdraw::with(['master_account'])->where('user_id', $user->id)
        ->when($request->filled('date'), function ($query) use ($request) {
            $query->whereDate('created_at', $request->date);
        })
        ->orderBy('created_at', 'desc')->paginate(10);

        return WithdrawResource::collection($withdraw);
        // return ResponseApi($withdraw, 'List Withdraw berhasil diambil');
    }

    public function indexHistoryFund(Request $request)
    {
        $user = auth()->guard('api-client')->user();

        $request->validate([
            'date' => 'nullable|date',
        ]);

        $historyFund = HistoryFund::where('user_id', $user->id)->orderBy('created_at', 'desc');

        if ($request->filled('date')) {
            $historyFund->whereDate('created_at', $request->date);
        }
        if ($request->filled('type')) {
            $historyFund->where('type', $request->type);
        }

        $historyFund =  $historyFund->paginate(10);

        return HistoryFundResource::collection($historyFund);
    }

    public function storeOrUpdate(Request $request)
    {
        $user = auth()->guard('api-client')->user();

        $request->validate([
            'master_account_id' => 'required',
            'account_bank_name' => 'required',
            'account_bank_number' => 'required',
            'amount' => 'required|integer',
            'description' => 'nullable',
        ]);

        if ($request->amount > $user->balance) {
            return ResponseApi("Insufficient balance", 422);
        }

        if ($request->amount < 20000) {
            return ResponseApi("Minimum withdraw is 20000", 422);
        }

        $withdraw = Withdraw::find($request->id);

        if ($withdraw && $withdraw->status !== 'Pending') {
            return ResponseApi("Cannot edit data. Withdraw request is no longer pending.", 422);
        }

        if (!$withdraw) {
            $withdraw = new Withdraw();
            $withdraw->user_id = $user->id;
            $withdraw->status = 'Pending';
        }

        $withdraw->master_account_id = $request->master_account_id;
        $withdraw->account_bank_name = $request->account_bank_name;
        $withdraw->account_bank_number = $request->account_bank_number;
        $withdraw->amount = $request->amount;
        $withdraw->description = $request->description;
        $withdraw->save();

        return ResponseApi("Withdraw request submitted successfully", 200);
    }

    public function destroy(Withdraw $withdraw)
    {
        if ($withdraw->status !== 'Pending') {
            return ResponseApi("Cannot delete data. Withdraw request is no longer pending.", 422);
        }

        $withdraw->delete();

        return ResponseApi("Withdraw request deleted successfully", 200);
    }
}
