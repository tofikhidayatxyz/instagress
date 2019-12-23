<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Username extends Model
{
     /**
     * relation to user
     */
    public function user() {
        return $this->hasOne(User::class);
    }
}
