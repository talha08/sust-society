<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $table = 'registration';

    public function user(){
        return $this->hasMany('App\User','user_id','id');
    }


    public function event()
    {
        return $this->belongsTo('App\Event','event_id','id');
    }

}
