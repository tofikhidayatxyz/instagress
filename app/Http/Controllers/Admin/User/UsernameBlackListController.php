<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\BlacklistUsername;

class UsernameBlackListController extends Controller
{
    public function store(Request $request, BlacklistUsername $name) {
        if($request->name) {
            $name->user_id = $request->id;
            $name->name = $request->name;
            $name->save();
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
