<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Http\Requests\BlogRequest;
use Redirect;
use App\User;
use Carbon\Carbon;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Pagination;
class ContactController extends Controller
{

    /**
     * Contact form
     * @param none
     * @return $this
     */
    public function contact()
    {
        return view('contact')->with('title',"Contact | SUST Society");
    }


    /**
     * Contact Information Submit Form
     * @return \Illuminate\Http\RedirectResponse
     */
    public function getContactUsForm(){
        //Get all the data and store it inside Store Variable
         $data = \Input::all();
        //Validation rules
        $rules = array (
            'name' => 'required|alpha',
            //'phone_number'=>'numeric|min:11',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required|min:25'
        );
        //Validate data
        $validator = \Validator::make ($data, $rules);
        //If everything is correct than run passes.
        if ($validator -> passes()){
            //Send email using Laravel send function
            \Mail::send('emails.contact', $data, function($message) use ($data)
            {
                //$user = User::findOrFail(1)->pluck('email');
                $message->from($data['email'],'User email From SUST Society');
                $message->to('talhaqc@gmail.com')->cc('talhaqc@gmail.com')->subject('Your Reminder!');
            });
            return redirect()->back()->with('success','Your message has been sent');
        }else{
            //return contact form with errors
            return \Redirect::route('contact')->withInput()->withErrors($validator)->with('title','Contact | SUST Society');
        }
    }


}