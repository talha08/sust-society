<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table='events';

    /**
     * One to many relationship with EventAttachment
     * Event Has Many eventFile
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function eventFile(){
        return $this->hasMany('App\EventAttachment','event_id','id');
    }

    public function dept()
    {
        return $this->belongsTo('App\Department','dept_id','id');
    }


    public function registration(){
        return $this->hasMany('App\Registration','event_id','id');
    }
}
