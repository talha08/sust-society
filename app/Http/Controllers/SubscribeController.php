<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SubscribeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $subscribers = Subscribe::orderBy('id', 'desc')->get();

    // }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $subs = new Subscribe();
        $subs->email = $request->email;
            if($subs->save()){
                return redirect()->back()->with('success', 'subscribed');
            }else{
                return redirect()->back()->with('error', 'Something went wrong, Please try again');
            }
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Subscribe::destroy($id);
        return redirect()->with('success',"Event Successfully deleted");
    }
}
