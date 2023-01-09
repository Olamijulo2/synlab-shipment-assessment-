@include('home.assets')
@extends('layouts.new_app')

@section('content')
@include('admin.sidebar')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="auth">
                    <div class="card-header"><b>{{ __('SHIPMENT ASSESSMENT') }}</b></div>
                    <div class="card-body">
                        <form class="row g-4"  method="POST" action="{{ route('store.shipment') }}">
                            @csrf
                            <div class="col-md-10">
                                <label for="dateOfShipment" class="form-label" text-md-right>{{ __('DATE OF SHIPMENT') }}</label>
                                <input id="date" type="date" class="form-control @error('date') is-invalid @enderror" name="dateOfShipment" value="{{ old('date') }}" required autocomplete="off" autofocus>
                                @error('date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-10">
                               <label for="location" class="form-label">{{ __('LOCATION') }}</label>
                                <select name="location" class="form-control" autocomplete="off">
                                    <option value="">Select your answer</option>   
                                    @foreach($locations as $location)                                       
                                        <option value="{{$location->id}}">{{$location->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-10">
                                <label for="region" class="form-label">{{ __('LOCATION REGION') }}</label>
                                 <select name="locationRegion" class="form-control" autocomplete="off">
                                     <option value="">Select your answer</option> 
                                    @foreach($location_regions as $location_region)                                       
                                        <option value="{{$location_region->id}}">{{$location_region->name}}</option>
                                    @endforeach                                         
                                 </select>
                             </div>
                            <div class="col-md-10">
                                <label for="batchNumber" class="form-label">{{ __('SHIPPING BATCH NUMBER') }}</label>
                                <input id="batchNum"  type="number" class="form-control" name="batchNumber" placeholder="Enter your answer" value="" autofocus>
                            </div>
                            <div class="col-md-10">
                                <label for="shipmentTime" class="form-label">{{ __('TIME SHIPMENT WAS RECEIVED') }}</label>
                                <input id="time"  type="time" class="form-control" name="shipmentTime" value="Select your answer" autofocus>
                            </div>
                             <div class="col-md-10">
                                <label for="temperature" class="form-label">{{ __('TEMPERATURE SHIPMENT WAS RECEIVED (℃)') }}</label>
                                <input id="time"  type="text" class="form-control" name="temperature" placeholder="Enter your answer" value="" autofocus>
                            </div>
                             <div class="col-md-10">
                                <label for="numberOfSample" class="form-label">{{ __('NUMBER OF SAMPLES RECEIVED') }}</label>
                                <input id="time"  type="number" class="form-control" name="numberOfSample" placeholder="Enter your answer" value="" autofocus>
                            </div>
                            <div class="col-md-10">
                                <label for="numberOfSampleQuery" class="form-label">{{ __('NUMBER OF SAMPLES WITH QUERY') }}</label>
                                <input id="time"  type="number" class="form-control" name="numberOfSampleQuery" placeholder="Enter your answer" value="" autofocus>
                            </div>
                            <div class="col-md-10"> 
                                <label for="receiver" class="form-label">{{ __('SHIPMENT RECEIVED BY') }}</label>
                                 <select name="receiver" class="form-control" autocomplete="off">
                                     <option value="">Select your answer</option> 
                                    @foreach($admins as $admin)                                       
                                        <option value="{{$admin->id}}">{{$admin->userName}}</option>
                                    @endforeach                                         
                                 </select>
                            </div>
                            <div class="col-md-10 ">
                                <p>QUERY CATEGORY</p>
                                @foreach($query_categories as $query_category)  
                                <input type="checkbox" id="barCode" name="queryCategory" value="{{$query_category->id}}">
                                <label for="queryCategory" class="form-label">{{$query_category->name}}</label> <br>
                                @endforeach
                            </div>
                            <div class="col-md-10">
                                <label for="queryDetails" class="form-label">{{ __('QUERY DETAILS') }}</label>
                                <input id="time"  type="text" class="form-control" name="queryDetails" placeholder="Give query details" value="" autofocus>
                            </div>
                            <div class="col-md-3 offset-md-4 text-center">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('SUBMIT') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection