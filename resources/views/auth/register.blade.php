@include('home.assets')
@extends('layouts.new_app')

@section('content')
@include('admin.sidebar')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="auth">
                    <div class="card-header">{{ __('Register') }}</div>
                    <div class="card-body">
                        <form class="row g-3"  method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="col-md-6">
                                <label for="name" class="col-md-8 col-form-label">{{ __('Last Name') }}</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="lastName" value="{{ old('name') }}" required autocomplete="off" autofocus>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="firstName" class="col-md-8 col-form-label">{{ __('First Name') }}</label>
                                <input id="name" type="text" class="form-control" name="firstName" value="" autofocus autocomplete="off">
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="col-md-8 form-label">{{ __('E-Mail Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="off">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="username" class="col-md-8 form-label">{{ __('User Name') }}</label>
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="userName" value="{{ old('username') }}" autocomplete="off">
                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                       

                            <div class="col-md-6">
                                <label for="department" class="form-label">{{ __('Department') }}</label>
                                <select name="department" class="form-control" autocomplete="off">
                                
                                       
                                    <option value="">Select Department...</option> 
                                    @foreach ($department as $dept)                                         
                                    <option value="{{$dept->departmentName}}">{{$dept->departmentName}}</option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="col-md-6">
                                <label for="mobileNumber" class="form-label">{{ __('Mobile Number') }}</label>
                                <input id="name"  type="number" class="form-control" name="mobileNo" value="" autofocus>
                            </div>
                           

                            <div class="col-md-6">
                                <label for="password" class="col-md-8 col-form-label">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="password-confirm" class="col-md-8 col-form-label">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                            <div class="col-md-4 offset-md-4 text-center">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
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