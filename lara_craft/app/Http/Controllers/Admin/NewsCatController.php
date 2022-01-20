<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class NewsCatController extends Controller
{
    private $news = [
        1 => [
            'title' => 'Politics'
        ],
        2 => [
            'title' => 'Sport'
        ],
        3 => [
            'title' => 'Breaking News'
        ]
    ];
    public function index()
    {
        $response = '';
        foreach ($this-> news as $id => $item) {
            $response .= "<div>
<a href='/news/card/{$id}'>
{$item['title']}
</a>
</div>";

        }
        return $response;
    }
}
