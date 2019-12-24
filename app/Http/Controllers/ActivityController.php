<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Carbon\Carbon;
use GuzzleHttp\Client;

class ActivityController extends Controller
{
    public function index() {
        $user = Auth::user();
        
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

        // get username
        $usernames = [];
        foreach($user->usernames as $username) {
            try {
                $client = new Client();
                $url = "https://www.instagram.com/$username->name/?__a=1";
                $response = $client->request('GET', $url);
                $content = $response->getBody()->getContents();
                $content = json_decode($content, 1);
                $usernames[] = (object)[
                    'name' => $username->name,
                    'id' => $username->id,
                    'profile' => $content['graphql']['user']['profile_pic_url']
                ];
            }
            catch (\GuzzleHttp\Exception\RequestException $e) {
                $usernames[] = (object)[
                    'name' => $username->name,
                    'id' => $username->id,
                    'profile' =>  $user->profile = asset('/img/user2-160x160.jpg')
                ];
            }
        }   

        // get blacklist username
        $blacklistUsernames = [];
        foreach($user->blacklistUsernames as $username) {
            try {
                $client = new Client();
                $url = "https://www.instagram.com/$username->name/?__a=1";
                $response = $client->request('GET', $url);
                $content = $response->getBody()->getContents();
                $content = json_decode($content, 1);
                $blacklistUsernames[] = (object) [
                    'name' => $username->name,
                    'id' => $username->id,
                    'profile' => $content['graphql']['user']['profile_pic_url']
                ];
            }
            catch (\GuzzleHttp\Exception\RequestException $e) {
                $blacklistUsernames[] = (object) [
                    'name' => $username->name,
                    'id' => $username->id,
                    'profile' =>  $user->profile = asset('/img/user2-160x160.jpg')
                ];
            }
        }
        

        $user->usernames = (object) $usernames;  
        $user->blacklistUsernames = (object) $blacklistUsernames;
        $user->timeRemaining = Carbon::parse($user->created_at)->addDays(3)->diffForHumans(null, true);
        
        
        return view('activity', compact('user'));
    }

    public function stat() {
        $user =  Auth::user();
        
        
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
       
        return view('stat', compact('user'));
    }

    public function stop($id) {
        $user =  User::findOrFail($id);
        $user->status = 'stopped';
        $user->stop_time =  Carbon::now();
        $user->save();
        return back();
    }

    public function start($id) {
        $user =  User::findOrFail($id);
        $user->status = 'started';
        $user->start_time =  Carbon::now();
        $user->save();
        return back();
    }
}
