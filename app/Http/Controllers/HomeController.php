<?php

namespace App\Http\Controllers;

use App\Models\Leave;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $result = User::where('id', Auth::user()->id)->get();
        $leave = Leave::where('user_id', Auth::user()->id)->get();
        $approved =Leave::where([ ['AdminStatus', 1], ['id', Auth::user()->id ]])->get();
        $unapproved =Leave::where([ ['AdminStatus', 2], ['id', Auth::user()->id]])->get();

        return view('user.dashboard', compact( 'result', 'leave','approved', 'unapproved'));
    }
}
