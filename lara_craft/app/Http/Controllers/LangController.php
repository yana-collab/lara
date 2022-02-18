<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LangController extends Controller
{
    public  function index (Request $request, $lang)
    {
        $request->session()->put('lang', $lang);
        return redirect()->back();
    }
}
