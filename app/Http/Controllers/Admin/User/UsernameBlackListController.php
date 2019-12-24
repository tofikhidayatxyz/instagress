<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\BlacklistUsername;
use GuzzleHttp\Client;

class UsernameBlackListController extends Controller
{
    public function store(Request $request, BlacklistUsername $name) {
        if($request->name) {
            try {
                $client = new Client();
                $url = "https://www.instagram.com/$request->name/?__a=1";
                $response = $client->request('GET', $url);
                $name->user_id = $request->id;
                $name->name = $request->name;
                $name->save();
            }
            catch (\GuzzleHttp\Exception\RequestException $e) {
                return back()->with('open', 'blacklist')->with('error', "User <b>$request->name</b> Notfound");
            }   

        }
        return back()->with('open', 'blacklist');
    }

    public function delete($id) {
        $name = BlacklistUsername::findOrFail($id);
        $name->delete();
        return back()->with('open', 'blacklist');
    }

    public function deleteAll($id) {
        $user =  User::findOrFail($id);
        foreach ($user->blacklistUsernames as $tag) {
            $tag->delete();
        }
        return back()->with('open', 'blacklist');
    }
}
