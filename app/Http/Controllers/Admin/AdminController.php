<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\LeaveType;
use App\Models\User;


class AdminController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    
    public function index()
    {
        $user = User::all();
        $dept = Department::all();
        return view('admin.dashboard', compact('user',  'dept'));
    }

    public function showLoginForm()
    {
         return view('admin.login');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function addDept()
    {
        return view('admin.add-department');
    }
    public function saveDept(Request $request){
        $dept = new Department;

        $dept->departmentName = $request->input('deptName');
        $dept->departmentShortName = $request->input('departShortName');
        $dept->save();
        return back()->with('success', 'department added successfully');
    }
    public function showDept(){
       $dept = Department::all();
       return view ('admin.department', compact('dept'));
    }


    public function showEmployee(){
        $employee = User::all();
        return view ('admin.employee', compact('employee'));
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

