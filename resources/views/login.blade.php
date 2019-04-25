<!DOCTYPE html>
<html lang="en">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Wirecard Payment">
	@extends('main-layout')
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
			              		</div>
			              		<div class="card-body">
			                		<form action="/main">
					                  	<div class="row">
					                    	<div class="col-md-6 pr-1 ml-auto mr-auto" style="border-left: 2px solid #cc0000;">
					                      		<div class="form-group">
					                        		<label for="exampleInputEmail1">Email address</label>
					                        		<input type="email" class="form-control">
					                      		</div>
					                    	</div>
					                  	</div>
					                  	<div class="row">
						                    <div class="col-md-6 pr-1 ml-auto mr-auto" style="border-left: 2px solid #cc0000;">
					                      		<div class="form-group">
						                        	<label>Password</label>
						                        	<input type="password" class="form-control">
						                      	</div>
						                    </div>
					                  	</div>
					                  	<div class="row">
						                    <div class="col-md-6 pr-1 ml-auto mr-auto">
							                  	<div class="checkbox">
										  			<label><input type="checkbox" value=""> Remember Password</label>
												</div>
											</div>
					                  	</div>
					                  	<div class="row">
					                    	<div class="update ml-auto mr-auto">
					                      		<button type="submit" class="btn btn-primary btn-round">Submit</button>
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