<?php

namespace App\Http\Controllers;

use App\Committee;
use App\User;
use App\CommitteeMemberType;
use App\CommitteeMemberList;
use App\Department;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CommitteeController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(\Auth::user()->id ==1){
            $committees = Committee::orderBy('id', 'desc')->get();
        }
        else{
            $committees = Committee::orderBy('id', 'desc')->where('dept_id',\Auth::user()->dept->id)->get();
        }
        return view('committee.index', compact('committees'))->with('title',"Committee List");
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $is_current = [
          'Running' => 'Running Committee',
          'Previous' => 'Previous Committee'
        ];
        $departments = Department::lists('name','id');
        return view('committee.create', compact('departments','is_current'))->with('title',"Create New Committee");
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $committee = new Committee();
        $committee->year = $request->year;
        $committee->is_current = $request->is_current;
        if(\Auth::user()->id ==1){
            $committee->dept_id = $request->dept_id;
        }else{
            $committee->dept_id = \Auth::user()->dept->id;
        }


        if($committee->save()) {
            return redirect()->route('committee.show',$committee->id )->with('success', 'Committee Successfully Created!');
         }
        else{
        return redirect()->back()->with('error', 'Something went wrong please try again!');
        }

    }




    /**
     * Committee Show
     * @param $id
     * @return $this
     */
    public function show($id){

        //for create member
        $type = CommitteeMemberType::lists('name','id');
       // $comm = Committee::where('dept_id', \Auth::user()->dept_id)->lists('year','id');
        $user = User::where('dept_id', \Auth::user()->dept_id)->lists('name','id');
        //

         $comLists = CommitteeMemberList::where('committee_id',$id )->get();
        //for committee Year
         $curr= Committee::where('id',$id)->first();

        return view('committee.show', compact('comLists','user','type','curr'))->with('title',"Committee - ". $curr->year);
    }




    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $is_current = [
            'Running' => 'Running Committee',
            'Previous' => 'Previous Committee'
        ];
        $departments = Department::lists('name','id');
        $committee = Committee::findOrFail($id);
        return view('committee.edit', compact('departments','committee','is_current'))->with('title',"Edit Committee");
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
        $committee = Committee::findOrFail($id);
        $committee->year = $request->year;
        $committee->is_current = $request->is_current;
        if(\Auth::user()->id ==1){
            $committee->dept_id = $request->dept_id;
        }else{
            $committee->dept_id = \Auth::user()->dept->id;
        }

        if($committee->save()) {
            return redirect()->back()->with('success', 'Committee Successfully Updated!');
        }
        else{
            return redirect()->back()->with('error', 'Something went wrong please try again!');
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
        Committee::destroy($id);
        return redirect()->route('committee.index')->with('success',"Committee Successfully deleted");
    }




}
