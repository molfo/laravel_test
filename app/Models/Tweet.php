<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Tweet extends Model
{
    use softDeletes;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'text'
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function favorites()
    {
        return $this->hasMany(Favorite::class);
    }
    
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    
    public function getUserTimeLine(Int $user_id)
    {
        return $this->where('user_id',$user_id)->orderBy('create_at','DESC')->paginate(50);
        
    }
    
    public function getTweetCount(Int $user_id)
    {
        return $this->where('user_id',$user_id)->count();
        
    }
}
