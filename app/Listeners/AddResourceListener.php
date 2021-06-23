<?php

namespace App\Listeners;

use App\Jobs\NewsFromResourceJob;
use App\Jobs\NewsJob;
use App\Models\News;
use App\Models\Resources;
use App\Services\ParserService as ParserService;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class AddResourceListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        if(isset($event->resData))
        {
//            dd($event);
//            NewsJob::dispatch($event->resource->source_link, $event->resourceId);
//            $resData = ParserService::class->getNews($event->resource->source_link, $event->resourceId);
            $title = $event->title;
            $id = $event -> resource_id;
//            dd($title);

            foreach($event->resData as $news)
            {
                $news["author"] = $title;
                $news["id_resource"] = $id;
//                dd($news);
                NewsFromResourceJob::dispatch($news);
//                News::create([
//                    'news_title' => $news["title"],
//                    'news_description' => $news["description"],
//                    'author' => $event->title,
//                    'id_resource' => $event -> resource_id,
//                    'source_link' => $news["link"],
//                    'publish_date' => $news["pubDate"],
//                    ]);
            }
        }
    }
}
