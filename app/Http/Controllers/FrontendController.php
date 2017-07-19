<?php

namespace App\Http\Controllers;

use App\Album;
use App\AlbumPhotos;
use App\Committee;
use App\CommitteeMemberList;
use App\CommitteeMemberType;
use App\Department;
use App\DeptSlider;
use App\Event;
use App\Notice;
use App\User;
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
         $slider = DeptSlider::take(5)->get();
         $depts = Department::where('status', true)->get();
         $events = Event::orderBy('id', 'desc')
                 ->take(4)
                 ->get();
        $notices = Notice::orderBy('id', 'desc')
                    ->take(4)
                    ->get();
        return view('welcome', compact('events','depts','notices','slider'))->with('title',"Home | SUST Society");
    }




    /**
     * Frontend Notice Page
     * @return $this
     */
    public function notice(){
        if(\Auth::user()){
            $evenImg = Notice::orderBy('id', 'desc')->where('dept_id', \Auth::user()->dept_id)->take(3)->get();
            $notices = Notice::orderBy('id')->where('dept_id', \Auth::user()->dept_id)->paginate(5);
        } else{
            $evenImg = Notice::orderBy('id', 'desc')->take(3)->get();
            $notices = Notice::orderBy('id')->paginate(5);
        }

        return view('notice',compact('notices','evenImg'))->with('title',"Departments Notice");
    }



    /**
     * Search Notice Table
     * @param Request $request
     * @return $this
     */
    public function noticeSearch(Request $request){
        $serachText = '%'.$request->search_value.'%';

        if(\Auth::user()){
            $evenImg = Notice::orderBy('id', 'desc')->where('dept_id', \Auth::user()->dept_id)->take(3)->get();
            $notices = Notice::orderBy('id')->where('dept_id', \Auth::user()->dept_id)->search($serachText)->paginate(5);
        } else{
            $evenImg = Notice::orderBy('id', 'desc')->take(3)->get();
            $notices = Notice::orderBy('id')->search($serachText)->paginate(5);
        }

        return view('notice',compact('notices','evenImg'))->with('title',"Departments Notice");

    }





    /**
     * Frontend Notice Details
     * @param $notice_meta_data
     * @return $this
     */
    public function noticeDetails($notice_meta_data){

        if(\Auth::user()){
            $evenImg = Event::orderBy('id', 'desc')->where('dept_id', \Auth::user()->dept_id)->take(3)->get();
            $notice = Notice::where('notice_meta_data', $notice_meta_data)->first();
        } else{
            $evenImg = Event::orderBy('id', 'desc')->take(3)->get();
            $notice = Notice::where('notice_meta_data', $notice_meta_data)->first();
        }
        return view('noticeFull',compact('notice','evenImg'))->with('title',$notice->headline);
    }




    /**
     * Frontend Event Page
     * @return $this
     */
    public function event(){

        if(\Auth::user()){
            $evenImg = Event::orderBy('id', 'desc')->where('dept_id', \Auth::user()->dept_id)->take(3)->get();
            $events = Event::orderBy('id')->where('dept_id', \Auth::user()->dept_id)->paginate(5);
        } else{
            $evenImg = Event::orderBy('id', 'desc')->take(3)->get();
            $events = Event::orderBy('id')->paginate(5);
        }

        return view('event',compact('events','evenImg'))->with('title',"Departments Events");
    }




    /**
     * Search Event Table
     * @param Request $request
     * @return $this
     */
    public function eventSearch(Request $request){
        $serachText = '%'.$request->search_value.'%';

        if(\Auth::user()){
            $evenImg = Event::orderBy('id', 'desc')->where('dept_id', \Auth::user()->dept_id)->take(3)->get();
            $events = Event::orderBy('id')->where('dept_id', \Auth::user()->dept_id)->search($serachText)->paginate(5);
        } else{
            $evenImg = Event::orderBy('id', 'desc')->take(3)->get();
            $events = Event::orderBy('id')->search($serachText)->paginate(5);
        }
        return view('event',compact('events','evenImg'))->with('title',"Departments Events");
    }




    /**
     * Frontend Event Details
     * @param $event_meta_data
     * @return $this
     */
    public function eventDetails($event_meta_data){
        if(\Auth::user()){
            $evenImg = Event::orderBy('id', 'desc')->where('dept_id', \Auth::user()->dept_id)->take(3)->get();
            $event = Event::where('event_meta_data', $event_meta_data)->first();
        } else{
            $evenImg = Event::orderBy('id', 'desc')->take(3)->get();
            $event = Event::where('event_meta_data', $event_meta_data)->first();
        }

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





    /**
     *  Frontend  Society home page after login
     * @param $id
     * @return $this
     */
    public function societyAuth(){
        $dept = Department::where('id', \Auth::user()->dept->id)->first();
        $albumIds = Album::where('dept_id',\Auth::user()->dept->id)->lists('id','id');
        $slider = AlbumPhotos::whereIn('album_id',$albumIds)->take(4)->get();
        return view('department',compact('dept', 'slider'))->with('title',$dept->name);
    }




    /**
     * Album Frontend
     * @return $this
     */
    public function album(){
        $albums = Album::where('dept_id',\Auth::user()->dept->id)->get();
        $albumIds = Album::where('dept_id',\Auth::user()->dept->id)->lists('id','id');
        $photos = AlbumPhotos::whereIn('album_id',$albumIds)->paginate(20);
        return view('albumFront', compact('albums','photos'))->with('title',"Society Albums");
    }


    /**
     * Album Search Frontend
     * @param $id
     * @return $this
     */
    public function search($id){
        $albums = Album::where('dept_id',\Auth::user()->dept->id)->get();
        //$albumIds = Album::where('id',$id)->first();
        $al = Album::findOrFail($id);
        $photos = AlbumPhotos::where('album_id',$id)->paginate(20);
        return view('albumFront', compact('albums','photos','al'))->with('title','Album - '.$al->album_title);
    }


    /**
     * Current committee (Frontend)
     * @return $this
     */
    public function currentCommittee(){

//        $type = CommitteeMemberType::lists('name','id');
//        $user = User::where('dept_id', \Auth::user()->dept_id)->lists('name','id');
        $curr= Committee::where('dept_id',\Auth::user()->dept->id)->where('is_current', 'Running')->first();
        $comLists = CommitteeMemberList::where('committee_id',$curr->id )->get();
        return view('currentCommittee', compact('comLists','user','type'))->with('title',"Running Committee - ". $curr->year);

    }








}
