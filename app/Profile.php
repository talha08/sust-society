<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table ='profile';

    /**
     * Profile belongsTo User
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function users(){
        return $this->belongsTo('App\User','user_id','id');
    }
}
