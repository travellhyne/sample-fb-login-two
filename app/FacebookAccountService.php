<?php

namespace App;

use Laravel\Socialite\Contracts\User as FacebookUser;

class FacebookAccountService {
  public function createOrGetUser(FacebookUser $facebookUser)
  {
    $user = User::where('facebook_user_id', $facebookUser->getId())
      ->first();

    if ($user) {
      return $user;
    } else {
      $user = User::create([
        'email' => $facebookUser->getEmail(),
        'name' => $facebookUser->getName(),
        'password' => bcrypt($facebookUser->getName()),
        'email_sent' => false,
        'facebook_user_id' => $facebookUser->getId(),
      ]);
      $user->save();
      return $user;
    }
  }
}
