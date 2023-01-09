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
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Leave Details</h3>
                            {{-- <p class="text-subtitle text-muted">For user to check they leave</p> --}}
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Leave Details</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            Leave Details
                        </div>
                        <div class=" table-responsive-lg">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td><b>Leave Type:</b> </td>
                                        <td>{{$leave->leaveType}}</td>
                                        <td><b>Leave Start date:</b> </td>

                                        <td>{{$leave->fromDate}}</td>
                                        <td><b>Leave End date:</b> </td>
                                        <td>{{$leave->toDate}}</td>
                                    </tr>
                                    <tr> 
                                        <td><b>Leave Request Date:</b> </td>
                                        <td>{{$leave->created_at}}</td>
                                        <td><b>Leave Description:</b> </td>
                                        <td>{{$leave->description}}</td>
                                    </tr> 
                                    <tr>
                                        <td><b>Relief Status: </b></td>
                                         
                                        @if($leave->reliefStatus == 0)
                                        <td>
                                            <span class="text-primary">Waiting For Approval</span>
                                        </td>
                                        @elseif($leave->reliefStatus == 1)
                                        <td>
                                            <span class="text-success">Approved</span>
                                        </td>
                                        <td><b>Relief Remark:</b></td>
                                        <td><span class="">{{$leave->reliefRemark}}</span></td>
                                        <td><b>Relief Remark Date:</b></td>
                                        <td><span class="">{{$leave->reliefRemarkDate}}</span></td>
                                        @else
                                        <td>
                                            <span class="text-danger">Not Approved</span>
                                            <td><b>Relief Remark:</b></td>
                                        <td><span class="">{{$leave->reliefRemark}}</span></td>
                                            <td><b>Relief Remark Date:</b></td>
                                            <td> <span class="">{{$leave->reliefRemarkDate}}</span></td>
                                        </td>
                                    </tr>
                                        @endif
                                        <tr>
                                            <td><b>Line Manager Status: </b></td>
                                            @if($leave->lineManagerStatus == 0)
                                            <td>
                                                <span class="text-primary">Waiting For Approval</span>
                                            </td>

                                            @elseif($leave->lineManagerStatus == 1)
                                            <td>
                                                <span class="text-success">Approved</span>
                                            </td>
                                            <td><b>Line Manager Remark:</b></td>
                                            <td> <span class="">{{$leave->lineManagerRemark}}</span></td>
                                            <td><b>Line Manager Remark:</b></td>
                                                <td> <span class="">{{$leave->lineManagerRemarkDate}}</span></td>
                                            @else
                                            <td>
                                                <span class="text-danger">Not Approved</span>
                                            </td>
                                            <td><b>Line Manager Remark:</b></td>
                                            <td> <span class="">{{$leave->lineManagerRemark}}</span></td>
                                            <td><b>Line Manager Remark:</b></td>
                                            <td> <span class="">{{$leave->lineManagerRemarkDate}}</span></td>
                                            @endif
                                    </tr>
                                        <tr>
                                        <td><b>Admin Status: </b></td>
                                        @if($leave->adminStatus == 0)
                                        
                                        <td>
                                            <span class="text-primary">Waiting For Approval</span>
                                        </td>
                                        @elseif($leave->adminStatus == 1)
                                        <td>
                                            <span class="text-success">Approved</span>
                                        </td>
                                        <td><b>Admin Remark:</b></td>
                                        <td> <span class="">{{$leave->adminRemark}}</span></td>
                                        <td><b>Admin Remark Date:</b></td>
                                        <td> <span class="">{{$leave->adminRemarkDate}}</span></td>
                                        @else
                                        <td>
                                            <span class="text-danger">Not Approved</span>
                                        </td>
                                        <td><b>Admin Remark:</b></td>
                                        <td> <span class="">{{$leave->adminRemark}}</span></td>
                                        <td><b>Admin Remark:</b></td>
                                        <td> <span class="">{{$leave->adminRemarkDate}}</span></td>
                                        @endif
                                    </tr>
                                   
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
                    <div class="float-end">
                        {{-- <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                                href="http://ahmadsaugi.com">A. Saugi</a></p> --}}
                    </div>
                </div>
            </footer>
        </div>
    </div>
    
    

@endsection

