<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class SocialAccount extends Eloquent
{
    protected $table = "social_accounts";

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
