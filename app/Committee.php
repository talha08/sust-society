<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Committee extends Model
{
    protected $table = 'committee';

    public function committeeMemberList(){
        return $this->hasMany('App\Committee','committee_id','id');
    }

    public function department()
    {
        return $this->belongsTo('App\Department','dept_id','id');
    }
}
