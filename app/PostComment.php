<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostComment extends Model
{
    protected $fillable = [
        'name', 'email', 'comment', 'post_id'
    ];
    public function post(){
        return $this->belongsTo('App\Post');
    }
}
