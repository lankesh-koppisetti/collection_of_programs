<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller {

    function getUser($user_id) {

       
        return \App\Models\User::find($user_id);
    }

    function getPost($user_id) {


        return \App\Models\User::find($user_id)->Post;
    }

    function getComment($post_id) {

        return \App\Models\Post::find($post_id)->Comment;
    }
    
    function getLikes($post_id) {

        return \App\Models\Post::find($post_id)->Like;
    }

}

