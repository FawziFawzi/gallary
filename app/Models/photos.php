<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class photos extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'title',
        'thumbnail'
        ];


    public function scopeFilter($query,array $filters){
//        if (isset($filters['tags'])){
//            $query->
//            whereExists(fn($query)=>
//            $query->
//            from('photo_tags')
//                ->whereColumn('photos.photo_tags_id','photo_tags.id')
//                ->where('photo_tags.slug',$filters['tags'])
//            );
//        }else{
//            dd("NO");
//        }
        if (isset($filters['tags'])){
            $query->whereHas('photoTags',fn($query)=>
            $query->where('photo_tags.slug',$filters['tags'])
            );
        }
    }

    public function user(){

        return $this->belongsTo(user::class);
    }

    public function favourites()
    {
        return $this->hasMany(favourits::class);
    }

    public function photoTags()
    {
        return $this->belongsTo(photoTags::class);
    }

}
