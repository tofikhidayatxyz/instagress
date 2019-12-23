<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Tag;
use App\User;

class TagController extends Controller
{
    public function store(Request $request) {
        if($request->tags) {
            $tags =  explode(' ', $request->tags);
            $id =  $request->id;            
            foreach($tags as $tag) {
                Tag::Create([
                    'user_id' => $id,
                    'tag' => $tag
                ]);
            }
        }

        return back()->with('open', 'tags');
    }

    public function delete($id) {
        $tag = Tag::findOrFail($id);
        $tag->delete();
        return back()->with('open', 'tags');
    }

    public function deleteAll($id) {
        $user =  User::findOrFail($id);
        foreach ($user->tags as $tag) {
            $tag->delete();
        }
        return back()->with('open', 'tags');
    }
}
