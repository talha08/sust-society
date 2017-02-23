<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = 'department';

    //public $with = ['committee'];

    public function event(){
        return $this->hasMany('App\Event','dept_id','id');
    }

    public function notice(){
        return $this->hasMany('App\Notice','dept_id','id');
    }

    public function users(){
        return $this->hasMany('App\User','dept_id','id');
    }

    public function album(){
        return $this->hasMany('App\Album','dept_id','id');
    }

    public function committee(){
        return $this->hasMany('App\Committee','dept_id','id');
    }

    public function slider(){
        return $this->hasMany('App\DeptSlider','dept_id','id');
    }
}
