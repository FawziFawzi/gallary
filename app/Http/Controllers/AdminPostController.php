<?php

namespace App\Http\Controllers;

use App\Models\posts;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminPostController extends Controller
{
    public function index()
    {
        return view('dashboard.adminPosts',[
            'posts' => posts::paginate(50)
        ]);
    }
    public function create()
    {
       return view('dashboard.addpost');
    }
    public function store()
    {



       $attributes= $this->validatePost();
       $attributes ['user_id'] =auth()->id();
       $attributes ['post_thumbnail'] = request()->file('post_thumbnail')->store('post_thumbnails');
       posts::create($attributes);

       return redirect('/blog');
    }

    public function edit(posts $post)
    {

        return view('dashboard.editpost',['post'=>$post]);
    }
    public function update(posts $post)
    {

        $attributes= $this->validatePost($post);
           if (isset($attributes['post_thumbnail'])) {
            $attributes ['post_thumbnail'] = request()->file('post_thumbnail')->store('post_thumbnails');
           }


           $post->update($attributes);
           return back()->with('success' ,'post updated');
    }

    public function destroy(posts $post)
    {
        $post->delete();
        return back()->with('success' ,'post was deleted');
    }
//  WHEN THERE IS DUOPLICATION IN VALIDATION WA MAKE IF LOOK THE SAME ANDWORKING OFCOURSE THEN WE EXTRACT IT INTO ANOTHER METHOD

    public function validatePost(?posts $post =null)
    {
        $post ??=new posts();
        return request()->validate([
            'title' => 'required',
            'post_thumbnail' => $post->exists? ['image'] :['required','image'],
            'post_slug' =>['required',Rule::unique('posts')->ignore($post->id )],
            'excerpt' => 'required',
            'body' => 'required',
            'post_tags_id' =>['required', Rule::exists('post_tags','id')]
           ]);
    }
}
