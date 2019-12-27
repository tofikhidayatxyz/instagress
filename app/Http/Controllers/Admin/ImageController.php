<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\UserImage;
use Carbon\Carbon;

class ImageController extends Controller
{
    public function index($id) {

        $user =  User::findOrFail($id);
        $images =  $user->images()->paginate(20);
        return view('admin.user.image', compact('user', 'images'));
    }

    public function store($id, Request $request) {

        $user = User::findOrFail($id);
        
        $files =  $request->file('file');
        foreach ($files as $file) {
            $filename =  sha1($user->id . $file->getClientOriginalName(). Carbon::now()) . '.'. $file->getClientOriginalExtension();
            $file->storeAs('public/images/', $filename);
            UserImage::create([
                'user_id' => $user->id,
                'image' => $filename
            ]);
        }
        return back()->with('success', 'Success upload user images');
    }

    public function delete($id, $imageId) {
        
        $image = UserImage::findOrFail($imageId);
        $image->delete();
        return back()->with('success', 'Success delete user images');
    }
 }
