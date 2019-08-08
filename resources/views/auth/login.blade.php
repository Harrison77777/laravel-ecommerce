@extends('layouts/layout')
@section('title', 'login-page')
    
@push('css')
    
@endpush
@section('content')
<section class="login-section">
<div class="container">
    <div class="row">
        <div class="col-md-10 col-sm-offset-1">
            <div class="login-form">
                <!--login form-->
                @if (Session::has('errorMsg'))
                <div class=" alert alert-info">{{session('errorMsg')}}</div>
                @endif
                <h2>Login to your account</h2>
                <form action="{{route('login')}}" method="POST">
                    @csrf
                    <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" placeholder="Your Email Address" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" autofocus>

                                @error('email')
                                    <span style="color:red" class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" placeholder="Your Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="current-password">

                                @error('password')
                                    <span style="color:red" class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    
                    <button type="submit" class="btn btn-default">Login</button>
                </form>
            </div>
            <!--/login form-->
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
    </div>
</div>
</section><!--/form-->
@endsection
@push('script')
    
@endpush