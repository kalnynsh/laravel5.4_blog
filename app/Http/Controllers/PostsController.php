<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostsController extends Controller
{
    public function index() {
        
        return view('posts.index');
    }
    
    public function show() {
        
        return view('posts.show');
    }
    
    public function create() {
        
        return view('posts.create');
    }
    
    public function store() {  
      
//        Post::create([
//            
//            'title' => request('title'),
//            
//            'body' => request('body')
//        ]);
        
        // Validation
        $this->validate(request(), [
            
            'title' => 'required', // 'required|min:10|max:255' 10 min charecters
            'body' => 'required', 
        ]);             
        
        Post::create(request(['title', 'body']));
        
        // Redirect to Home page
        return redirect('/');
    }
}
