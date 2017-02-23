<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{

    #table initialized
    protected $table = 'registration';


    /**
     * One to Many Relation with User
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function user(){
        return $this->hasMany('App\User','user_id','id');
    }


    /**
     * One to Many Relation with Event
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function event()
    {
        return $this->belongsTo('App\Event','event_id','id');
    }

}
