<?php

namespace App\Http\Controllers;

use App\Committee;
use App\CommitteeMemberList;
use App\CommitteeMemberType;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CommitteeMemberListController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $committee = Committee::where('dept_id', \Auth::user()->dept_id)->lists('id','id');
        $comLists = CommitteeMemberList::whereIn('committee_id',$committee )->orderBy('id', 'desc')->get();
        return view('committeeMemberList.index', compact('comLists'))->with('title',"Committee Member List ");
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $type = CommitteeMemberType::lists('name','id');
        $com = Committee::where('dept_id', \Auth::user()->dept_id)->lists('year','id');
        $user = User::where('dept_id', \Auth::user()->dept_id)->lists('name','id');
        return view('committeeMemberList.create', compact('user','type','com'))->with('title',"Create New Committee Member");
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        //return $request->all();

        $com = new CommitteeMemberList();
        $com->user_id = $request->user_id;
        $com->committee_id = $request->committee_id;
        $com->member_type_id = $request->member_type_id;
        if($com->save()){
            return redirect()->back()->with('success', 'Member Successfully Created!');
        }
        else{
            return redirect()->back()->withInput()->with('error', 'Something went wrong please try again!');
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
        $type = CommitteeMemberType::lists('name','id');
        $com = Committee::where('dept_id', \Auth::user()->dept_id)->lists('year','id');
        $user = User::where('dept_id', \Auth::user()->dept_id)->lists('name','id');
        $comList = CommitteeMemberList::findOrFail($id);
        return view('committeeMemberList.edit', compact('com','user','type','comList'))->with('title',"Edit Member");
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
        $com =  CommitteeMemberList::findOrFail($id);
        $com->user_id = $request->user_id;
        $com->committee_id = $request->committee_id;
        $com->member_type_id = $request->member_type_id;
        if($com->save()) {
            return redirect()->back()->with('success', 'Member Successfully Updated!');
        }
        else{
            return redirect()->back()->withInput()->with('error', 'Something went wrong please try again!');
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
        CommitteeMemberList::destroy($id);
        return redirect()->route('committeeMemberList.index')->with('success',"Committee Member List Successfully deleted");
    }



}
