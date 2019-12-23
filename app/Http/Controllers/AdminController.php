<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    public function index(Request $request) {

        $query = $request->has('query') ? $request->get('query') : false;

        $users = User::whereHas('roles', function($q) {
            $q->where('name', 'user');
        });
        if($query) {
            $users = $users->where(function($q) use($query) {
                $q->where('email', 'like', '%'. $query .'%')
                  ->orWhere('email', 'like', '%'. $query .'%')
                  ->orWhere('created_at', 'like', '%'. $query .'%')
                  ->orWhere('status', 'like', '%'. $query .'%');  
            });
        }
        $users = $users->paginate(20);
    
        return view('admin.index', compact('users'));

    }
}
