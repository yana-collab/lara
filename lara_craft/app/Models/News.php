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
        'content',
        'source',
        'publish_date',
        'category_id'
    ];


    public static function getByCategoryId(int $categoryId)
    {
        return static::query()
            ->where('category_id', $categoryId)
            ->get(); //SELECT * FROM news
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function rules()
    {
        return $rules = [
            'title' => 'required|max:50|unique:news',
            'content' => 'required|max:1000',
            'category_id' => 'required|integer|exists:categories,id',
            'active' => 'boolean',
            'publish_date' => 'date'
        ];
    }
}
