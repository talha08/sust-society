<?php

namespace App\Http\Controllers;

use App\Department;
use App\Profile;
use App\Role;
use Illuminate\Http\Request;
use App\User;
use Validator;
use Auth;
use Hash;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Intervention\Image\ImageManagerStatic as Image;
class UsersController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user_type= [
            '2' => 'Faculty Member',
            '3' => 'Student',
        ];
        $dept_id = Department::where('status', true)->lists('name','id');
            //auth.register
        return view('auth.login',compact('dept_id','user_type'))
                    ->with('title', 'Register');
    }





    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules =[
            'name'                  => 'required',
            'email'                 => 'required|unique:users,email',
            'password'              => 'required|confirmed',
            'password_confirmation' => 'required',
            'dept_id'               => 'required'
        ];
        $data = $request->all();

        $validation = Validator::make($data,$rules);

        if($validation->fails()){
            return redirect()->back()->withErrors($validation)->withInput();
        }else{
            $user = new User;
            $user->name = $data['name'];
            $user->email = $data['email'];
            $user->dept_id = $data['dept_id'];
            $user->password = Hash::make($data['password']);

            if($user->save()){

                if($data['user_type']== 2){
                    $role = Role::find(2);  //role attach 2 that means teacher
                    $user->attachRole($role);
                }else if($data['user_type']==3){
                    $role = Role::find(3);  //role attach 1 that means sudent
                    $user->attachRole($role);
                }

                $profile = new Profile();
                $profile->user_id = $user->id;
                if($data['user_type']== 2){
                    $profile->designation = 'Faculty';
                }else if($data['user_type']==3){
                    $profile->designation = 'Student';
                }
                $profile->save();

                Auth::logout();
                return redirect()->back()
                            ->with('success','Registered successfully. Sign In Now.');
            }else{
                return redirect()->back()
                            ->with('error',"Something went wrong.Please Try again.");
            }
        }
    }





    /**
     * Display the profile Info.
     *
     * @param  none
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
        if(\Auth::user()->hasRole('student') or \Auth::user()->hasRole('teacher')){
            return view('frontend.onlyStudent.profile')
                ->with('title', 'Profile')->with('user', Auth::user());
        }else{
            return view('auth.profile')
                ->with('title', 'Profile')->with('user', Auth::user());
        }

    }






    /**
     * Display the profile Info.
     *
     * @param  none
     * @return \Illuminate\Http\Response
     */
    public function userProfile($id)
    {
        if(\Auth::user()->hasRole('student') or \Auth::user()->hasRole('teacher')){

            $dept_id = User::where('id', $id)->pluck('dept_id');
            if($dept_id == Auth::user()->dept->id){
                $user = User::where('id', $id)->first();
                return view('frontend.onlyStudent.profile', compact('user'))
                    ->with('title','Profile- '.$user->name);
            }else{
                return view('errors.503');
            }


        }else{
            $user = User::where('id', $id)->first();
            return view('auth.profile', compact('user'))
                ->with('title','Profile- '.$user->name);
        }

    }






    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function profileUpdate(Request $request, $id)
    {

        $profile = Profile::where('user_id',$id)->first();

        if( $request->hasFile('photo')) {
            $file = $request->photo;
            //getting the file extension
            $extension = $file->getClientOriginalExtension();
            $fileName = md5(rand(11111, 99999)) . '.' . $extension; // renameing image
            //path set
            $img_url = 'upload/profile/img-' . $fileName;

            //resize and crop image using Image Intervention
            //Image::make($file)->crop(558, 221, 0, 0)->save(public_path($img_url));
            Image::make($file)->resize(200, 200)->save(public_path($img_url));

            $profile->photo = $img_url;
        }




        $profile->designation = $request->designation;
        $profile->about_me = $request->about_me;

        if(!Auth::user()->hasRole('teacher')){
            $profile->father_name = $request->father_name;
            $profile->mother_name = $request->mother_name;
            $profile->district = $request->district;
            $profile->high_school = $request->high_school;
            $profile->college = $request->college;
            $profile->batch = $request->batch;
            $profile->reg = $request->reg;
        }

        if($profile->save()){
            return redirect()->back()->with('success', 'Profile Successfully Updated');
        }else{
            return redirect()->back()->withInput()->with('error', 'Something went wrong, Please try again.');
        }


        }





    /**
     * Getting ALl Students List By Department
     * @return mixed
     */
    public function students(){

        $users =\DB::table('role_user')
            ->join('users', 'role_user.user_id', '=', 'users.id')
            ->join('profile', 'users.id', '=', 'profile.id')
            ->where('role_user.role_id', '=', 3)
            ->where('users.dept_id', Auth::user()->dept_id)
            ->get();


        return view('user.student')
            ->with('title', 'Student List')->with('users', $users);
    }





    /**
     * Getting ALl Teachers List By Department
     * @return mixed
     */
    public function teachers(){
     $users =\DB::table('role_user')
            ->join('users', 'role_user.user_id', '=', 'users.id')
            ->join('profile', 'users.id', '=', 'profile.id')
            ->where('role_user.role_id', '=', 2)
            ->where('users.dept_id', Auth::user()->dept_id)
            ->get();

        return view('user.teacher')
            ->with('title', 'Faculty member List')->with('users', $users);
    }







    /**
     * Dept. Admin Creation by Admin
     * @param Request $request
     * @return $this|\Illuminate\Http\RedirectResponse
     *
     */
    public function adminUserStore(Request $request)
    {
        $rules =[
            'name'                  => 'required',
            'email'                 => 'required|unique:users,email',
            'password'              => 'required|confirmed',
            'password_confirmation' => 'required',
            'dept_id'               => 'required'
        ];
        $data = $request->all();

        $validation = Validator::make($data,$rules);

        if($validation->fails()){
            return redirect()->back()->withErrors($validation)->withInput();
        }else{
            $user = new User;
            $user->name = $data['name'];
            $user->email = $data['email'];
            $user->dept_id = $data['dept_id'];
            $user->password = Hash::make($data['password']);

            if($user->save()){


                if($data['user_type']== 2){
                    $role = Role::find(2);  //role attach 2 that means teacher
                    $user->attachRole($role);
                }else if($data['user_type']==3){
                    $role = Role::find(3);  //role attach 1 that means sudent
                    $user->attachRole($role);
                }


                    $role = Role::find(4);  //role attach 4 that means dept_admin
                    $user->attachRole($role);


                $profile = new Profile();
                $profile->user_id = $user->id;
                if($data['user_type']== 2){
                    $profile->designation = 'Faculty';
                }else if($data['user_type']==3){
                    $profile->designation = 'Student';
                }
                if($profile->save()){
                    $dept = Department::findOrFail($data['dept_id']);
                    $dept->status = true;
                    $dept->save();
                }

               // Auth::logout();
                return redirect()->back()
                    ->with('success','Society Admin Account Create successfully.');
            }else{
                return redirect()->back()
                    ->with('error',"Something went wrong.Please Try again.");
            }
        }
    }










}
