<?php

namespace App\Console\Commands;

use App\Models\Order;
use Illuminate\Console\Command;

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
        Order::where('status', Order::RETURN_ACCEPTED)->where('returning_sending_due', '<=', now())->update([
            'status' => Order::DELIVERED,
            'completed_order_due' => now()->addDays(1)
        ]);

        $this->info('Pengembalian barang tak kunjung di kirim telah diubah menjadi pesanan telah sampi dan menunggu penyelesaian.');
    }
}
