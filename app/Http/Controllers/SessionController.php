<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    
    public function __construct() 
    {
        
        $this->middleware('guest');
    }
    
    public function create()
    {
        
        return view('sessions.create');
        
    }
    
    public function store()
    {
// Attempt to authenticate the user.
        
        if (!auth()->attempt(request(['email', 'password']))) {
            
            return back();
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
