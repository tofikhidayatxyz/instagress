<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Validator;
use Auth;
use App\AdminMail;
use Illuminate\Validation\Rule;
use Mail;
use App\Mail\AdminNotifyMail;


class UserController extends Controller
{
    /**
     * Update user
     */
    public function update(Request $request) {
        
      
        $user = User::findOrFail($request->id);
        
        if(Auth::user()->hasRole('admin')) {
            $user->activity_likes_value = (int)$request->like_value;
            $user->activity_comments_value =(int) $request->comment_value;
            $user->activity_follows_value  = (int) $request->follows_value;
            $user->activity_unfollows_value = (int) $request->unfollows_value;
            $user->activity_views_value = (int) $request->views_value;
            $user->follower_gained = (int) $request->follower_gained_value;
        }

       
        $user->activity_likes =  $request->like ? 1 : 0;
        $user->activity_views =  $request->view ? 1 : 0;
        $user->activity_comments =  $request->comment ? 1 : 0;
        $user->activity_follows  =  $request->follow ? 1 : 0;
        $user->activity_unfollows =  $request->unfollow ? 1 : 0;
        $user->use_tags = $request->use_tags ? 1 : 0;
        $user->use_location = $request->user_location ? 1 : 0;
        $user->use_followers_of = $request->use_followers_of;
        $user->use_followings_of = $request->use_followings_of;
        $user->use_likers_on = $request->use_likers_on;
        $user->use_commenters_on = $request->use_commenters_of;
        $user->use_feed = $request->use_feed ? 1 : 0;
        $user->use_explore_page = $request->use_explore_page ? 1 : 0;
        $user->use_incoming_activity = $request->use_incoming_activity ? 1 : 0;
        $user->media_age = $request->media_age;
        $user->media_type = $request->mediaType;
        $user->min_likes_filter = $request->minimumLikes;
        $user->max_likes_filter = $request->maximumLikes;
        $user->min_comments_filter = $request->minComments;
        $user->max_comments_filter = $request->maxComments;
        $user->use_relations_filter	 = $request->userRelationFilter;
        $user->use_profile_filter = $request->userProfileFilter;
        $user->min_followers_filter = $request->minFollowers;
        $user->max_followers_filter = $request->maxFollowers;
        $user->min_followings_filter = $request->minFollowings;
        $user->max_followings_filter = $request->maxFollowings;
        $user->gender_filter = $request->genderFilter;
        $user->tag_tag_filter = $request->tagAndTag ? 1 : 0;
        $user->location_tag_filter = $request->locationAndTag ? 1 : 0; 
        $user->username_tag_filter = $request->usernameAndTag ? 1 : 0;
        $user->dont_like_same_user = $request->likeDontSpam ? 1 : 0;
        $user->dont_comment_same_user = $request->commentDontSpam ? 1 : 0;
        $user->follow_source = $request->follow_source;
        $user->follow_cycle = $request->follow_cycle;
        $user->dont_follow_same_user = $request->dont_follow_same_user ? 1 : 0;
        $user->dont_follow_private_user = $request->dont_follow_private_user? 1 : 0;
        $user->unfollow_source = $request->unfollowSource;
        $user->unfollow_cycle = $request->unfollowCycle;
        $user->unfollow_who_dont_follow_me = $request->unfollow_who_dont_follow_me ? 1 : 0;
        $user->likes_counter = $request->like_counter;
        $user->comments_counter = $request->comments_counter;
        $user->follows_counter = $request->follows_counter;
        $user->unfollows_counter = $request->unfollows_counter;
        $user->timer = $request->timer;
        $user->stop_if_no_activity = $request->stop_if_no_activity;
        $user->save();

        $emails = AdminMail::all();
        foreach ($emails as $email) {
            Mail::to($email->email)->send(new AdminNotifyMail($email, $user));
        }


        return back();
    }


    public function resetUser(Request $request) {
        $validator = Validator::make($request->all(), [
            'email' => [
                'required',
                'string',
                Rule::unique('users')->ignore($request->id)
            ],
            'name' => 'required|string',
            'password' => 'required|string|confirmed'
        ]);
        if($validator->fails()) {
            return back()->with('login.error', 'error')->withErrors($validator)->withInput();
        }
        $user =  User::findOrFail($request->id);
        $user->name = $request->name;
        $user->password_dup = $request->password;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        return back();
    }


   
}
