<?php

namespace App\Repositories;

use App\Post;


class Posts
{
    
    public function all() 
    {
        
        // return ALL posts
        
//        return Post::select()->get();
        
        return Post::all();
        
    }
    
    
}
