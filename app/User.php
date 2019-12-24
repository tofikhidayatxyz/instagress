<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'activity_views_value',
        'follower_gained',
        'activity_likes_value',
        'activity_comments_value',
        'activity_follows_value',
        'activity_unfollows_value'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    /**
     * Relation to role
     */
     public function roles() {
         return $this->belongsToMany(Role::class);
     }

     /**
      * Check role
      */
    public function authorizeRoles($roles) {
        if(is_array($roles)) {
            return $this->hasAnyRole($roles) || abort(401, 'This action is unauthorize');
        }
        return $this->hasROle($roles) || abort(401, 'This action is unautorize');
    }

    public function hasAnyRole($roles) {
        return null  !== $this->roles()->whereIn('name', $roles )->first();
    }

    public function hasRole($role) {
        return null !== $this->roles()->where('name', $role)->first();
    } 

    /**
     * Relation to blacklist tag
     */

     public function blacklistTags() {
         return $this->hasMany(BlacklistTag::class);
     }

     /**
      * Relation to blacklist keyword
      */
      public function blacklistKeywords() {
          return $this->hasMany(BlacklistKeyword::class);
      }
      /**
       * Relaton to blacklist username
       */
      public function blacklistUsernames() {
          return $this->hasMany(BlacklistUsername::class);
      }
      /**
       * relation to comment
       */
      public function comments() {
          return $this->hasMany(Comment::class);
      }
      /**
       * relation to tag class
       */
      public function tags() {
          return $this->hasMany(Tag::class);
      }
      /**
       * Relation to location
       */
      public function locations() {
          return $this->hasMany(Location::class);
      }
      /**
       * relation to username
       */
      public function usernames() {
          return $this->hasMany(Username::class);
      }



}
