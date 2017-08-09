<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostsController extends Controller
{
    public function __construct() {
        
        $this->middleware('auth')->except(['index', 'show', ]);
    }
    
    
    public function index() {
        
//        $posts = Post::latest()->all();
        
        $posts = Post::orderBy('created_at', 'desc')->get();
        
        return view('posts.index', compact('posts'));
    }
    
    public function show(Post $post) {
        
//        $post = Post::find($post);
        
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
            
            'title' => 'required|min:3', // 'required|min:10|max:255' 10 min charecters
            'body' => 'required', 
        ]);             
        
        Post::create([
            'title' => request('title'), 
            'body' => request('body'), 
            'user_id' => auth()->id(),  // 'user_id' => auth()->user()->id
        ]);
        
        // Redirect to Home page
        return redirect('/');
    }
}
