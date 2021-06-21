<?php

namespace App\Http\Controllers\Admin;

use App\Jobs\NewsJob;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\ParserService;

class ParserController extends Controller
{
    public function index(ParserService $parserService)
    {
        $start = date('c');
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

//       NewsJob::dispatch($service, $urls);

       foreach ($rssLinks as $link)
       {
//           dump($parserService->getNews($link));
           NewsJob::dispatch($link);
           dump(NewsJob::dispatch($link));
       }

//        echo "Запись успешно выполнена";
        return $start . ' ' . date('c');
//        dd($service->getNews('https://news.yandex.ru/music.rss'));
    }
}
