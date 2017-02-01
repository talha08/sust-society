<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NoticeAttachment extends Model
{
    protected $table = 'notice_attachment';

    public function event()
    {
        return $this->belongsTo('App\Notice','notice_id','id');
    }
}
