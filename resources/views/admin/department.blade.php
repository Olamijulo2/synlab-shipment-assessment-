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
                            <h3>Manage Departments</h3>
                            {{-- <p class="text-subtitle text-muted">For user to check they list</p> --}}
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Departement</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            Department Details
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>Department Name Name</th>
                                        <th>Department ShortName</th>
                                        {{-- <th>Phone</th>
                                        <th>City</th>
                                        <th>Status</th> --}}
                                    </tr>
                                </thead>
                                {{-- @if ()s --}}
                                    
                                {{-- @endif --}}
                                @foreach ($dept as $list)
                                <tbody>
                                    <tr>
                                        <td>{{$list->departmentName}}</td>
                                        <td>{{$list->departmentShortName}}</td>
                                        {{-- <td>076 4820 8838</td>
                                        <td>Offenburg</td>
                                        <td>
                                            <span class="badge bg-success">Active</span>
                                        </td> --}}
                                    </tr>                              
                                </tbody>
                                @endforeach
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