<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WithdrawalDataV1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // get User whereId in 1,2,3, get random order each of it take 2
        // need for storing in history_funds, because need user_id and order_id
        $users = \App\Models\User::whereIn('id', [1, 2, 3])->get();
        foreach ($users as $user) {
            $orders = $user->orders()->inRandomOrder()->take(2)->get();
            foreach ($orders as $order) {
                $history_fund = new \App\Models\HistoryFund();
                $history_fund->user_id = $user->id;
                $history_fund->order_id = $order->id;
                $history_fund->name = 'Penjualan #'. $order->payment_identifier . "(D)";
                $history_fund->type = 'Penjualan';
                $history_fund->amount = $order->total;
                $history_fund->save();
            }
        }

    }
}
