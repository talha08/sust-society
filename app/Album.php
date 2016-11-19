<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = 'album';
    protected $guarded = [];


    public function albumFile(){
        return $this->hasMany('App\AlbumPhotos','album_id','id');
    }

    public function user()
    {
        return $this->belongsTo('App\User','user_id','id');
    }
}
