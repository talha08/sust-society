<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = 'department';

    public function event(){
        return $this->hasMany('App\Event','dept_id','id');
    }

    public function users(){
        return $this->hasMany('App\User','dept_id','id');
    }

    public function album(){
        return $this->hasMany('App\Album','dept_id','id');
    }
}
