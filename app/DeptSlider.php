<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeptSlider extends Model
{
    #table initialized
    protected $table = 'dept_slider';


    /**
     * One to Many Relation with Department
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function dept()
    {
        return $this->belongsTo('App\Department','dept_id','id');
    }
}


