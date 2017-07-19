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
    private $user_type;
    private $dept_id;

    public function __construct()
    {
            //share variable in all view
            //this is for the nav bar
            $this->department = Department::where('status', true)->take(5)->get();
            view()->share('department', $this->department);

             //this is for the registration system
             $this->user_type= [
                    '2' => 'Faculty Member',
                    '3' => 'Student',
                ];
                view()->share('user_type', $this->user_type);


            $this->dept_id = Department::where('status', true)->lists('name','id');
                view()->share('dept_id', $this->dept_id);


    }


}
