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
        $user->save();
        return back();
    }

    public function start($id) {
        $user =  User::findOrFail($id);
        $user->status = 'started';
        $user->save();
        return back();
    }
}
