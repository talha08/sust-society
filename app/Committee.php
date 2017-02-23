<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Committee extends Model
{
    #table name initialized
    protected $table = 'committee';
//    public $with = ['committeeMemberList'];


    /**
     * One to Many Relation with Committee
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function committeeMemberList(){
        return $this->hasMany('App\Committee','committee_id','id');
    }

    /**
     * One to Many Relation with Department
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function department()
    {
        return $this->belongsTo('App\Department','dept_id','id');
    }
}
