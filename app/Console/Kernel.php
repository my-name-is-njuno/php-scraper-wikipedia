<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

use App\User;

use Mail;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        
        // Commands\ScrapeJobMag::class,
       
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('jobmag:scrape')
                 // ->hourly();



        

        //$schedule->call(function() {

            // \Log::info('scheduler testiing');
            // $user = User::all();

            // foreach ($user as $usr) {
            //     # code...
            //     Mail::send(['text'=>'Welcome'], ['title'=>'welcome'], function($msg) {
            //         $message->to($user->email);
            //     });
            // }
        // });
    }

    /**
     * Register the Closure based commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        require base_path('routes/console.php');
    }
}
