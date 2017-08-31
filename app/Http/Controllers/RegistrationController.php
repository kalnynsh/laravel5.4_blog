<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationForm;


class RegistrationController extends Controller
{
    public function create() 
    {
       
        return view('registration.create');
        
    }

    public function store(RegistrationForm $form) 
    {   
        $form->persist();
        
        session('message', 'Here is default message');
        
        // Redirect to the home page.
        return redirect()->home();  // redirect('/);
        
    }
}
