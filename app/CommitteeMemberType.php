<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommitteeMemberType extends Model
{
    protected $table = 'committee_member_type';

    public function memberList(){
        return $this->hasMany('App\CommitteeMemberList','member_type_id','id');
    }

}
