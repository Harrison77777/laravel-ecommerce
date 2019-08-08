@extends('layouts.layout')
    @section('title')
        
		{{Auth::user()->username}}'s details | Laravel-E-commerce
	@endsection
	@push('css')
		
	@endpush
	@section('content')

	
	<section>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-2 col-md-offset-1" >
						<div style="width:100%;" class="user-photo-area text-center">
								<img style="width:60%; height:150px;" src="{{asset('uploads/user/user-image-png-7.png')}}" alt="">
								<div>
									<h6><strong>Username: {{Auth::user()->username}}</strong></h6>
								</div>
						</div>
					<div style="height:100vh; width:99%;margin-left:1%;" class="dashboard-menu-area">
						<ul class="list-group">
							<li class="list-group-item"><a class="text-light" href="{{route('user.dashboard.index')}}">Dashboard</a></li>
							<li class="list-group-item active"><a class="text-light" href="
								{{route('user.dashboard.show')}}">View profile</a></li>
							<li class="list-group-item">
								<a class="text-light" 
								href="{{route('user.dashboard.edit')}}">
								Update profle
								</a>
							</li>
							<li class="list-group-item"><a class="text-light" href="">Orders</a></li>
							<li class="list-group-item"><a
								onclick=
								"
								event.preventDefault();
								document.getElementById('logout-form').submit();	
								"
								 href="#"
								 >Logout</a>
							</li>
						</ul>
					</div>
				</div>
                <div class="col-sm-8 padding-right">
					
                    <div class="heading">
						<h3>Profile details of {{Auth::user()->username}}</h3>
					</div>
					<div class="card">
						<h5>Username:{{$user->username}}</h5>
						<h5>email: {{$user->email}}</h5>
						<h5>Phone no: {{$user->phone_no}}</h5>
						<hr>
						<small style="margin: 0px;">Location</small>
						<h5>Division: {{$user->division}}</h5>
						<h5>District: {{$user->district}}</h5>
						<h5>Shipping Address: {{$user->shipping_address}}</h5>
						<h5>street Address: {{$user->street_address}}</h5>
						<h5>Zip-code: {{$user->zip_code}}</h5>
                    </div>
                </div>
            </div>
        </div>
</section>       
    @endsection
	@push('script')
		
	@endpush
	