<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
   public function index ()
   {

   }

   public function create (Request $request)
   {
           $title = $request->input('title');
           $content = $request->input('content');
           //save data to db
           return redirect()->route('admin::news::new');

           //return response()->redirectToRoute('admin::news::create');

   }

   public function new()
   {
       return view ( 'admin.news.create');

   }

    public function update ()
    {

    }

    public function delete ()
    {

    }
}
