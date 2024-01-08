<?php

namespace App\Console\Commands;

use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\OrderDataController;
use App\Models\Order;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CommandCompletedOrderDueEnded extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command-completed-order-due-ended';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {

        /* Order::where('status', Order::DELIVERED)
            ->where('completed_order_due', '<=', now())
            ->chunk(1500, function ($orders) {
                foreach ($orders as $order) {
                    try {
                        $order->update(['status' => Order::COMPLETED]);
                    } catch (\Exception $e) {
                        // Log the error and continue with the next order
                        Log::error('Failed to update order: ' . $e->getMessage());
                        continue;
                    }
                }
            }); */

        $now = now();
        Log::info('cmd - completed-order-due-ended - jam : ' . $now);
        // $orderController = app()->make('App\Http\Controllers\OrderController');
        $orderController = new OrderDataController();
        $baseQuery = DB::table('orders')
            ->where('status', Order::DELIVERED)
            ->where('completed_order_due', '<=', $now);

        $chunkQuery = clone $baseQuery;
        $chunkQuery->orderBy('id')->chunkById(1500, function ($orders)  use ($orderController) {
            foreach ($orders as $order) {
                try {
                    $orderController->completedOrder($order);
                } catch (\Exception $e) {

                    Log::error('Failed to process order: ' . $e->getMessage());
                    continue;
                }
            }
        });

        // No Need to update the status, because it's already updated in the controller
        /*  $updateQuery = clone $baseQuery;
        $updateQuery->update(['status' => Order::COMPLETED]); */


        $this->info('Pesanan yang telah sampai ke pembeli telah diselesaikan');
    }
}
