<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory; //trait for fabric face data

    protected $table = 'categories';

    public function categoryList(): array
    {
//        return \DB::select("SELECT id_category, category_name, category_description FROM {$this->table}");
        return \DB::table($this->table)
            ->select(['id_category', 'category_name', 'category_description', 'created_at', 'updated_at'])
            ->get()->toArray();
    }

    public function category(int $id): object
    {
//        return \DB::select("SELECT id_category, category_name, category_description FROM {$this->table} WHERE id_category = :id", ['id'=>$id]);
        return \DB::table($this->table)
            ->select(['id_category', 'category_name', 'category_description'])
            ->where(['id_category' => $id])
            ->first();
    }
}
