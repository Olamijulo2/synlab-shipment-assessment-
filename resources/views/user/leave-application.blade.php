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
                        <h3>Apply For Leave</h3>
                        
                    </div>
                    {{-- <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Form Layout</li>
                            </ol>
                        </nav>
                    </div> --}}
                </div>
            </div>

            <!-- Basic Horizontal form layout section start -->
            <section id="basic-horizontal-layouts">
                <div class="row match-height">
                    <div class="col-md-6 col-12">
                        <div class="card">
                            {{-- <div class="card-header">
                                <h4 class="card-title">Horizontal Form</h4>
                            </div> --}}
                            <div class="card-content">
                                <div class="card-body">
                                    <form class="form form-horizontal" method="POST" action="{{route('save-leave')}}">
                                        @csrf
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label>Leave Type</label>
                                                </div>
                                                   
                                                        <div class="col-md-8 form-group">
                                                            
                                                            <select name="leaveType" class="form-control" autocomplete="off">
                                                                
                                                                <option value="">Select Leave Type...</option>    
                                                                @foreach ($lType as $lt)                                      
                                                                <option value="{{$lt->leaveType}}">{{$lt->leaveType}}</option>
                                                                @endforeach
                                                            </select>
                                                            
                                                        </div>
                                                     
                                                     {{-- <div style="margin-bottom: 10px"> --}}
                                                    <div class="col-md-4">
                                                        <label>Start Date</label>
                                                    </div>
                                                        <div class="col-md-8 form-group">
                                                        <input id="birthdate" class="form-control" name="fromDate" type="date" class="datepicker" autocomplete="off" >
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Start Date</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input id="birthdate" class="form-control" name="toDate" type="date" class="datepicker" autocomplete="off" >
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Relief Person</label>
                                                    </div>
                                                    
                                                        
                                                        <div class="col-md-8 form-group">
                                                            <select name="relief" class="form-control" id="">
                                                           
                                                            <option value="">Select A Relief Person...</option>  
                                                            @foreach ($user as $users)       
                                                            @if($users->id != Auth::user()->id)                                 
                                                            <option value="{{$users->lastName}}">{{$users->lastName}}</option>
                                                        @endif
                                                            @endforeach
                                                    </select>
                                                        {{-- <textarea name="description" class="form-control" id="" cols="30" rows="5"></textarea> --}}
                                                    </div>
                                                        @if(Auth::user()->userType != 'Line Manager')
                                                        <div class="col-md-4">
                                                            <label>Line Manager</label>
                                                        </div>
                                                        <div class="col-md-8 form-group">
                                                        <select name="lm" class="form-control" id="">
                                                    
                                                        <option value="">Select Your Line MAnager...</option>  
                                                        @foreach ($user as $users)       
                                                        @if($users->id != Auth::user()->id && $users->userType == 'Line Manager')                                 
                                                        <option value="{{$users->id}}">{{$users->lastName}}</option>
                                                            @endif
                                                             @endforeach
                                                            </select>
                                                {{-- <textarea name="description" class="form-control" id="" cols="30" rows="5"></textarea> --}}
                                                        </div>
                                                            @endif
                        
                                                {{-- </div> --}}
                                                <div class="col-md-4">
                                                    <label>Description</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                    <textarea name="description" class="form-control" id="" cols="30" rows="5"></textarea>
                                                </div>
                                                <div class="col-sm-12 d-flex justify-content-end">
                                                    <button type="submit"
                                                        class="btn btn-primary me-1 mb-1">Apply</button>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

    @endsection