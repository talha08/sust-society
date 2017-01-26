<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommitteeMemberList extends Model
{
    protected $table = 'committee_member_list';

    public function committeMemberType()
    {
        return $this->belongsTo('App\CommitteeMemberType','member_type_id','id');
    }


    public function committee()
    {
        return $this->belongsTo('App\Committee','committee_id','id');
    }


    public function user()
    {
        return $this->belongsTo('App\User','user_id','id');
    }
}
