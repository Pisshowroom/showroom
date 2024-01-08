<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        // $schedule->command('inspire')->hourly();
        $schedule->command('command-orders-packing-due-ended')->cron('30 9 * * *');
        $schedule->command('command-orders-packing-due-ended')->cron('0 10 * * *');
        $schedule->command('command-orders-packing-due-ended')->cron('30 10 * * *');
        $schedule->command('command-orders-packing-due-ended')->cron('45 10 * * *');
        $schedule->command('command-orders-packing-due-ended')->cron('0 11 * * *');
        $schedule->command('command-orders-packing-due-ended')->cron('20 11 * * *');
        $schedule->command('command-orders-packing-due-ended')->cron('35 11 * * *');
        $schedule->command('command-orders-packing-due-ended')->cron('55 11 * * *');
        $schedule->command('command-orders-packing-due-ended')->cron('10 12 * * *');
        $schedule->command('command-orders-packing-due-ended')->cron('45 12 * * *');
        // $schedule->command('command-orders-packing-due-ended')->twiceDailyAt(13, 14, 38);
        // $schedule->command('command-returning-sending-due-ended')->twiceDailyAt(0, 12, 5);
        // $schedule->command('command-payment-due-ended')->twiceDailyAt(0, 12, 10);
        // $schedule->command('command-completed-order-due-ended')->twiceDailyAt(0, 12, 15);
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
