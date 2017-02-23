<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommitteeMemberType extends Model
{

    #table name initialized
    protected $table = 'committee_member_type';

    /**
     *One to Many Relation with CommitteeMemberList
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function memberList(){
        return $this->hasMany('App\CommitteeMemberList','member_type_id','id');
    }

}
