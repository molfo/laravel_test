<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\softDeletes;

class Comment extends Model
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
        $this->belongsTo(User::class);
    }
}
