<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class favourits extends Model
{
    use HasFactory;

    public function user(){

        return $this->belongsTo(user::class);
    }

    public function photo()
    {
        return $this->belongsTo(photos::class);
    }
}
