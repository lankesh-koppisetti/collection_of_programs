<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
       public function User(){
        $this->belongsTo(User::class);
    }
    
      public function Comment(){
        return $this->hasMany(Comment::class);
    }
     public function like(){
        return $this->hasMany(Like::class);
    }
}
