<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory; //trait for fabric face data

    protected $table = 'categories';

    protected $primaryKey = 'id';

    //связь
    public function news(): HasMany //news - имя связи
    {
        return $this->hasMany('news', 'category_id');
    }
}
