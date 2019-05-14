@extends('login-layout')
<title>Login</title>
@section('content')
  	<title>Login</title>
	<body>
		<div class="wrapper ">

		    <div class="login-panel">

		      	<!-- Content Section -->
		      	<div class="content">
		        	<div class="row">

			          	<!-- Login User -->
			          	<div class="col-md-12">
			            	<div class="card-login card-user">
			              		<div class="card-header">
			                		<h5 class="card-title" style="text-align: center;">Login Form</h5>
			                		@if(isset(Auth::user()->email))
									<script>window.location="/main";</script>
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
			                		<!-- <form action="/insight">
					                  	<div class="row">
					                    	<div class="col-md-6 pr-1 ml-auto mr-auto" style="border-left: 2px solid #cc0000;">
					                      		<div class="form-group">
					                        		<label for="exampleInputEmail1">Email address</label>
					                        		<input type="email" class="form-control" required>
					                      		</div>
					                    	</div>
					                  	</div>
					                  	<div class="row">
						                    <div class="col-md-6 pr-1 ml-auto mr-auto" style="border-left: 2px solid #cc0000;">
					                      		<div class="form-group">
						                        	<label>Password</label>
						                        	<input type="password" class="form-control" required>
						                      	</div>
						                    </div>
					                  	</div>
					                  	<div class="row">
					                    	<div class="update ml-auto mr-auto">
					                      		<button type="submit" class="btn btn-primary btn-round">Submit</button>
					                    	</div>
					                  	</div>
			                		</form> -->
			                		<form action="{{ url('/loginPost') }}" method="post">
						                {{ csrf_field() }}
						                <div class="form-group">
						                    <label for="email">Email:</label>
						                    <input type="email" class="form-control" id="email" name="email">
						                </div>
						                <div class="form-group">
						                    <label for="alamat">Password:</label>
						                    <input type="password" class="form-control" id="password" name="password"></input>
						                </div>
						                <div class="form-group">
						                    <button type="submit" class="btn btn-md btn-primary">Login</button>
						                    <a href="{{url('register')}}" class="btn btn-md btn-warning">Register</a>
						                </div>
						            </form>
			              		</div>
			            	</div>
			          	</div>
			          	<!-- End of Edit Profile -->
		        	</div>
		      	</div>
		      	<!-- End of Content Section -->

		      	<!-- Footer/Credits Section -->
		      	<footer class="footer footer-black  footer-white ">
		        	<div class="container-fluid">
		          		<div class="row">
		            		<div class="credits ml-auto">
		              			<span class="copyright">©
					                <script>
					                  document.write(new Date().getFullYear())
					                </script> by Wirecard Indonesia
		              			</span>
		            		</div>
		          		</div>
		        	</div>
		      	</footer>
		      	<!-- End of Footer/Credits Section -->
		    </div>
	  	</div>
	</body>
</html>