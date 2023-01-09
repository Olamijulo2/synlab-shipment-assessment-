<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LeaveType;
use App\Models\Leave;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LineManagerController extends Controller
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


    public function leave(){
        $user = User::all();
        $leave = Leave::where([ ['reliefStatus', 1], ['lineManagerID', Auth::user()->id]])->get();
        return view ('line-manager.leave', compact('leave', 'user'));
    }

    public function leaveDetails(Leave $leave)
    {

        return view('line-manager.leave-details', compact('leave'));
    }

    public function approval(Request $request, Leave $leave){
        $leave->lineManagerRemark = $request->input('remark');
        $leave->lineManagerStatus = $request->input('approval');
        $leave->lineManagerRemarkDate = date('Y-m-d H:i:s');
        $leave->update();
        return back()->with('success', 'Action Taken');

    }

    public function pendingLeave(){
        // $user = User::where('department', Auth::user()->department)->get();
        $user = User::all();
        $leave = Leave::where([['lineManagerStatus', 0], ['lineManagerID', Auth::user()->id]])->get();
        return view('line-manager.leave', compact('leave', 'user'));
    }

    
    public function aprovedLeave(){
        $user = User::all();
        $leave = Leave::where([ ['lineManagerID', Auth::user()->id], ['lineManagerStatus', 1] ])->get();
        return view('line-manager.leave', compact('leave', 'user'));
    }
    public function unapprovedLeave(){
        $user = User::all();
        $leave = Leave::where([ ['lineManagerID', Auth::user()->id], ['lineManagerStatus', 2] ])->get();
        return view('line-manager.leave', compact('leave', 'user'));
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
