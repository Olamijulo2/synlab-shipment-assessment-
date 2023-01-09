@extends('layouts.new_app')
@section('content')
    

    @include('user.sidebar')
            <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3>Welcome!  {{Auth::user()->lastName}}</h3>
            </div>
            <div class="page-content">
                <section class="row">
                    <div class="col-12 col-lg-12">
                        <div class="row">
                            <div class="col-6 col-lg-4 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon purple">
                                                    <i class="iconly-boldShow"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Total Leaves</h6>
                                                {{-- @foreach ($leave as $list) --}}
                                                    
                                               
                                                <h6 class="font-extrabold mb-0">{{$leave->count()}}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-4 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon blue">
                                                    <i class="iconly-boldBookmark"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Approved Leaves</h6>
                                                <h6 class="font-extrabold mb-0">{{$approved->count()}}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-4 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon red">
                                                    <i class="iconly-boldBookmark"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Unapproved leaves</h6>
                                              
                                                <h6 class="font-extrabold mb-0">{{$unapproved->count()}}</h6>
                                           </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            <section class="section">
                <div class="card">
                    <div class="card-header">
                        My Details
                    </div>
                    <div class=" table-responsive-lg">
                        <table class="table">
                            <tbody>
                                @foreach ($result as $list)
                                    
                                
                                <tr>
                                    <td><b>Last Name:</b> </td>
                                    <td>{{$list->lastName}}</td>
                                    <td><b>First Name:</b> </td>

                                    <td>{{$list->lastName}}</td>
                                    <td><b>Other Name:</b> </td>
                                    <td>{{$list->otherName}}</td>
                                </tr>
                                <tr> 
                                    <td><b>Email Address:</b> </td>
                                    <td>{{$list->email}}</td>
                                    <td><b>Gender:</b> </td>
                                    <td>{{$list->gender}}</td>
                                    <td><b>Date of Birth:</b> </td>
                                    <td>{{$list->dob}}</td>
                                </tr> 
                                <tr>
                                    <td><b>Reporting Manger: </b></td>
                                    <td>{{$list->reportingManager}}</td>
                                    <td><b>Department:</b> </td>
                                    <td>{{$list->department}}</td>
                                    <td><b>Business Unit</b> </td>
                                    <td>{{$list->businessUnit}}</td>

                                </tr>
                                <tr>
                                    <td><b>Official Tel No: </b></td>
                                    <td>{{$list->officialTellNo}}</td>
                                    <td><b>Mobile No: </b> </td>
                                    <td>{{$list->mobileNo}}</td>
                                    <td><b>Date Joined:</b> </td>
                                    <td>{{$list->dateOfJoining}}</td>
                                </tr>
                                    <tr>
                                        <td><b>Contract Type: </b></td>
                                        <td>{{$list->contractType}}</td>
                                        <td><b>Contact Address: </b> </td>
                                        <td>{{$list->contactAddress}}</td>
                                </tr>
                                <tr>
                                    <td><b>Position: </b></td>
                                    <td>{{$list->positon}}</td>
                                    <td><b>Job Title</b> </td>
                                    <td>{{$list->jobTitle}}</td>
                                    <td><b>Status</b> </td>
                                    <td>{{$list->status}}</td>
                            </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </section>
        </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2021 &copy; Synlab</p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    @endsection
    