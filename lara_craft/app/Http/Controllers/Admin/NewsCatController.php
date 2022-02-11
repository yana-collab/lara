<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;

class NewsCatController extends Controller
{
//    private $news = [
//         [
//             'id' => 1,
//            'title' => 'Politics',
//             'text' => 'Somewhere over the rainbow'
//        ],
//        [
//            'id' => 2,
//            'title' => 'Sport',
//            'text' => 'Somewhere over the rainbow'
//
//        ],
//        [
//            'id' => 3,
//            'title' => 'Animals',
//            'text' => 'Somewhere over the rainbow'
//
//        ],
//        [
//            'id' => 4,
//            'title' => 'IT',
//            'text' => 'Somewhere over the rainbow'
//
//        ]
//    ];

    public function index()
    {
        $item = News::find(4);
        $item->category->news;
//        $news = new News();
//        $news-> title ="Title";
//        $news-> content = "Whatever";
//        $news-> category_id = 2;
//
//        $news->save();

       $news = News::all();
//       foreach ($news as $item) {
//
//       }
        return view ('news.category', ['news' => $news]);

    }

    public function list(int $categoryId)
    {
        return view('news.list', [ 'news' => News::getByCategoryId($categoryId)]);
    }

    public function card(News $news)
    {
//        $item = News::find($id);
//        $item = News::findOrNew();
//        $item = News::findOrCreate();
//        $item = News::findOrFail();

        return view('news.card', ['item' => $news]);
    }


}
