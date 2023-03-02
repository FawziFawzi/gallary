<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class posts extends Model
{
    use HasFactory;

    protected $fillable=[
        'title',
        'post_slug',
        'excerpt',
        'body',
        'post_thumbnail'
    ];

    // EAGER LOAD:

    // protected $with=[
    //     'user',
    //     'postTags'
    // ];


    public function user(){

        return $this->belongsTo(user::class);
    }

    public function comments(){

        return $this->hasMany(comments::class,'post_id');
    }

    public function postTags()
    {

        return $this->belongsTo(postTags::class);
    }

}
