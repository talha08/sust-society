<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{


    #table initialized
    protected $table = 'notice';



    /**
     * One to Many Relation with NoticeAttachment
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function noticeFile(){
        return $this->hasMany('App\NoticeAttachment','notice_id','id');
    }




    /**
     * One to Many Relation with Department
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function dept()
    {
        return $this->belongsTo('App\Department','dept_id','id');
    }


}
