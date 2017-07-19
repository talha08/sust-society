<?php

namespace App\Http\Controllers\Auth;
use App\Department;
use App\User;
use Validator;
use Auth;
use Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('guest', ['except' => 'getLogout']);
    }






//    public function login(){
//        $department = Department::all();
//        // return 'Auth Login Panel';
//        return view('auth.userlogin')
//                    ->with('title', 'Login')
//                    ->with('department', $department )
//                    ->with('dept_id ', $department );
//    }
//
//






    public function doLogin(Request $request)
    {
        $rules = array
        (
                    'email'    => 'required',
                    'password' => 'required'
        );
        $allInput = $request->all();
        $validation = Validator::make($allInput, $rules);

        // dd($allInput);


        if ($validation->fails())
        {

            return redirect()->back()
                        ->withInput()
                        ->withErrors($validation);
        } else
        {
           // $remember = (\Input::has('remember')) ? true : false;
            $credentials = array
            (
                        'email'    => $allInput['email'],
                        'password' => $allInput['password']
            );

            if (Auth::attempt($credentials,true))
            {
                return redirect()->to('/')->with('success','Welcome to SUST Society');
            } else
            {
                return redirect()->back()
                            ->withInput()
                            ->withErrors('Error in Email Address or Password.');
            }
        }

    }



    public function logout(){
        Auth::logout();
        return redirect()->to('/')
                    ->with('success',"You are successfully logged out.");
        // return 'Logout Panel';
    }



    public function dashboard(){
        return view('dashboard')
                    ->with('title','Dashboard')
                    ->with('user', Auth::user())
                    ->with('success',"You are successfully logged out.");
        // return 'Dashboard';
    }




    public function changePassword(){
        if(\Auth::user()->hasRole('student') or \Auth::user()->hasRole('teacher')){
            $dept_id = Department::lists('name','id');
            $user_type= [
                '2' => 'Faculty Member',
                '3' => 'Student',
            ];
            return view('frontend.onlyStudent.passwordChange',compact('dept_id','user_type'))
                ->with('title',"Change Password")->with('user', Auth::user());
        }else{
            return view('auth.changePassword')
                ->with('title',"Change Password")->with('user', Auth::user());

        }

    }



    public function doChangePassword(Request $request){


        $rules =[
            'password'              => 'required|confirmed',
            'password_confirmation' => 'required'
        ];
        $data = $request->all();

        $validation = Validator::make($data,$rules);

        if($validation->fails()){
            return redirect()->back()->withErrors($validation)->withInput();
        }else{
            $user = Auth::user();
            $user->password = Hash::make($data['password']);

            if($user->save()){
                Auth::logout();
                return redirect()->route('user.create')
                            ->with('success','Your password changed successfully.');
            }else{
                return redirect()->back()
                            ->with('error',"Something went wrong.Please Try again.");
            }
        }
         // return 'Do Change Password';

    }
}
