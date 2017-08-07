<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;

use App\Comment;


class Post extends Model
{
    protected $fillable = ['title', 'body'];
    
    public function comments() 
    {
    
        return $this->hasMany(Comment::class);  // 'App\Comment'
        
    }
    
    public function addComment($body) 
    {

        $this->comments()->create(compact('body'));
        
    }
}
