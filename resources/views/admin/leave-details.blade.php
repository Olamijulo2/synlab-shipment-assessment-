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
                                        <td><b>Requestor:</b> </td>
                                        <td>{{$leave->user->lastName . " ". $leave->user->lastName}}</td>
                                        <td><b>Leave Type:</b> </td>
                                        <td>{{$leave->leaveType}}</td>
                                        <td><b>Leave Request Date:</b> </td>
                                        <td>{{$leave->created_at}}</td>
                                    </tr>
                                    <tr> 
                                        <td><b>Leave Description:</b> </td>
                                        <td>{{$leave->description}}</td>
                                        <td><b>Leave Start date:</b> </td>
                                        <td>{{$leave->fromDate}}</td>
                                        <td><b>Leave End date:</b> </td>
                                        <td>{{$leave->toDate}}</td>
                                    </tr> 
                                    <tr>
                                        {{-- <td><b>Relief Person: </td>
                                        <td>{{$leave->relief}}</td> --}}
                                        <td><b>Relief Approval: </b></td>
                                        @if($leave->reliefStatus == 1)
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
                                            <td><b>Relief Approval:</b></td>
                                        <td><span class="">{{$leave->reliefRemark}}</span></td>
                                            <td><b>Relief Remark Date:</b></td>
                                            <td> <span class="">{{$leave->reliefRemarkDate}}</span></td>
                                        </td>
                                        @endif
                                    </tr>
                                    <tr>
                                        <td><b>Line Manager Approval: </b></td>
                                        @if($leave->lineManagerStatus == 0)
                                        <td>
                                            <span class="text-primary">Waiting For Approval</span>
                                        </td>
                                        @elseif($leave->lineManagerStatus == 1)
                                        <td>
                                            <span class="text-success">Approved</span>
                                        </td>
                                        <td><b>Line Manager Remark:</b></td>
                                        <td><span class="">{{$leave->lineManagerRemark}}</span></td>
                                        <td><b>Line Manager Remark Date:</b></td>
                                        <td><span class="">{{$leave->lineManagerRemarkDate}}</span></td>
                                        @else
                                        <td>
                                            <span class="text-danger">Not Approved</span>
                                            <td><b>Line Manager Remark:</b></td>
                                        <td><span class="">{{$leave->lineManagerRemark}}</span></td>
                                            <td><b>Line Manager Remark Date:</b></td>
                                            <td> <span class="">{{$leave->lineManagerRemarkDate}}</span></td>
                                        </td>
                                        @endif
                                    </tr>
                                    <tr>
                                        <td><b>Admin Approval: </b></td>
                                        @if($leave->AdminStatus == 0)
                                        <td>
                                            <span class="text-primary">Waiting For Approval</span>
                                        </td>
                                        @elseif($leave->AdminStatus == 1)
                                        <td>
                                            <span class="text-success">Approved</span>
                                        </td>
                                        <td><b>Admin Remark:</b></td>
                                        <td><span class="">{{$leave->adminRemark}}</span></td>
                                        <td><b>Admin Remark Date:</b></td>
                                        <td><span class="">{{$leave->adminRemarkDate}}</span></td>
                                        @else
                                        <td>
                                            <span class="text-danger">Not Approved</span>
                                            <td><b>Admin Remark:</b></td>
                                        <td><span class="">{{$leave->adminRemark}}</span></td>
                                            <td><b>admin Remark Date:</b></td>
                                            <td> <span class="">{{$leave->adminRemarkDate}}</span></td>
                                        </td>
                                        @endif
                                    </tr>
                                    @if ($leave->AdminStatus == 0)
                                    <tr>
                                        
                                            
                                       
                                        <td colspan="5" class="text-center">
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#reliefApproval{{$leave->id}}">
                                                Take Action
                                            </button>
                                            <form action="{{route('admin-approval', $leave->id)}}" method="POST">
                                            @csrf
                                                <div class="modal fade" id="reliefApproval{{$leave->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Take Action</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="col-md-4">
                                                                    <label for="Action" class="form-label">{{ __('Take Action') }}</label>
                                                                </div>
                                                                <div class="col-md-8 form-group">
                                                                    <select name="approval" class="form-control" autocomplete="off">
                                                                        <option value="">Select An Action</option>                                          
                                                                        <option value="1">Approve</option>
                                                                        <option value="2">Unapprove</option>
                                                                    </select>
                                                                </div>
                                                                {{-- <input type="hidden" name="adminID" id="" value="{{(Auth('admin')->user()->id)}}"> --}}
                                                                <div class="col-md-4">
                                                                    <label>Remark</label>
                                                                </div>
                                                                <div class="col-md-8 form-group">
                                                                    <textarea name="remark" class="form-control" id="" cols="30" rows="5"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <input type="submit" name="" value="Submit" class="btn btn-primary">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </td>
                                    </tr>
                                    @endif
                                </tbody>
                                <div>
                                    
                                </div>
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
            <script>
                $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
            </script>
        </div>
    </div>
    
    

@endsection

