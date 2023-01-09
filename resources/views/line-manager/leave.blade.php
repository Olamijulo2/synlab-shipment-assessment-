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
                            <h3>Leave History</h3>
                            {{-- <p class="text-subtitle text-muted">For user to check they list</p> --}}
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Leave History</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            Leave History
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>Requestor</th>
                                        <th>Leave Type</th>
                                        <th>Request Date</th>
                                        {{-- <th>End Date</th> --}}
                                        <th>Description</th>
                                        <th>Relief Approval</th>
                                        <th>Line Manager Approval</th>
                                        <th>Action</th>
                                    </tr>
                                    
                                </thead>
                                <tbody>
                                    @foreach ($leave as $list)
                                    
                                    
                                    <tr>
                                
                                    <td>{{$list->user->lastName . " ". $list->user->lastName}}</td> 
                                    
                                        
                                        <td>{{$list->leaveType}}</td>
                                        <td>{{$list->created_at}}</td>
                                        {{-- <td>{{$list->toDate}}</td> --}}
                                        <td>{{$list->description}}</td> 
                                        @if($list->reliefStatus == 0)
                                        <td>
                                            <span class="text-primary">Waiting For Approval</span>
                                        </td>
                                        @elseif($list->reliefStatus == 1)
                                        <td>
                                            <span class="text-success">Approved</span>
                                        </td>
                                        @else
                                        <td>
                                            <span class="text-danger">Not Approved</span>
                                        </td>
                                        @endif
                                        @if($list->lineManagerStatus == 0)
                                        <td>
                                            <span class="text-primary">Waiting For Approval</span>
                                        </td>
                                        @elseif($list->lineManagerStatus == 1)
                                        <td>
                                            <span class="text-success">Approved</span>
                                        </td>
                                        @else
                                        <td>
                                            <span class="text-danger">Not Approved</span>
                                        </td>
                                        @endif
                                        <td class="btn btn-primary bg-primary"> <a style="text-decoration: none; color:white" href="{{route('lm-leave-details', $list->id)}}">View Details</a></td>
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
                    <div class="float-end">
                        {{-- <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                                href="http://ahmadsaugi.com">A. Saugi</a></p> --}}
                    </div>
                </div>
            </footer>
        </div>
    </div>
    
    

@endsection

