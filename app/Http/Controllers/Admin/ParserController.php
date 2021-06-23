<?php

namespace App\Http\Controllers\Admin;

use App\Jobs\NewsJob;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\ParserService;
use Illuminate\Support\Facades\Redis;

class ParserController extends Controller
{
    public function index(ParserService $parserService)
    {
        $start = date('c');
        $parserService->getNews('https://news.yandex.ru/auto.rss', 23);
//        dd($parserService->getNews('https://news.yandex.ru/auto.rss', 23)['news']);
        $rssLinks = [
            'https://news.yandex.ru/auto.rss',
            'https://news.yandex.ru/auto_racing.rss',
            'https://news.yandex.ru/army.rss',
            'https://news.yandex.ru/gadgets.rss',
            'https://news.yandex.ru/index.rss',
            'https://news.yandex.ru/martial_arts.rss',
            'https://news.yandex.ru/communal.rss',
            'https://news.yandex.ru/health.rss',
            'https://news.yandex.ru/games.rss',
            'https://news.yandex.ru/internet.rss',
            'https://news.yandex.ru/cyber_sport.rss',
            'https://news.yandex.ru/movies.rss',
            'https://news.yandex.ru/cosmos.rss',
            'https://news.yandex.ru/culture.rss',
            'https://news.yandex.ru/championsleague.rss',
            'https://news.yandex.ru/music.rss',
            'https://news.yandex.ru/nhl.rss',
        ];

       foreach ($rssLinks as $link)
       {
           dump($parserService->getNews($link));
           NewsJob::dispatch($link); //добавление задачи в очередь
       }

//        echo "Запись успешно выполнена";
        return $start . ' ' . date('c');
//        dd($service->getNews('https://news.yandex.ru/music.rss'));
    }
}
