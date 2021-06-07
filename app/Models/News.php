<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $table = "news";

    public function newsList(): array
    {
        return \DB::table($this->table)
            ->join('categories', 'news.id_category', '=', 'categories.id_category')
            ->select(['news.*', 'categories.category_name'])
            ->get()->toArray();
    }

    public function news(int $id): object
    {
        return \DB::table($this->table)
            ->select(['id_news', 'news_title', 'news_description', 'author', 'news_image'])
            ->where(['id_news' => $id])
            ->first();
    }
}
