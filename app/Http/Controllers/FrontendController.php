<?php

namespace App\Http\Controllers;

use App\Department;
use App\Event;
use App\Notice;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{

    public function index(){
         $depts = Department::all();
         $events = Event::orderBy('id', 'desc')
                 ->take(10)
                 ->get();
        return view('welcome', compact('events','depts'))->with('title',"Departments");
    }


    public function notice(){
        $evenImg = Event::orderBy('id', 'desc')->take(9)->get();
        $notices = Notice::orderBy('id')->paginate(10);
        return view('notice',compact('notices','evenImg'))->with('title',"Departments Notice");
    }


    public function noticeDetails($notice_meta_data){
        $evenImg = Event::orderBy('id', 'desc')->take(9)->get();
        $notice = Notice::where('notice_meta_data', $notice_meta_data)->first();
        return view('noticeFull',compact('notice','evenImg'))->with('title',$notice->headline);
    }

    public function event(){
        $evenImg = Event::orderBy('id', 'desc')->take(9)->get();
        $events = Event::orderBy('id')->paginate(10);
        return view('event',compact('events','evenImg'))->with('title',"Departments Events");
    }

    public function eventDetails($event_meta_data){
        $evenImg = Event::orderBy('id', 'desc')->take(9)->get();
        $event = Event::where('event_meta_data', $event_meta_data)->first();
        return view('eventFull',compact('event','evenImg'))->with('title',$event->headline);
    }



    public function department($id){
        $dept = Department::where('id', $id)->first();
        //return $dept->committee;
        return view('department',compact('dept'))->with('title',$dept->name);
    }


}
