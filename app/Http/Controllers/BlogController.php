<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;

class BlogController extends Controller
{
    public function index() {
        return view('blog');
    }

    public function view($file) {

        $file = str_replace('.html', '', $file); 
        return view('blogs.'.$file);
    }
}
