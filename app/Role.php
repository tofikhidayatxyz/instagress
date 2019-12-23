<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['name', 'description'];

    /**
     * relation to user
     */
    public function users() {
        return $this->belongsToMany(User::class);
    }
}
