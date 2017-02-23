<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    #table name initialized
    protected $table = 'album';

    #guarded values
    protected $guarded = [];


    /**
     * One to Many Relation with AlbumPhotos
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function albumFile(){
        return $this->hasMany('App\AlbumPhotos','album_id','id');
    }


    /**
     * One to Many Relation with Department
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function dept()
    {
        return $this->belongsTo('App\Department','dept_id','id');
    }
}
