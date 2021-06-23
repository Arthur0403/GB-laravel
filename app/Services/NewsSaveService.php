<?php


namespace App\Services;


use App\Models\News;
use Illuminate\Support\Facades\Storage;

class NewsSaveService
{
    public function newsSaveToDb($news)
    {
        $news = News::create([
            'news_title' => $news["title"],
            'news_description' => $news["description"],
            'author' => $news["author"],
            'resource_id' => $news["id_resource"],
            'source_link' => $news["link"],
            'publish_date' => $news["pubDate"],
        ]);

        dump($news);
//        $fileName = sprintf('Logs%s.txt', time());
//        Storage::disk('publicLogs')->put($fileName, date('c');
    }
}
