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
        $notices = Notice::orderBy('id')->paginate(10);
        return view('notice',compact('notices'))->with('title',"Departments Notice");
    }


    public function noticeDetails($event_meta_data){
        $events = Event::orderBy('id', 'desc')->take(9)->get();
        $notice = Notice::where('notice_meta_data', $event_meta_data)->first();
        return view('noticeFull',compact('notice', 'events'))->with('title',$notice->headline);
    }

    public function event(){
        $events = Event::orderBy('id')->paginate(10);
        return view('event',compact('events'))->with('title',"Departments Events");
    }

    public function eventDetails($event_meta_data){
        $events = Event::orderBy('id', 'desc')->take(9)->get();
        $event = Event::where('event_meta_data', $event_meta_data)->first();
        return view('eventFull',compact('event', 'events'))->with('title',$event->headline);
    }
}
