<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;

class News extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'content'
    ];


    public static function getByCategoryId(int $categoryId)
    {
        return static::query()
            ->where('category_id', $categoryId)
            ->get();//SELECT * FROM news
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
