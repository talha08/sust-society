<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    protected $table = 'notice';


    public function noticeFile(){
        return $this->hasMany('App\NoticeAttachment','notice_id','id');
    }

    public function dept()
    {
        return $this->belongsTo('App\Department','dept_id','id');
    }
}
