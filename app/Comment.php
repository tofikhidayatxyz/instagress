<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['user_id', 'comment'];
     /**
     * relation to user
     */
    public function user() {
        return $this->hasOne(User::class);
    }
}
