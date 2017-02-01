<?php

namespace App\Http\Controllers;

use App\EventAttachment;
use Illuminate\Http\Request;
use App\Event;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use Validator;
//use Request;
use Response;

use Intervention\Image\ImageManagerStatic as Image;


class EventController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::orderBy('id', 'desc')->where('dept_id', \Auth::user()->dept->id)->get();
        return view('event.index', compact('events'))->with('title',"Event Lists");
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $openRegistration = [
            '1' => 'Open For Registration',
            '0' => 'Closed'
        ];
        return view('event.create',compact('openRegistration'))->with('title',"Create New Event");
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {

       // return $request->all();
        if( $request->hasFile('image')) {
            $file = $request->image;
            //getting the file extension
            $extension = $file->getClientOriginalExtension();
            $fileName = md5(rand(11111, 99999)) . '.' . $extension; // renameing image
            //path set
            $img_url = 'upload/event/banner/img-'.$fileName;

            //resize and crop image using Image Intervention
            //Image::make($file)->crop(558, 221, 0, 0)->save(public_path($img_url));
            Image::make($file)->resize(558, 221)->save(public_path($img_url));

            $event = new Event();
            $event->dept_id = $request->dept_id;
            $event->headline = $request->headline;
            $event->description = $request->description;
            $event->venue = $request->venue;
            $event->start_time = $request->start_time;
            $event->end_time = $request->end_time;
            $event->open_registration = $request->open_registration;
            $event->banner = $img_url;
            $event->event_meta_data =  '/'.date('Y-m-d').'/'.str_slug($request->headline).rand(2345,23142);

            if($event->save()){
                return redirect()->route('event.index')->with('success', 'Event Successfully Created');
            }else{
                return redirect()->back()->with('error', 'Something went wrong, Please try again');
            }

        }else{
            return redirect()->back()->with('error', 'Image Upload Problem, Please Try Again');
        }

    }







    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $openRegistration = [
            '1' => 'Open For Registration',
            '0' => 'Closed'
        ];
        $event = Event::findOrFail($id);
        return view('event.edit', compact('event','openRegistration'))->with('title',"Edit Event");
    }


    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $event = Event::findOrFail($id);
        $event->headline = $request->headline;
        $event->description = $request->description;
        $event->venue = $request->venue;
        $event->start_time = $request->start_time;
        $event->end_time = $request->end_time;
        $event->open_registration = $request->open_registration;
       // $event->event_meta_data =  '/'.date('Y-m-d').'/'.str_slug($request->headline).rand(2345,23142);
        $event->save();

        return redirect()->route('event.index')->with('success', 'Event Successfully Updated');
    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Event::destroy($id);
        return redirect()->route('event.index')->with('success',"Event Successfully deleted");
    }





    /**
     * File upload View
     *
     * @return $this
     */
    public function fileUploadView(){

        $events= Event::lists('headline','id')->all();
        return view('event.eventFileUpload',compact('events'))->with('title',"Upload file");
    }





    /**
     * File upload from Dropdown event list
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function fileUpload(Request $request) {

          //  return $request->all();
           try{

               if( $request->hasFile('file')) {
                   $files = $request->file;
                   foreach ($files as $file) {
                       $destinationPath = public_path() . '/upload/event';
                       $extension = $file->getClientOriginalExtension();
                       $fileName = md5(rand(11111, 99999)) . '.' . $extension; // renameing image
                       $file->move($destinationPath, $fileName); // uploading file to given path

                       $event = new EventAttachment();
                       $event->event_id = $request->event_id;
                       $event->event_file_title = $request->event_file_title;
                       $event->event_file = '/upload/event/' . $fileName;
                       $event->save();
                       return redirect()->back()->with('success', "File Successfully Added");
                   }
               }
               else{
                   return redirect()->back()->with('error',"Please select files First");
               }
               }catch(\Exception $ex){
                   return redirect()->back()->with('error',"Something went wrong");
               }
        }




    /**
     * File Upload store method for modal view
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function singleFileUpload(Request $request) {
        try{

            if( $request->hasFile('file')) {
                $files = $request->file;
                foreach ($files as $file) {
                    $destinationPath = public_path() . '/upload/event';
                    $extension = $file->getClientOriginalExtension();
                    $fileName = md5(rand(11111, 99999)) . '.' . $extension; // renameing image
                    $file->move($destinationPath, $fileName); // uploading file to given path

                    $event = new EventAttachment();
                    $event->event_id = Input::get('id');
                    $event->event_file_title = $request->event_file_title;
                    $event->event_file = '/upload/event/' . $fileName;
                    $event->save();
                    return redirect()->back()->with('success', "File Successfully Added");
                }
            }
            else{
                return redirect()->back()->with('error',"Please select files First");
            }
        }catch(\Exception $ex){
            return redirect()->back()->with('error',"Something went wrong");
        }
    }




    public function statusUpdate($id){
       // $id = $request->id;
        $event = Event::where('id',$id)->first();
        if($event->open_registration ==1){
            $event->open_registration = 0;
            $event->save();
            return redirect()->back()->with('success', "Event Registration Status Changed Open to Close");
        }else{
            $event->open_registration = 1;
            $event->save();
            return redirect()->back()->with('success', "Event Registration Status Changed Close to Open");
        }
    }





}
