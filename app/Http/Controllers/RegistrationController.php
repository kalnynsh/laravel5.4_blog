<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\Mail\Welcome;

use App\Http\Requests\RegistrationForm;


class RegistrationController extends Controller
{
    public function create() 
    {
       
        return view('registration.create');
        
    }

    public function store(RegistrationForm $request) 
    {   
              
        // Redirect to the home page.
        return redirect()->home();  // redirect('/);
        
    }
}
