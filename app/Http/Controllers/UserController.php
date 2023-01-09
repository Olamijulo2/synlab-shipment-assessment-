<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LeaveType;
use App\Models\Leave;
use App\Models\User;

use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function leaveApplication()
    {
        $user = User::where('department', Auth::user()->department)->get();
        $lType = LeaveType::all();
        return view('user.leave-application', compact('lType', 'user'));
    }

    public function saveLeave(Request $request)
    {

        $leave = new Leave;
        $leave->leaveType = $request->input('leaveType');
        $leave->fromDate = $request->input('fromDate');
        $leave->toDate = $request->input('toDate');
        $leave->leaveType = $request->input('leaveType');
        $leave->description = $request->input('description');
        $leave->user_id = Auth::user()->id;
        $leave->relief = $request->input('relief');
        $leave->lineManagerID = $request->input('lm');

        $leave->save();
        return back()->with('success', 'Leave Type added successfully');
        
    }
    
    public function leaveHistory()
    {
        $leave = Leave::where('user_id', Auth::user()->id)->get();
        return view('user.leave-history', compact('leave'));
    }

    public function leaveDetails(Leave $leave)
    {

        return view('user.leave-details', compact('leave'));
    }

    public function allLeave(){
        $user = User::all();
        $leave = Leave::where('relief', Auth::user()->lastName)->get();
        
        return view('user.all-leave', compact('leave', 'user'));
    }
    public function allLeaveDetails(Leave $leave)
    {

        return view('user.all-leave-details', compact('leave'));
    }
    public function pendingLeave(){
        $user = User::all();
        $leave = Leave::where([ ['relief', Auth::user()->lastName], ['reliefStatus', 0] ])->get();
        return view('user.all-leave', compact('leave', 'user'));
    }

    
    public function approvedLeave(){
        $user = User::all();
        $leave = Leave::where([ ['relief', Auth::user()->lastName], ['reliefStatus', 1] ])->get();
        return view('user.all-leave', compact('leave', 'user'));
    }
    public function unapprovedLeave(){
        $user = User::all();
        $leave = Leave::where([ ['relief', Auth::user()->lastName], ['reliefStatus', 2] ])->get();
        return view('user.all-leave', compact('leave', 'user'));
    }
    public function reliefApproval(Request $request, Leave $leave){
        $leave->reliefRemark = $request->input('remark');
        $leave->reliefStatus = $request->input('approval');
        $leave->reliefRemarkDate = date('Y-m-d H:i:s');
        $leave->update();
        return back();

    }


   
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
