<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlbumPhotos extends Model
{

    protected $fillable =[];
    protected $table = 'album_file';



    public function album()
    {
        return $this->belongsTo('App\Album','album_id','id');
    }

}
