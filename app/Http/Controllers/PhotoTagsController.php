<?php

namespace App\Http\Controllers;

use App\Models\photoTags;
use Illuminate\Http\Request;

class PhotoTagsController extends Controller
{
    public function show()
    {
        return view('design.index', [
            'pTags' => photoTags::all()
        ]);
    }
}
