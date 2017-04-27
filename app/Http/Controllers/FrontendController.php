<?php

namespace App\Http\Controllers;

use App\Album;
use App\AlbumPhotos;
use App\Department;
use App\DeptSlider;
use App\Event;
use App\Notice;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{



    /**
     * Frontend Welcome Page
     * @return $this
     */
    public function index(){
         $depts = Department::all();
         $events = Event::orderBy('id', 'desc')
                 ->take(10)
                 ->get();
        return view('welcome', compact('events','depts'))->with('title',"Departments");
    }




    /**
     * Frontend Notice Page
     * @return $this
     */
    public function notice(){
        $evenImg = Event::orderBy('id', 'desc')->take(9)->get();
        $notices = Notice::orderBy('id')->paginate(10);
        return view('notice',compact('notices','evenImg'))->with('title',"Departments Notice");
    }




    /**
     * Frontend Notice Details
     * @param $notice_meta_data
     * @return $this
     */
    public function noticeDetails($notice_meta_data){
        $evenImg = Event::orderBy('id', 'desc')->take(9)->get();
        $notice = Notice::where('notice_meta_data', $notice_meta_data)->first();
        return view('noticeFull',compact('notice','evenImg'))->with('title',$notice->headline);
    }




    /**
     * Frontend Event Page
     * @return $this
     */
    public function event(){
        $evenImg = Event::orderBy('id', 'desc')->take(9)->get();
        $events = Event::orderBy('id')->paginate(10);
        return view('event',compact('events','evenImg'))->with('title',"Departments Events");
    }




    /**
     * Frontend Event Details
     * @param $event_meta_data
     * @return $this
     */
    public function eventDetails($event_meta_data){
        $evenImg = Event::orderBy('id', 'desc')->take(9)->get();
        $event = Event::where('event_meta_data', $event_meta_data)->first();
        return view('eventFull',compact('event','evenImg'))->with('title',$event->headline);
    }




    /**
     *  Frontend  Department-wise Page
     * @param $id
     * @return $this
     */
    public function department($id){
        $dept = Department::where('id', $id)->first();
        //$slider = DeptSlider::take(4)->orderBy('id')->get();
        //return $dept->committee;
        //return count($dept->slider);

        $albumIds = Album::where('dept_id',$id)->lists('id','id');
        $slider = AlbumPhotos::whereIn('album_id',$albumIds)->get();



        return view('department',compact('dept', 'slider'))->with('title',$dept->name);
    }





}
