<?php

namespace App\Http\Controllers;

use App\Department;
use Illuminate\Http\Request;
use Hash;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class DepartmentController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function activeSociety()
    {
        $departments = Department::orderBy('id', 'desc')->where('status', true)->get();
        return view('department.index', compact('departments'))->with('title', "Society List");
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function inactiveSociety()
    {
        $departments = Department::orderBy('id', 'desc')->where('status', false)->get();
        return view('department.index', compact('departments'))->with('title', "Society List");
    }


    /**
     * Change Department Current Status
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function statusChange($id){
        $dept = Department::where('id', $id)->first();
        if($dept->status == 1){
            $dept1 = Department::where('id', $id)->first();
            $dept1->status = 0;
            $dept1->save();
            return redirect()->back()->with('success', "Department Successfully Deactivated");

        }else{
            $dept1 = Department::where('id', $id)->first();
            $dept1->status = 1;
            $dept1->save();
            return redirect()->back()->with('success', "Department Successfully Activated");
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('department.create')->with('title', "Create New Society");
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {

        if ($request->hasFile('image')) {
            $file = $request->image;
            //getting the file extension
            $extension = $file->getClientOriginalExtension();
            $fileName = md5(rand(11111, 99999)) . '.' . $extension; // renameing image
            //path set
            $img_url = 'upload/department/img-' . $fileName;

            //resize and crop image using Image Intervention
            //Image::make($file)->crop(558, 221, 0, 0)->save(public_path($img_url));
            \Image::make($file)->resize(65, 65)->save(public_path($img_url));

            $department = new Department();
            $department->name = $request->name;
            $department->description = $request->description;
            $department->logo_path = $img_url;
            if ($department->save()) {
                return redirect()->back()->with('success', 'Society Successfully Created');
            } else {
                return redirect()->back()->with('error', 'Something went wrong, Please try again');
            }

        } else {
            return redirect()->back()->with('error', 'Image Upload Problem, Please Try Again');
        }

    }










    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $department = Department::findOrFail($id);
        return view('department.edit', compact('department'))->with('title', "Edit Society");
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
        $department = Department::findOrFail($id);
        $department->name = $request->name;
        $department->description = $request->description;
        $department->email = $request->email;
        $department->fax = $request->fax;
        $department->phone = $request->phone;
        $department->location = $request->location;
        $department->save();

        return redirect()->back()->with('success', 'Society Successfully Updated');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Department::destroy($id);
        return redirect()->route('department.index')->with('success', "Society Successfully deleted");
    }


    /**
     * All Society Page view
     * Frontend View
     */
    public function allSociety()
    {
        $society = Department::where('status', true)->paginate(9);
        return view('society', compact('society'))->with('title', "Society List");
    }


}
