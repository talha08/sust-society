<?php

namespace App\Http\Controllers;

use App\Event;
use App\Registration;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $regis = Event::where('open_registration', true)->where('dept_id', \Auth::user()->dept->id)->get();
        return  view('registration.index',compact('regis'))->with('title', 'All Open Registration');
    }


    public function show($id)
    {
        $regis = Registration::where('event_id', $id)->get();
        $event = Event::where('id',$id)->pluck('headline');
        return  view('registration.show',compact('regis'))->with('title', 'Register Members for - '. $event);
    }

}
