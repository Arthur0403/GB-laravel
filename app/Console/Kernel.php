<?php

namespace App\Console;

use App\Models\News;
use App\Models\Resources;
use App\Services\ConsoleNewsUpdateService;
use App\Services\ParserService;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();
//        $schedule->call(function(){
//            $resources = Resources::select('id', 'source_link')->get();
//
//            foreach ($resources as $resource)
//            {
//                ConsoleNewsUpdateService::class->addNewsToDb($resource->source_link, $resource->id);
//            }
//        });
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
