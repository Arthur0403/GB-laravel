<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class News extends Model
{
    use HasFactory;

    protected $table = "news";

    //Указывает какие поля при массовом дополнении мы можем добавлять
    protected $fillable = [
        'news_title', 'news_description', 'author', 'category_id', 'status', 'resource_id'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
