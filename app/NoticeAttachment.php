<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NoticeAttachment extends Model
{
    #table initialized
    protected $table = 'notice_attachment';

    /**
     * One to Many Relation with Notice
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function event()
    {
        return $this->belongsTo('App\Notice','notice_id','id');
    }
}
