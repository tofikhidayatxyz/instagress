<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlacklistKeyword extends Model
{
    protected $fillable = ['user_id', 'keyword'];
    /**
     * relation to user
     */
     public function user() {
         return $this->hasOne(User::class);
     }
}
