@extends('layouts.new_app')
@section('content')
 
@include('admin.sidebar')
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
                        <h3>Add Department</h3>
                        
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
                                    <form class="form form-horizontal" method="POST" action="{{route('save-dept')}}">
                                        @csrf
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label>Department Name</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                    <input type="text" id="" class="form-control"
                                                        name="deptName" placeholder="">
                                                </div>
                                                <div class="col-md-4">
                                                    <label>Department Short Name</label>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                    <input type="text" id="" class="form-control"
                                                        name="departShortName" placeholder="">
                                                </div>
                                                <div class="col-sm-12 d-flex justify-content-end">
                                                    <button type="submit"
                                                        class="btn btn-primary me-1 mb-1">Submit</button>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

    @endsection