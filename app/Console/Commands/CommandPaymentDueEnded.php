<?php

namespace App\Console\Commands;

use App\Models\Order;
use Illuminate\Console\Command;

class CommandPaymentDueEnded extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command-payment-due-ended';

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
        Order::where('status', Order::PENDING)->where('payment_due', '<=', now())->update(['status' => Order::CANCELLED]);
        
        $this->info('Pesanan yang tidak dibayar telah memasuki tenggat dan telah dibatalkan.');
    }
}
