<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeptSlider extends Model
{
    protected $table = 'dept_slider';

    public function dept()
    {
        return $this->belongsTo('App\Department','dept_id','id');
    }
}
