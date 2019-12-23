<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Comment;

class CommentController extends Controller
{
    public function store(Request $request) {
        
        if($request->comment) {
          
            $words = preg_split( '/\r\n|\r|\n/', $request->comment);
            foreach($words as $word) {
                Comment::create([
                    'user_id' => $request->id,
                    'comment' => $word
                ]);
            }
        }
        return back()->with('open', 'comment');
    }

    public function delete($id) {
        $name = Comment::findOrFail($id);
        $name->delete();
        return back()->with('open', 'comment');
    }

    public function deleteAll($id) {
        $user =  User::findOrFail($id);
        foreach ($user->comments as $tag) {
            $tag->delete();
        }
        return back()->with('open', 'comment');
    }
}
