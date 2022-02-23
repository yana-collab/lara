<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Orchestra\Parser\Xml\Facade as XmlParser;

class ParserController extends Controller
{
    public function index()
    {
        $xml = XmlParser::load('https://3dnews.ru/news/rss/');

        $data = $xml->parse([
            'channel_title' => ['uses' => 'channel.title'],
            'channel_content' => ['uses' => 'channel.description'],
            'channel_items' => ['uses' => 'channel.item[title,description,category]'],
        ]);

    }
}
