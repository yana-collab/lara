<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller ;

class GreetingController extends Controller
{
    public function index()
    {


        return view('/home');
    }
}
