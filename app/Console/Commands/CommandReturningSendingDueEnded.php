<?php

namespace App\Console\Commands;

use App\Models\Order;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class CommandReturningSendingDueEnded extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command-returning-sending-due-ended';

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
        $now = now();
        Log::info('cmd - returning-sending-due-ended - jam : ' . $now);
        Order::where('status', Order::RETURN_ACCEPTED)->where('returning_sending_due', '<=', now())->update([
            'status' => Order::DELIVERED,
            'completed_order_due' => now()->addDays(1)
        ]);

        $this->info('Pengembalian barang tak kunjung di kirim telah diubah menjadi pesanan telah sampi dan menunggu penyelesaian.');
    }
}
