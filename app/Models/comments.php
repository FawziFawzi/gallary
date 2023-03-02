<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
    use HasFactory;

    public function user(){

        return $this->belongsTo(user::class);
    }

    public function post(){

        return $this->belongsTo(posts::class,'post_id');
    }

}
