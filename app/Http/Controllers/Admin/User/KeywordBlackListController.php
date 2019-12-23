<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\BlacklistKeyword;
use App\User;

class KeywordBlackListController extends Controller
{
    public function store(Request $request) {
        
        if($request->keyword) {
          
            $words = preg_split( '/\r\n|\r|\n/', $request->keyword);
            foreach($words as $word) {
                BlacklistKeyword::create([
                    'user_id' => $request->id,
                    'keyword' => $word
                ]);
            }
        }
        return back()->with('open', 'blacklist');
    }

    public function delete($id) {
        $name = BlacklistKeyword::findOrFail($id);
        $name->delete();
        return back()->with('open', 'blacklist');
    }

    public function deleteAll($id) {
        $user =  User::findOrFail($id);
        foreach ($user->blacklistKeywords as $tag) {
            $tag->delete();
        }
        return back()->with('open', 'blacklist');
    }
}
