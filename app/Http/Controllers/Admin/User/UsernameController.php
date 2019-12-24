<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Username;
use App\User;
use GuzzleHttp\Client;

class UsernameController extends Controller
{
    public function store(Request $request, Username $name) {
        
       if($request->username) {

            try {
                $client = new Client();
                $url = "https://www.instagram.com/$request->username/?__a=1";
                $response = $client->request('GET', $url);
                $name->user_id = $request->id;
                $name->name = $request->username;
                $name->save();
            }
            catch (\GuzzleHttp\Exception\RequestException $e) {
                return back()->with('open', 'username')->with('error', "User <b>$request->username</b> Notfound");
            }
            
       }
        return back()->with('open', 'username');
    }

    public function delete($id) {
        $tag = Username::findOrFail($id);
        $tag->delete();
        return back()->with('open', 'username');
    }

    public function deleteAll($id) {
        $user =  User::findOrFail($id);
        foreach ($user->usernames as $tag) {
            $tag->delete();
        }
        return back()->with('open', 'username');
    }
}
