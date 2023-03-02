<?php

namespace App\Http\Controllers;

use App\Models\posts;
use Illuminate\Http\Request;

class CommentsController extends Controller
{

    public function store(posts $post)
    {
        // dd(request('body'));
        //validate the request
        request()->validate([
            'body' =>'required'
        ]);

        // create the comment
        $post->comments()->create([
            'body'=> request('body') ,
            'user_id'=>request()->user()->id,
            'post_id'=>$post->id

        ]);

        // return back
        return back();
    }


}
