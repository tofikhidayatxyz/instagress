<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Location;
use App\User;

class LocationController extends Controller
{
    public function store(Request $request, Location $location) {
        if($request->location) {
            $location->user_id = $request->id;
            $location->location = $request->location;
            $location->save();
        }
        return back()->with('open', 'locations');
    }

    public function delete($id) {
        $tag = Location::findOrFail($id);
        $tag->delete();
        return back()->with('open', 'locations');
    }

    public function deleteAll($id) {
        $user =  User::findOrFail($id);
        foreach ($user->locations as $tag) {
            $tag->delete();
        }
        return back()->with('open', 'locations');
    }
}
