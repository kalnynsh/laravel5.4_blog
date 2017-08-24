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
    
    public static function archives() 
    {
      
        return static::selectRaw(
                "DATE_PART('year', created_at) AS year, "
                . "DATE_PART('month', created_at) AS month,"
                . "COUNT(*) AS published")
                
                ->groupBy('year','month')
                
                ->orderByRaw('MIN(created_at) DESC')
                
                ->get()
                
                ->toArray();
        
    }
}
