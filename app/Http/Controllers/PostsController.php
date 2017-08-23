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
         
//        $posts = Post::orderBy('created_at', 'desc')->get();
        $posts = Post::latest()->get();
        
        $archives = Post::selectRaw(
                "DATE_PART('year', created_at) AS year, "
                . "DATE_PART('month', created_at) AS month,"
                . "COUNT(*) AS published")
                
                ->groupBy('year','month')
                
                ->get()
                
                ->toArray();
        
        return $archives;
        
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
       
        // Validation
        $this->validate(request(), [
            
            'title' => 'required|min:3', // 'required|min:10|max:255' 10 min charecters
            'body' => 'required', 
        ]);
        
        auth()->user()->publish(
                
           new Post(request(['title', 'body']))
                
        );
           
        // Redirect to Home page
        return redirect('/');
    }
}
