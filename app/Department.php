<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    #table name initialized
    protected $table = 'department';

    //public $with = ['committee'];


    /**
     * One to Many Relation with Event
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function event(){
        return $this->hasMany('App\Event','dept_id','id');
    }



    /**
     * One to Many Relation with Notice
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function notice(){
        return $this->hasMany('App\Notice','dept_id','id');
    }




    /**
     * One to Many Relation with User
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users(){
        return $this->hasMany('App\User','dept_id','id');
    }




    /**
     * One to Many Relation with Album
     * @return \Illuminate\Database\Eloquent\Relations\HasMan
     */
    public function album(){
        return $this->hasMany('App\Album','dept_id','id');
    }




    /**
     * One to Many Relation with Committee
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function committee(){
        return $this->hasMany('App\Committee','dept_id','id');
    }



    /**
     * One to Many Relation with DeptSlider
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function slider(){
        return $this->hasMany('App\DeptSlider','dept_id','id');
    }


}
