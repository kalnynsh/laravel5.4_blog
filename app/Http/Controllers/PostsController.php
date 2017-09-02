<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use App\Repositories\Posts;

use App\Tag;


class PostsController extends Controller
{
    public function __construct() {
        
        $this->middleware('auth')->except(['index', 'show', ]);
    }
    
    
    public function index(Tag $tag = null) { 
        
//        $posts = $posts->all();
         
        $posts = Post::latest()
                
                ->filter(request(['month', 'year']))
                
                ->get();        
        
        return view('posts.index', compact('posts'));
    }
    
    public function show(Post $post) {
            
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
        
        session()->flash(
                'message', 'Your post has now been published.'
        );
           
        // Redirect to Home page
        return redirect('/');
    }
}
