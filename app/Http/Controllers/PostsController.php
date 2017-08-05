<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostsController extends Controller
{
    public function index() {
        
        $posts = Post::all();
        
        return view('posts.index', compact('posts'));
    }
    
    public function show($id) {
        
        $post = Post::find($id);
        
        return view('posts.show', compact('post'));
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
