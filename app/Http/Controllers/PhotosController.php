<?php

namespace App\Http\Controllers;

use App\Models\photos;
use App\Models\photoTags;
use Illuminate\Http\Request;

class photosController extends Controller
{
    public function index(){
//       dd (photos::latest()->with('photoTags')->filter(['tags'])->get());


        return view('photos.index', [

            'photos'=>photos::latest()->filter(\request(['tags']))->get(),
//            'tags'=>photoTags::all()
            ]);
    }


}
