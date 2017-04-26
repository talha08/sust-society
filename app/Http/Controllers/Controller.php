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
            $this->department = Department::all();
            view()->share('department', $this->department);


    }


}
