<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HistoryFund;
use App\Models\Withdraw;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WithdrawController extends Controller
{
    // index
    public function index(Request $request)
    {
        $withdraw = Withdraw::with(["master_account"])->where("user_id", $user->id)
            ->when($request->filled("date"), function ($query) use ($request) {
                $query->whereDate("created_at", $request->date);
            })
            ->orderBy("created_at", "desc")->paginate(10);

        // return WithdrawResource::collection($withdraw);
        return $withdraw;
        // return ResponseApi($withdraw, "List Withdraw berhasil diambil");
    }

    public function processBeforeConfirm(Request $request, Withdraw $withdraw)
    {
        $request->validate([
            "id" => "required|integer",
        ]);


        $withdraw = Withdraw::findOrFail($request->id);
        $withdraw->status = "OnReview";
        $withdraw->save();

        return ResponseApi($withdraw, "Withdraw berhasil diterima");
    }

    public function accept(Request $request, Withdraw $withdraw)
    {
        $request->validate([
            "id" => "required|integer",
            "proof_payment" => "required"
        ]);
        if ($request->hasFile("proof_payment")) {
            $withdraw->proof_payment = uploadFoto($request->proof_payment, "uploads/proof_withdraw");
        } else {
            return ResponseApi("Harus upload foto bukti pencairan.", 400);
        }

        DB::beginTransaction();

        $user = $withdraw->user;
        $user->balance = $user->balance - $withdraw->amount;
        $user->save();


        $withdraw = Withdraw::findOrFail($request->id);
        $withdraw->status = "Approved";

        $withdraw->save();
        DB::commit();

        return ResponseApi($withdraw, "Withdraw berhasil diterima");
    }

    public function reject(Request $request, Withdraw $withdraw)
    {
        $request->validate([
            "id" => "required|integer",
        ]);

        $withdraw = Withdraw::findOrFail($request->id);
        $withdraw->status = "Rejected";
        $withdraw->save();

        return ResponseApi($withdraw, "Withdraw berhasil ditolak");
    }
}
