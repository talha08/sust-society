<?php

namespace App\Http\Controllers;

use App\NoticeAttachment;
use Illuminate\Http\Request;
use App\EventAttachment;
use App\Notice;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use Intervention\Image\ImageManagerStatic as Image;

class NoticeController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notices = Notice::orderBy('id', 'desc')->where('dept_id', \Auth::user()->dept->id)->get();
        return view('notice.index', compact('notices'))->with('title',"Notice Lists");
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('notice.create')->with('title',"Create New Notice");
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
            $img_url = 'upload/notice/banner/img-'.$fileName;

            //resize and crop image using Image Intervention
            //Image::make($file)->crop(558, 221, 0, 0)->save(public_path($img_url));
            Image::make($file)->resize(558, 221)->save(public_path($img_url));

            $notice = new Notice();
            $notice->dept_id = $request->dept_id;
            $notice->headline = $request->headline;
            $notice->description = $request->description;
            $notice->banner = $img_url;
            $notice->notice_meta_data =  str_slug($request->headline).rand(2345,23142);

            if($notice->save()){
                return redirect()->route('notice.index')->with('success', 'Notice Successfully Created');
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
        $notice = Notice::findOrFail($id);
        return view('notice.edit', compact('notice'))->with('title',"Notice Edit");
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
        $notice = Notice::findOrFail($id);
        $notice->headline = $request->headline;
        $notice->description = $request->description;
       // $notice->event_meta_data =  '/'.date('Y-m-d').'/'.str_slug($request->headline).rand(2345,23142);
        $notice->save();

        return redirect()->route('notice.index')->with('success', 'Notice Successfully Updated');
    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Notice::destroy($id);
        return redirect()->route('notice.index')->with('success',"Notice Successfully deleted");
    }





    /**
     * File upload View
     *
     * @return $this
     */
        public function fileUploadView(){

        $notices= Notice::where('dept_id', \Auth::user()->dept->id)->lists('headline','id')->all();
        return view('notice.eventFileUpload',compact('notices'))->with('title',"Upload file");
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
                    $destinationPath = public_path() . '/upload/notice';
                    $extension = $file->getClientOriginalExtension();
                    $fileName = md5(rand(11111, 99999)) . '.' . $extension; // renameing image
                    $file->move($destinationPath, $fileName); // uploading file to given path

                    $notice = new NoticeAttachment();
                    $notice->notice_id = $request->notice_id;
                    $notice->notice_file_title = $request->notice_file_title;
                    $notice->notice_file = '/upload/notice/' . $fileName;
                    $notice->save();
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
                    $destinationPath = public_path() . '/upload/notice';
                    $extension = $file->getClientOriginalExtension();
                    $fileName = md5(rand(11111, 99999)) . '.' . $extension; // renameing image
                    $file->move($destinationPath, $fileName); // uploading file to given path

                    $notice = new NoticeAttachment();
                    $notice->notice_id = Input::get('id');
                    $notice->notice_file_title = $request->notice_file_title;
                    $notice->notice_file = '/upload/notice/' . $fileName;
                    $notice->save();
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







}
