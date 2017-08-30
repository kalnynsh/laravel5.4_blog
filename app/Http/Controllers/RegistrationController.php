<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\Mail\Welcome;

use App\Http\Requests\RegistrationRequest;


class RegistrationController extends Controller
{
    public function create() 
    {
       
        return view('registration.create');
        
    }

    public function store(RegisrationRequest $request) 
    {
      
        // Create and save User
        $user = User::create(request([
            'name',
            'email',
            'password',
        ]));
        
        // Sign new User in.
        
//        \Auth::login();
//        auth();
//        \Request::input();
//          request()->input();        
        
        auth()->login($user);
        
        \Mail::to($user)->send(new Welcome($user));
                
        // Redirect to the home page.
        return redirect()->home();  // redirect('/);
        
    }
}
