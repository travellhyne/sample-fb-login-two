<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FacebookAccount extends Model
{
    protected $fillable = ['user_id', 'facebook_user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
