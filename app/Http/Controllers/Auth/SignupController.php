<?php

namespace App\Http\Controllers\Auth;

use App\Department;
use App\Profile;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use Hash;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SignupController extends Controller
{


    /**
     * Department Request Registration
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     *
     */
    public function deptRequest(Request $request)
    {

       // return $request->all();

        $rules = [
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',
        ];

        $data = $request->all();
        $validation = \Validator::make($data, $rules);

        if ($validation->fails()) {
            return redirect()->back()->withErrors($validation)->withInput();
        } else {


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
                $department->name = $request->dept_name;
                $department->description = $request->dept_description;
                $department->logo_path = $img_url;
                if ($department->save()) {

                    $user = new User();
                    $user->name = $request->name;
                    $user->email = $request->email;
                    $user->dept_id = $department->id;
                    $user->password = Hash::make($request->password);

                    if ($user->save()) {

                        if ($data['user_type'] == 2) {
                            $role = Role::find(2);  //role attach 2 that means teacher
                            $user->attachRole($role);
                        } else if ($data['user_type'] == 3) {
                            $role = Role::find(3);  //role attach 1 that means sudent
                            $user->attachRole($role);
                        }

                        $role = Role::find(4);  //role attach 4 that means dept_admin
                        $user->attachRole($role);

                        $profile = new Profile();
                        $profile->user_id = $user->id;
                        if ($data['user_type'] == 2) {
                            $profile->designation = 'Faculty';
                        } else if ($data['user_type'] == 3) {
                            $profile->designation = 'Student';
                        }
                        $profile->save();

                        \Auth::logout();


                        return redirect()->back()->with('success', 'Organization Successfully Created, We will notify tou via email');
                    } else {
                        return redirect()->back()->with('error', 'Something went wrong, Please try again');
                    }

                } else {
                    return redirect()->back()->with('error', 'Something went wrong, Please try again');
                }
            } else {
                return redirect()->back()->with('error', 'Image Upload Problem, Please Try Again');
            }

        }
    }

}
