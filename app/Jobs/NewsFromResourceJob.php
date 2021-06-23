<?php

namespace App\Jobs;

use App\Models\News;
use App\Services\NewsSaveService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class NewsFromResourceJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected array $resNews;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(array $resNews)
    {
        $this->resNews = $resNews;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(NewsSaveService $service)
    {
        $service->newsSaveToDb($this->resNews);
    }
}
