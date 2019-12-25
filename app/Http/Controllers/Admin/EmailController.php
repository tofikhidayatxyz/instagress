<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\AdminMail;

class EmailController extends Controller
{
    public function index(Request $request) {

        $key =  $request->has('query') ? $request->get('query') : null;
        if($key) {
            $mails = AdminMail::where('name', 'LIKE', '%'. $key .'%')
                                ->orWhere('email', 'LIKE', '%'. $key .'%')
                                ->paginate(10);
        } else {
            $mails = AdminMail::paginate(10);
        }

        return view('admin.email.index', compact('mails'));

    }

    public function create() {

        return view('admin.email.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email'
        ]);
        AdminMail::create($request->all());

        return redirect()->route('admin.email.index')->with('success', 'Successfully add new admin email');        
    }

    public function edit($id) {
       $email =  AdminMail::findOrFail($id);
       return view('admin.email.edit', compact('email')); 
    } 


    public function update(Request $request) {

        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email'
        ]);
        $email = AdminMail::findOrFail($request->id); 
        $email->update($request->all());
        return redirect()->route('admin.email.index')->with('success', 'Successfully update admin email');  
    }

    public function delete($id) {
        $email = AdminMail::findOrFail($id); 
        $email->delete();
        return redirect()->route('admin.email.index')->with('success', 'Successfully delete admin email'); 
    }
}
