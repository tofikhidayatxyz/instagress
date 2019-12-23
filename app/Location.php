<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
     /**
     * relation to user
     */
    public function user() {
        return $this->hasOne(User::class);
    }
}
