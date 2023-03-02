<?php

namespace App\Http\Controllers;

use App\Models\postTags;
use Illuminate\Http\Request;

class PostTagsController extends Controller
{
    public function index(postTags $tags)
    {

        return view('posts.postTags',
        ['posts'=>$tags->posts
    ]);
//     return view('posts.posts',
//     ['tags'=>$tags->posts
// ]);


    }
}
