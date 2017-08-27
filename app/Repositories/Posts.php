<?php

namespace App\Repositories;

use App\Post;

use App\Redis;


class Posts
{
    protected $redis;


    public function __construct(Redis $redis) 
    {
            
        $this->redis = $redis;
            
    }       
        
    public function all() 
    {    
        
        // return ALL posts
        
//        return Post::select()->get();
        
        return Post::all();
        
    }    
    
}
