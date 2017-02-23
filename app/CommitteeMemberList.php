<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommitteeMemberList extends Model
{
    #table name initialized
    protected $table = 'committee_member_list';

    /**
     * One to Many Relation with CommitteeMemberType
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function committeMemberType()
    {
        return $this->belongsTo('App\CommitteeMemberType','member_type_id','id');
    }


    /**
     * One to Many Relation with Committee
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function committee()
    {
        return $this->belongsTo('App\Committee','committee_id','id');
    }


    /**
     * One to Many Relation with User
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User','user_id','id');
    }
}
