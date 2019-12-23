<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\BlacklistTag;

class TagBlackListController extends Controller
{
    public function store(Request $request, BlacklistTag $tag) {
        $tag->user_id = $request->id;
        $tag->tag = $request->tag;
        $tag->save();
        return back()->with('open', 'blacklist');
    }

    public function delete($id) {
        $tag = BlacklistTag::findOrFail($id);
        $tag->delete();
        return back()->with('open', 'blacklist');
    }

    public function deleteAll($id) {
        $user =  User::findOrFail($id);
        foreach ($user->blacklistTags as $tag) {
            $tag->delete();
        }
        return back()->with('open', 'blacklist');
    }
}
