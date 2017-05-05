<?php

namespace App\Http\Controllers;

use App\Department;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

abstract class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;



    private $department;

    public function __construct()
    {
            //share variable in all view
            $this->department = Department::take(5)->get();
            view()->share('department', $this->department);


            $this->user_type= [
                    '2' => 'Faculty Member',
                    '3' => 'Student',
                ];
                view()->share('user_type', $this->user_type);


            $this->dept_id = Department::lists('name','id');
                view()->share('dept_id', $this->dept_id);


    }


}
