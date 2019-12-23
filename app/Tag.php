<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['user_id', 'tag'];
     /**
     * relation to user
     */
    public function user() {
        return $this->hasOne(User::class);
    }
}
