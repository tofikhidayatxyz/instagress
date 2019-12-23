<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlacklistUsername extends Model
{
     /**
     * relation to user
     */
    public function user() {
        return $this->hasOne(User::class);
    }
}
