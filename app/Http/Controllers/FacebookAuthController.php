<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\FacebookAccountService;
use Socialite;
use Carbon\Carbon;
use App\Jobs\SendFiveMinuteEmail;

class FacebookAuthController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function callback(FacebookAccountService $service)
    {
        $facebookUser = $service->createOrGetUser(Socialite::driver('facebook')->user());

        auth()->login($facebookUser);

        $job = (new SendFiveMinuteEmail($facebookUser))
            ->delay(Carbon::now()->addMinutes(5));
        dispatch($job);

        return redirect()->to('/home');
    }
}
