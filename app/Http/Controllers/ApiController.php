<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ApiController extends Controller
{
    /**
     * Section dependant dropdown system
     * This is for committee create
     *
     * @return \Illuminate\Http\Response
     */
    public function sectionDropDownData()
    {
        $member_type_id = \Input::get('member_type_id');

        if($member_type_id == 1 or $member_type_id == 2 ){
             $teacherList =\DB::table('role_user')
               ->where('role_id',2)
               ->lists('user_id');

           $users = User::where('dept_id', \Auth::user()->dept_id)->whereIn('id',$teacherList )->lists('name','id');
           return \Response::json($users);
        }else{
            $studentList =\DB::table('role_user')
                ->where('role_id',3)
                ->lists('user_id');

            $users = User::where('dept_id', \Auth::user()->dept_id)->whereIn('id',$studentList )->lists('name','id');
            return \Response::json($users);
        }




    }






}
