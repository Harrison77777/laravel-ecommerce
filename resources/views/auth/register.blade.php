@extends('layouts/layout')
@section('title','Register-page')
    
@push('css')
    
@endpush
@section('content')
<section class="registar-section">
<div class="container">
    <div class="row">
        <div class="col-sm-10 offset-1">
            @if (Session::has('successMsg'))
               <div class="alert alert-success">{{session('successMsg')}}</div> 
            @endif
            @if (Session::has('errorMsg'))
               <div class="alert alert-danger">{{session('errorMsg')}}</div> 
            @endif
            <div class="signup-form">
                <h2>New User Signup!</h2>
                <form action="{{route('register')}}" method="POST">
                    @csrf
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Username</label>
                        <div class="col-md-7">
                            <input placeholder="Username" id="name" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}">

                            @error('username')
                                <span style="color:red;" class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>  
                    
                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

                        <div class="col-md-7">
                            <input placeholder="Email address" id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">

                            @error('email')
                                <span style="color:red;" class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="phone_no" class="col-md-4 col-form-label text-md-right">Phone</label>

                        <div class="col-md-7">
                            <input placeholder="Phone number" id="phone_no" type="text" class="form-control @error('phone_no') is-invalid @enderror" name="phone_no" value="{{ old('phone_no') }}">

                            @error('phone_no')
                                <span style="color:red;" class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Division" class="col-md-4 col-form-label text-md-right">Division</label>

                        <div class="col-md-7">
                            <input placeholder="Division" id="Division" type="text" class="form-control @error('division') is-invalid @enderror" name="division" value="{{ old('division') }}">

                            @error('division')
                                <span style="color:red;" class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="District" class="col-md-4 col-form-label text-md-right">District</label>

                        <div class="col-md-7">
                            <input placeholder="District" id="District" type="text" class="form-control @error('district') is-invalid @enderror" name="district" value="{{ old('district') }}">

                            @error('district')
                                <span style="color:red;" class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    
                    <div class="form-group row">
                        <label for="zip_code" class="col-md-4 col-form-label text-md-right">Zip_code</label>

                        <div class="col-md-7">
                            <input placeholder="zip_code" id="zip_code" type="number" class="form-control @error('zip_code') is-invalid @enderror" name="zip_code" value="{{ old('zip_code') }}">

                            @error('zip_code')
                                <span style="color:red;" class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                
                    <div class="form-group row">
                        <label for="shipping_address" class="col-md-4 col-form-label text-md-right">Shipping_address</label>
                        <div class="col-md-7">
                            <textarea placeholder="shipping_address" id="shipping_address" type="text" class="form-control" rows="3" name="shipping_address">{{ old('shipping_address') }}</textarea>
                            @error('shipping_address')
                                <span style="color:red;" class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="street_address" class="col-md-4 col-form-label text-md-right">Street_address</label>

                        <div class="col-md-7">
                            <input placeholder="street_address" id="street_address" type="text" class="form-control @error('street_address') is-invalid @enderror" name="street_address" value="{{ old('street_address') }}">

                            @error('street_address')
                                <span style="color:red;" class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-7">
                            <input placeholder="password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password">

                            @error('password')
                                <span style="color:red;" class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                   

                    <div class="form-group row">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                        <div class="col-md-7">
                            <input placeholder="Confirm password" id="password-confirm" type="password" class="form-control" name="password_confirmation">
                        </div>
                    </div>
                   <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                Register
                            </button>
                        </div>
                    </div>
                   
              
            </div><!--/sign up form-->
        </div>
    </div>
</div>
</section>

<!--/form-->
@endsection
@push('script')
    
@endpush
