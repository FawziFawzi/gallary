<?php

namespace App\Http\Controllers;

use App\Models\photos;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminPhotoController extends Controller
{

    public function index()
    {
        $photos = photos::paginate(50);

        return view('dashboard.adminphoto',['photos'=>$photos]);
    }

    public function edit(photos $photo)
    {

        return view('dashboard.editphoto', ['photo'=>$photo]);
    }

    public function update(photos $photo)
    {
        $attributes = request()->validate([
            'title' => 'required',
            'thumbnail' =>'image',
            'photo_tags_id' =>['required' ,Rule::exists('photo_tags','id')]
           ]);

           if(isset($attributes['thumbnail'])){
           $attributes['thumbnail'] =request()->file('thumbnail')->store('photoThumbnails');
           }
           $photo->update($attributes);
           return back()->with('success','Photo updated');
    }
}
