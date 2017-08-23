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
    
    public function user() {
        
        return $this->belongsTo(User::class);
        
    }
    
    public function addComment($body) 
    {

        $this->comments()->create(compact('body'));
        
    }
    
    public function scopeFilter($query, $filters) 
    {
        
        if ($month = $filters['month']) {
            
           $query->whereMonth('created_at', $month);
            
        }
        
        if ($year = $filters['year']) {
            
            $query->whereYear('created_at', $year);
            
        }
        
    }
}
