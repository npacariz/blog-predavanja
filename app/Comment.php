<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'name',
        'text',
        'user_id'
    ];

    public function post() 
    {
        return $this->belongsTo(Post::class);
    }
}
