<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Socialite;

class SocialAuthController extends Controller
{
    //
    public function redirecttoProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }
}
