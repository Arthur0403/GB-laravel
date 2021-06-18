<?php

namespace App\Http\Controllers;

use App\Services\SocialService;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use SocialiteProviders\Manager\OAuth2\User;

class SocialController extends Controller
{
    public function login(User $user)
    {
        return Socialite::driver('vkontakte')->redirect();
    }

    public function callback(SocialService $service)
    {
        return redirect($service->login(Socialite::driver('vkontakte')->user()));
    }
}
