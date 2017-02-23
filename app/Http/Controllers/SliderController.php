<?php

namespace App\Http\Controllers;

use App\DeptSlider;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SliderController extends Controller
{
    /**
     * All side show
     *
     * @return $this
     */
    public function index(){
        $sliders =DeptSlider::orderBy('', 'desc')->get();
        return view('slider.index', compact('sliders'))->with('title',"All Slide List");
    }




    /**
     * Show the form for creating a new slider.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('slider.create')->with('title',"Create New Slider");
    }


    /**
     * Store slider data
     *
     * @param SliderRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(SliderRequest $request)
    {
        // return $request->all();

        if( $request->hasFile('image')) {
            $file = $request->image;
            //getting the file extension
            $extension = $file->getClientOriginalExtension();
            $fileName = md5(rand(11111, 99999)) . '.' . $extension; // renameing image
            //path set
            $img_url = 'upload/slider/img/sliderMain-'.$fileName;
            $thumb_url = 'upload/slider/thumb/sliderThumb-'.$fileName;

            //resize and crop image using Image Intervention
            //Image::make($file)->crop(1140, 400, 0, 0)->save(public_path($img_url));
            Image::make($file)->resize(1140, 400)->save(public_path($img_url));
            Image::make($file)->resize(41, 41)->save(public_path($thumb_url));

            $slider = new Slider();
            $slider->slider_title = $request->slider_title;
            $slider->slider_desc = $request->slider_desc;
            $slider->slider_position = $request->slider_position;
            $slider->img_url = $img_url;
            $slider->thumb_url = $thumb_url;
            if($slider->save()){
                return redirect()->back()->with('success', "Slider Successfully Added");
            }else{
                return redirect()->back()->with('error', 'Something went wrong, Please try again');
            }

        }else{
            return redirect()->back()->with('error', 'Image Upload Problem, Please Try Again');
        }

    }


    /**
     * Delete slide
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        Slider::destroy($id);
        return redirect()->route('slider.index')->with('success',"Slider Successfully deleted");
    }

}