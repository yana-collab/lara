<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    public function loginVk()
    {
        return Socialite::with('vkontakte') ->redirect();

    }

    public function responseVk()
    {
        $user = Socialite::driver('vkontakte')->user();
        dd($user);

    }
}
