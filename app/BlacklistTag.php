<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlacklistTag extends Model
{
     /**
     * relation to user
     */
    public function user() {
        return $this->hasOne(User::class);
    }
}
