<?php


namespace App\Services;


use App\Models\News;
use App\Models\Resources;

class ConsoleNewsUpdateService
{
    public array $newsFromResource;
    public array $newsFromDb;
    public array $newNews;

    public function getResourcesCollection(Resources $resources)
    {
        return $resources::select('id', 'source_link')->get();
    }

    public function getNewsListFromSource($sourceLink)
    {
        $this->newsFromResource = ParserService::class->getNews($sourceLink)['news'];
    }

    public function getNewsFromDb($sourceId)
    {
        $this->newsFromDb = News::select('news_title')->where('resource_id', $sourceId)->get()->toArray();
    }

    public function addNewNewsToDb($sourceLink, $sourceId)
    {
        $this->getNewsListFromSource($sourceLink);
        $this->getNewsFromDb($sourceId);
    }
}
