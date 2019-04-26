<!DOCTYPE html>
<html lang="en">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Wirecard Payment">
	@extends('main-layout')
  	<title>User Profile</title>
	<body>
		<div class="wrapper ">
		    <div class="sidebar" data-color="white" data-active-color="danger">
		      	<div class="logo">
		      		<a href="/main">
			      		<img class="rounded mx-auto d-block" src="{{ asset('/img/wirecard-logo.png') }}">
			      	</a>
		      	</div>
		      	<div class="sidebar-wrapper">
		        	<ul class="nav" id="accordion">
		          		<li>
		            		<a href="/main">
		              			<i class="fas fa-history"></i>
		              			<p>Activity</p>
		            		</a>
		          		</li>
		          		<li>
		            		<a data-toggle="collapse" data-parent="#accordion" href="#collapse-client">
		              			<i class="fas fa-male"></i>
		              			<p>Client</p>
		            		</a>
		            		<div id="collapse-client" class="panel-collapse collapse in">
		              			<a href="/setup-client">
		            			<div class="inner-menu">
			              			<p>Setup Client</p>
		              			</div>
		              			</a>
		              			<a href="/setup-membership">
		            			<div class="inner-menu">
			              			<p>Setup Membership</p>
		              			</div>
		              			</a>
		              			<a href="/setup-site-group">
		            			<div class="inner-menu">
			              			<p>Setup Site Group</p>
		              			</div>
		              			</a>
		              			<a href="/setup-site">
		            			<div class="inner-menu">
			              			<p>Setup Site</p>
		              			</div>
		              			</a>
		              			<a href="/setup-terminal">
		            			<div class="inner-menu">
			              			<p>Setup Terminal</p>
		              			</div>
		              			</a>
		              			<a href="/setup-product-group">
		            			<div class="inner-menu">
			              			<p>Setup Product Group</p>
		              			</div>
		              			</a>
		              			<a href="/setup-product">
		            			<div class="inner-menu">
			              			<p>Setup Product</p>
		              			</div>
		              			</a>
		              			<a href="/setup-product-to-gp">
		            			<div class="inner-menu">
			              			<p>Setup Product to Product Group Relation</p>
		              			</div>
		              			</a>
		              			<a href="/setup-membership-privilege">
		            			<div class="inner-menu">
			              			<p>Setup Membership Privilege</p>
		              			</div>
		              			</a>
		              			<a href="/setup-card-type">
		            			<div class="inner-menu">
			              			<p>Setup Card Type</p>
		              			</div>
		              			</a>
		              			<a href="/setup-industry-classification">
		            			<div class="inner-menu">
			              			<p>Setup Industry Classification</p>
		              			</div>
		              			</a>
		              			<a href="/setup-account-manager">
		            			<div class="inner-menu">
			              			<p>Setup Account Manager</p>
		              			</div>
		              			</a>
					      	</div>
		          		</li>
		          		<li>
		          			<a data-toggle="collapse" data-parent="#accordion" href="#collapse-user">
		              			<i class="far fa-user"></i>
		              			<p>Account</p>
		            		</a>
		            		<div id="collapse-user" class="panel-collapse collapse in">
		              			<a href="/setup-account">
		            			<div class="inner-menu">
			              			<p>Setup Account</p>
		              			</div>
		              			</a>
		              			<a href="/register-account-to-client">
		            			<div class="inner-menu">
			              			<p>Register Account to Client</p>
		              			</div>
		              			</a>
		              			<a href="/setup-account-CP">
		            			<div class="inner-menu">
			              			<p>Setup Account CP</p>
		              			</div>
		              			</a>
		              			<a href="/setup-account-profile">
		            			<div class="inner-menu">
			              			<p>Setup Account Profile</p>
		              			</div>
		              			</a>
		              			<a href="/setup-card-profile">
		            			<div class="inner-menu">
			              			<p>Setup Card Profile</p>
		              			</div>
		              			</a>
		              			<a href="/customize-account-privilege">
		            			<div class="inner-menu">
			              			<p>Customize Account Privilege</p>
		              			</div>
		              			</a>
		              			<a href="/register-service">
		            			<div class="inner-menu">
			              			<p>Register Service</p>
		              			</div>
		              			</a>
					      	</div>
		          		</li>
		          		<li>
		            		<a href="#">
		              			<i class="far fa-user-circle"></i>
		              			<p>Sub Account</p>
		            		</a>
		          		</li>
		          		<li>
		            		<a href="#">
		              			<i class="fas fa-layer-group"></i>
		              			<p>Card Group</p>
		            		</a>
		          		</li>
		          		<li>
		            		<a href="#">
		              			<i class="far fa-credit-card"></i>
		              			<p>Member Card</p>
		            		</a>
		          		</li>
		          		<li>
		            		<a href="#">
		              			<i class="far fa-file-alt"></i>
		              			<p>Report</p>
		            		</a>
		          		</li>
		          		<li>
		            		<a href="#">
		              			<i class="fas fa-users-cog"></i>
		              			<p>User Management</p>
		            		</a>
		          		</li>
		          		<li>
		            		<a href="#">
		              			<i class="fas fa-cogs"></i>
		              			<p>Configuration</p>
		            		</a>
		          		</li>
		          		<li>
		            		<a href="#">
		              			<i class="fas fa-tv"></i>
		              			<p>Monitoring</p>
		            		</a>
		          		</li>
		          		<li>
		            		<a href="#">
		              			<i class="fas fa-mail-bulk"></i>
		              			<p>Marketing Message</p>
		            		</a>
		          		</li>
		          		<li>
		            		<a href="#">
		              			<i class="fas fa-file-invoice-dollar"></i>
		              			<p>Fee</p>
		            		</a>
		          		</li>
		          		<li>
		            		<a class="nav-link" href="/payment">
		              			<i class="far fa-credit-card"></i>
		              			<p>Payment</p>
		            		</a>
		          		</li>
		        	</ul>
		      	</div>
		    </div>

		    <div class="main-panel">
		      	<!-- Navbar -->
		      	<nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
		        	<div class="container-fluid">
		          		<div class="navbar-wrapper">
		            		<div class="navbar-toggle">
				              	<button type="button" class="navbar-toggler">
				                	<span class="navbar-toggler-bar bar1"></span>
				                	<span class="navbar-toggler-bar bar2"></span>
				                	<span class="navbar-toggler-bar bar3"></span>
				              	</button>
		            		</div>
		            		<a class="navbar-brand">Wirecard Payment</a>
		          		</div>
		          		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
				            <span class="navbar-toggler-bar navbar-kebab"></span>
				            <span class="navbar-toggler-bar navbar-kebab"></span>
				            <span class="navbar-toggler-bar navbar-kebab"></span>
			          	</button>
				        <div class="collapse navbar-collapse justify-content-end" id="navigation">
				            <form>
				              	<div class="input-group no-border">
				                	<input type="text" value="" class="form-control" placeholder="Search...">
				                	<div class="input-group-append">
				                  		<div class="input-group-text">
				                    		<i class="fas fa-search"></i>
				                  		</div>
				                	</div>
				              	</div>
				            </form>
				            <ul class="navbar-nav">

				              	<!-- Notifications Menu -->
				              	<li class="nav-item btn-rotate dropdown">
				                	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				                  		<i class="far fa-bell"></i>
				                	</a>
				                	<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
				                  		<a class="dropdown-item" href="#">Notification #3</a>
					                  	<a class="dropdown-item" href="#">Notification #2</a>
					                  	<a class="dropdown-item" href="#">Notification #1</a>
				                	</div>
				              	</li>
				              	<!-- End of Notifications Menu -->

				              	<!-- User Menu -->
				              	<li class="nav-item btn-rotate dropdown">
				                	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				                  		<i class="far fa-user"></i>
				                	</a>
				                	<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
				                  		<a class="dropdown-item" href="/user">Show Profile</a>
					                  	<a class="dropdown-item" href="/">Log Out</a>
				                	</div>
				              	</li>
				              	<!-- End of User Menu -->
		            		</ul>
		          		</div>
		        	</div>
		      	</nav>
		      	<!-- End of Navbar -->

		      	<!-- Content Section -->
		      	<div class="content">
		        	<div class="row">
		          		<!-- User Profile -->
			          	<div class="col-md-12">
			            	<div class="card card-user">
			              		<div class="card-body">
			                		<div class="author">
			                  			<i class="far fa-user" style="font-size: 24px"></i>
			                  			<h5 class="title">Mahbub Haq Al Farisi</h5>
			                  			<p class="description">mahbub.alfarisi@wirecard.com</p>
			                  			<a data-toggle="collapse" href="#editprofile-collapse">
				                  			<button type="submit" class="btn btn-primary btn-round">Edit Profile</button>
			                  			</a>
			                		</div>
			              		</div>
			            	</div>
			          	</div>
		          		<!-- End of User Profile -->

			          	<!-- Edit Profile -->
			          	<div class="col-md-12">
			            	<div id="editprofile-collapse" class="panel-collapse collapse card card-user">
			              		<div class="card-header">
			                		<h5 class="card-title">Edit Profile</h5>
			              		</div>
			              		<div class="card-body">
			                		<form>
					                  	<div class="row">
					                    	<div class="col-md-6 pr-1">
					                      		<div class="form-group">
					                        		<label>Username</label>
					                        		<input type="text" class="form-control" placeholder="Edit username">
					                      		</div>
					                    	</div>
					                    	<div class="col-md-6 pl-1">
					                      		<div class="form-group">
					                        		<label for="exampleInputEmail1">Email address</label>
					                        		<input type="email" class="form-control" placeholder="Edit email address">
					                      		</div>
					                    	</div>
					                  	</div>
					                  	<div class="row">
					                    	<div class="col-md-6 pr-1">
					                      		<div class="form-group">
					                        		<label>First Name</label>
						                        	<input type="text" class="form-control">
						                      	</div>
						                    </div>
						                    <div class="col-md-6 pl-1">
						                      	<div class="form-group">
						                        	<label>Last Name</label>
						                        	<input type="text" class="form-control">
						                      	</div>
						                    </div>
					                  	</div>
					                  	<div class="row">
						                    <div class="col-md-6 pr-1">
					                      		<div class="form-group">
						                        	<label>New Password</label>
						                        	<input type="text" class="form-control">
						                      	</div>
						                    </div>
						                    <div class="col-md-6 pl-1">
						                      	<div class="form-group">
						                        	<label for="exampleInputEmail1">Confirm Password</label>
						                        	<input type="email" class="form-control">
						                      	</div>
						                    </div>
					                  	</div>
					                  	<div class="row">
					                    	<div class="update ml-auto mr-auto">
					                      		<button type="submit" class="btn btn-primary btn-round">Update Profile</button>
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