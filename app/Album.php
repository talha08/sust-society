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

    public function dept()
    {
        return $this->belongsTo('App\Department','dept_id','id');
    }
}
