<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\User;
use GuzzleHttp\Client;
use App\Role;

class UserController extends Controller
{
    /**
     * View user
     * @param request
     * @return view
     */
    public function user($id) {

        $user =  User::findOrFail($id);
        return view('admin.user', compact('user'));
    }

    /**
     * create user
     * @return view
     */
    
    public function create() {
        return view('admin.user.create');
    } 

    /**
     * Store user
     * @param request
     * @return redirect
     */
    public function store(Request $request, User $user) {

        $roleUser =  Role::where('name', 'user')->first();

        $request->validate([
            'email' => 'required|string|unique:users',
            'name' => 'required|string',
            'password' => 'required|string|confirmed|min:8'
        ]);
        $user->email = $request->email;
        $user->name = $request->name;
        $user->password = bcrypt($request->pasword);
        $user->activity_views_value = mt_rand(1, 5);
        $user->follower_gained = mt_rand(1, 5);
        $user->activity_likes_value  = mt_rand(1, 5);
        $user->activity_comments_value = mt_rand(1, 5);
        $user->activity_follows_value = mt_rand(1, 5);
        $user->activity_unfollows_value = mt_rand(1, 5);
        
        $user->save();

        $user->roles()->attach($roleUser);

        return redirect()->route('admin.index')->with('success', 'Successfull add new user');
    }

    /**
     * View stat
     */
    public function stat($id) {
        $user =  User::findOrFail($id);
        
        try {
            $client = new Client();
            $url = "https://www.instagram.com/$user->name/?__a=1";
            $response = $client->request('GET', $url);
            $content = $response->getBody()->getContents();
            $content = json_decode($content, 1);
            $user->profile =  $content['graphql']['user']['profile_pic_url'];
        }
        catch (\GuzzleHttp\Exception\RequestException $e) {
            $user->profile = asset('/img/default-avatar.png');
        }

        return view('admin.user.stat', compact('user'));
    }


    /**
     * View user
     * @param id
     * @return view 
     */
    public function view($id) {
        $user =  User::findOrFail($id);
        
        
        try {
            $client = new Client();
            $url = "https://www.instagram.com/$user->name/?__a=1";
            $response = $client->request('GET', $url);
            $content = $response->getBody()->getContents();
            $content = json_decode($content, 1);
            $user->profile =  $content['graphql']['user']['profile_pic_url'];
        }
        catch (\GuzzleHttp\Exception\RequestException $e) {
            $user->profile = asset('/img/default-avatar.png');
        }


        $user->timeRemaining = Carbon::parse($user->created_at)->addDays(3)->diffForHumans(null, true);


        return view('admin.user.detail', compact('user'));
    }

    /**
     * Delete user
     * @param id on request
     * @return session
     */
    public function delete($id) {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('admin.index')->with('success', 'Successfull delete user');
    }


}
