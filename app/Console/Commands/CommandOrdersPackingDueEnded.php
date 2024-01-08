<?php

namespace App\Console\Commands;

use App\Models\Order;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class CommandOrdersPackingDueEnded extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command-orders-packing-due-ended';

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
        Log::info('cmd - orders-packing-due-ended - jam : ' . $now);
        
        Order::where('status', Order::PROCESSED_BY_SELLER)->where('packing_due', '<=', now())->update(['status' => Order::CANCELLED]);

        $this->info('Pesanan yang tidak dikemas telah dibatalkan');
    }
}
