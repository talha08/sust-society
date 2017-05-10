<?php

namespace App\Http\Controllers;

use App\CommitteeMemberType;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CommitteeMemberTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coms = CommitteeMemberType::orderBy('id', 'desc')->get();
        return view('committeeMemberType.index', compact('coms'))->with('title',"Committee Member Type List");
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('committeeMemberType.create')->with('title',"Create New Committee Member Type");
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
            $com = new CommitteeMemberType();
            $com->name = $request->name;
            if($com->save()){
                return redirect()->back()->with('success', 'Committee Member Type Successfully Created');
            }else{
                return redirect()->back()->withInput()->with('error', 'Something went wrong, Please try again');
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
        $com = CommitteeMemberType::findOrFail($id);
        return view('committeeMemberType.edit', compact('com'))->with('title',"Edit Committee Member Type");
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
        $com = CommitteeMemberType::findOrFail($id);
        $com->name = $request->name;
        $com->save();

        return redirect()->back()->with('success', 'Committee Member Type Successfully Updated');
    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        CommitteeMemberType::destroy($id);
        return redirect()->route('committeeMemberType.index')->with('success',"Committee Member Type Successfully deleted");
    }


}
