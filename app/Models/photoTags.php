<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class photoTags extends Model
{
    use HasFactory;
    public function photos(){
        return $this->hasMany(photos::class);
    }
}
