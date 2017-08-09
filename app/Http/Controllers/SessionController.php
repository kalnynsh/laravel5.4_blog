<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    
    public function __construct() 
    {
        
        $this->middleware('guest', ['except' => 'destroy']);
    }
    
    public function create()
    {
        
        return view('sessions.create');
        
    }
    
    public function store()
    {
// Attempt to authenticate the user.
        
        if (!auth()->attempt(request(['email', 'password']))) {
            
            return back()-withErrors([
                
               'message' =>  'Please check your credentials '
                . 'and try again.'
                
            ]);
        }
        
// If not, redirect back        
              

// If so, sign them in.
        

// Derirect to home page.
        
        return redirect()->home();
        
    }
    
    public function destroy() 
    {
        
        auth()->logout();
        
        return redirect()->home();
        
    }
}
