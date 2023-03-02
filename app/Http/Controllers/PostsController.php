<?php

namespace App\Http\Controllers;

use App\Models\posts;
use App\Models\postTags;
use Illuminate\Http\Request;

class PostsController extends Controller
{

    public function index(){
        return view('posts.posts',[
            'posts'=>posts::latest()->paginate(4)->withQueryString(),
        ]);
    }

    public function show(posts $post){
        return view('posts.blog-post',['post'=>$post]);

    }
    public function tag(postTags $tags){
        return view('posts.posts',['tags'=>$tags->posts]);

    }



}
