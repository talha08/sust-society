<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlbumPhotos extends Model
{
    #Fillable Values
    protected $fillable =[];

    #table name initialized
    protected $table = 'album_file';


    /**
     * One to Many Relation with Album
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function album()
    {
        return $this->belongsTo('App\Album','album_id','id');
    }

}
