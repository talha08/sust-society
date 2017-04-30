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


    /**
     * Event Registration
     * @param $id
     * @return $this
     */
    public function show($id)
    {
        $regis = Registration::where('event_id', $id)->get();
        $event = Event::where('id',$id)->pluck('headline');
        return  view('registration.show',compact('regis'))->with('title', 'Register Members for - '. $event);
    }


    public function register(Request $request){
        //return $request->all();

        $reg = new Registration();
        $reg->event_id = $request->event;
        $reg->user_id = $request->user;
        if($reg->save()){
            return redirect()->back()->with('success', 'Registration Complete Successfully!');
        }else{
            return redirect()->back()->with('error', 'Something went wrong , Please try again!');
        }
    }
}
