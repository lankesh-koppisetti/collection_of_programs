<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller {

    function getComment($post_id) {
       
        return \App\Models\Post::find($post_id)->Comment;
    }

}
