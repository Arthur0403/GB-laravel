<?php //declare(strict_types=1);


namespace App\Services;


use App\Contracts\ParserServiceContract;
use App\Models\News;
use Illuminate\Support\Facades\Storage;

//use Orchestra\Parser\Xml\Facade as XmlParser;

class ParserService implements ParserServiceContract
{
    /**
     * @param string $url
     * @return array
     */
    public function getNews(string $url)
    {

        $xml = \XmlParser::load($url);

        return $xml->parse([
            'title' =>  [
                'uses' =>'channel.title'
            ],
            'link' =>  [
                'uses' =>'channel.link'
            ],
            'description' =>  [
                'uses' =>'channel.description'
            ],
            'image' =>  [
                'uses' =>'channel.image.url'
            ],
            'news' =>  [
                'uses' =>'channel.item[title,link,guid,description,pubDate]'
            ],
        ]);

//        dump($xml);

//        dd($resData['news']);

//        foreach($resData as $news)
//        {
//            News::create([
//                'news_title' => $news["title"],
//                'news_description' => $news["description"],
//                'author' => $resData["title"],
//                'resource_id' => $resourceId,
//                'source_link' => $news["link"],
//                'publish_date' => $news["pubDate"],
//                ]);
//        }

//        $fileName = sprintf('Logs%s.txt', time());
//        Storage::disk('publicLogs')->put($fileName, date('c') . ' ' . $url);
    }
}
