@extends('login-layout')
<title>Login</title>
@section('content')
  	<!-- Content Section -->
  	<div class="content">
    	<div class="row">
          	<!-- Login User -->
          	<div class="col-md-12">
            	<div class="card-login card-user">
              		<div class="card-header">
                		<h5 class="card-title" style="text-align: center;">Login Form</h5>
                		@if(isset(Auth::user()->email))
						<script>window.location="/insight";</script>
						@endif

						@if ($message = Session::get('error'))
						<div class="alert alert-danger alert-block">
							<button type="button" class="close" data-dismiss="alert">×</button>
							<strong>{{ $message }}</strong>
						</div>
						@endif

						@if (count($errors) > 0)
						<div class="alert alert-danger">
							<ul>
						 	@foreach($errors->all() as $error)
						  		<li>{{ $error }}</li>
						 		@endforeach
						 	</ul>
						</div>
						@endif

						@if ($errors->any())
			                <div class="alert alert-danger">
			                  	<ul>
			                      	@foreach ($errors->all() as $error)
			                        	<li>{{ $error }}</li>
			                      	@endforeach
			                  	</ul>
			                </div><br />
			            @endif
              		</div>
              		<div class="card-body">
                		<form action="{{ url('/loginPost') }}" method="post">
			                {{ csrf_field() }}
		                  	<div class="row">
		                    	<div class="col-md-6 pr-1 ml-auto mr-auto">
					                <div class="form-group">
					                    <label for="email">Email:</label>
					                    <input type="email" class="form-control" id="email" name="email">
					                </div>
					            </div>
					        </div>
		                  	<div class="row">
		                    	<div class="col-md-6 pr-1 ml-auto mr-auto">
					                <div class="form-group">
					                    <label for="alamat">Password:</label>
					                    <input type="password" class="form-control" id="password" name="password"></input>
					                </div>
					            </div>
					        </div>
		                  	<div class="row">
		                    	<div class="col-md-6 pr-1 ml-auto mr-auto">
					                <div class="form-group">
					                    <button type="submit" class="btn btn-md btn-primary">Login</button>
					                    <a href="{{url('register')}}" class="btn btn-md btn-warning">Register</a>
					                </div>
					            </div>
					        </div>
			            </form>
              		</div>
            	</div>
          	</div>
          	<!-- End of Edit Profile -->
    	</div>
  	</div>
  	<!-- End of Content Section -->
@endsection