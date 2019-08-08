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
							<li class="list-group-item "><a class="text-light" href="{{route('user.dashboard.show')}}">View profile</a></li>
              <li class="list-group-item active"><a class="text-light" href="{{route('user.dashboard.edit')}}">Update profle</a></li>
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
						<h3>Update profile details of {{Auth::user()->username}}</h3>
                    </div>
                    {{-- @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        {{$error}}
                    @endforeach 
                    @endif --}}
                    <div class="update-form">
                            <form action="{{route('user.dashboard.update')}}" method="POST">
                                @csrf
                                @method("PATCH")
                                <div class="form-group">
                                  <label for="username">Username</label>
                                  <input 
                                        type="text" 
                                        class="form-control" 
                                        value="{{Auth::user()->username}}" 
                                        name="username" 
                                        id="username" 
                                        placeholder="Email"
                                  />
                                  <span style="color:red">{{$errors->first('username')}}</span>
                                </div>
                
                                <div class="form-group">
                                  <label for="phone_no">Phone_no</label>
                                  <input 
                                        type="text" 
                                        class="form-control" name="phone_no" 
                                        value="{{Auth::user()->phone_no}}"
                                        class="form-control" id="phone_no"
                                        placeholder="Password"
                                  />
                                  <span style="color:red">{{$errors->first('Phone_no')}}</span>
                                </div>
                
                                <div class="form-group">
                                  <label for="shipping_address">Shipping_address</label>
                                  <textarea 
                                        name="shipping_address" 
                                        class="form-control" 
                                        rows="3">{{Auth::user()->shipping_address}}
                                        
                                </textarea>
                                  <span style="color:red">{{$errors->first('shipping_address')}}</span>
                                </div>

                                <div class="form-group">
                                  <label for="street_address">Street_address</label>
                                  <input 
                                        type="text" 
                                        class="form-control" name="street_address" 
                                        value="{{Auth::user()->street_address}}"
                                        class="form-control" id="street_address"
                                  
                                  />
                                  
                                </div>
                                <span style="color:red">{{$errors->first('street_address')}}</span>
                                
                                <div class="form-group">
                                  <label for="division">Division</label>
                                  <input 
                                        type="text" 
                                        class="form-control" 
                                        value="{{auth::user()->division}}" 
                                        name="division" id="division"
                                  />
                                  <span style="color:red">{{$errors->first('division')}}</span>
                                </div>
                
                                <div class="form-group">
                                  <label for="district">District</label>
                                  <input 
                                        type="text" 
                                        class="form-control" 
                                        value="{{Auth::user()->district}}" 
                                        name="district" 
                                        id="district"
                                  />
                                 <span style="color:red">{{$errors->first('district')}}</span>
                                  
                                </div>
                
                                <div class="form-group">
                                  <label for="zip_code">Zip-code</label>
                                  <input 
                                        type="text" 
                                        class="form-control" 
                                        name="zip_code" 
                                        value="{{Auth::user()->zip_code}}" 
                                        id="zip_code"
                                  />
                                  <span style="color:red">{{$errors->first("zip_code")}}</span>
                                </div>
                
                                <button type="submit" class="btn btn-success btn-block">Submit</button>
                              </form>
                        </div>
                    </div>
                </div>
        </div>
</section>       
    @endsection
	@push('script')
		
	@endpush