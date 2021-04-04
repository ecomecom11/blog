<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

class SessionsController extends Controller
{
    //
    public function create()
    {
        return view('sessions.create');
    }

    public function store(Request $request)
    {
        $credentials = $this->validate($request, [
            'email' => 'required|email|max:255',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)){
            session()->flash('success', 'Welcome back!');
            return redirect()->route('users.show', [auth::user()]);
        } else {
            session()->flash('danger', 'Sorry, your login information is not correct');
            return redirect()->back()->withInput();
        }
    }  
    
    public function destroy(){
        Auth::logout();
        session()->flash('success', 'You have successfully logged out!');
        return redirect('login');
    }
    
}
