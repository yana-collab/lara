<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class NewsCatController extends Controller
{
    private $news = [
         [
             'id' => 1,
            'title' => 'Politics',
             'text' => 'Somewhere over the rainbow'

        ],
        [
            'id' => 2,
            'title' => 'Sport',
            'text' => 'Somewhere over the rainbow'

        ],
        [
            'id' => 3,
            'title' => 'Animals',
            'text' => 'Somewhere over the rainbow'

        ],
        [
            'id' => 4,
            'title' => 'IT',
            'text' => 'Somewhere over the rainbow'

        ]
    ];




    public function test()
    {

        $url = route ('home');

        return view ('news.category', ['news' => $this -> news]);


    }


}
