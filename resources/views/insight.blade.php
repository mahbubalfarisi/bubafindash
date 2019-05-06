<<<<<<< HEAD
@extends('insight-layout')
<title>Insight</title>
@section('content')
  	<!-- Content Section -->  	
	<?php
		$totaldebt = '0';
		$debts = DB::select('SELECT * FROM debts');
	?>
    @foreach($debts as $debt)
		<?php
			$amount = $debt->amount;
		?>
		<?php
			$totaldebt = $totaldebt + $debt->amount;
		?>
    @endforeach
	<div class="content">
        <div class="row">
        	<h3>Insight</h3>
        </div>
        <div class="row">
        	<h5>Asset and Debt</h5>
        </div>
        <div class="row">
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="card card-stats">
			  		<div class="card-body ">
			    		<div class="row">
			      			<div class="col-5 col-md-4">
			        			<div class="icon-big text-center icon-warning">
			          				<i class="fas fa-wallet"></i>
			        			</div>
			      			</div>
			      			<div class="col-7 col-md-8">
			        			<div class="numbers">
									<p class="card-category">Liquid Balance</p>
									<p class="text-right">{{'Rp'.$totaldebt}}</p>
			        			</div>
			      			</div>
			    		</div>
			  		</div>
			  		<div class="card-footer ">
			    		<hr>
			    		<div class="stats">
			      			<i class="fas fa-calendar-day"></i> Last day
			    		</div>
			  		</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="card card-stats">
			  		<div class="card-body ">
			    		<div class="row">
			      			<div class="col-5 col-md-4">
			        			<div class="icon-big text-center icon-warning">
			          				<i class="fas fa-coins"></i>
			        			</div>
			      			</div>
			      			<div class="col-7 col-md-8">
			        			<div class="numbers">
									<p class="card-category">Total Asset</p>
									<p class="text-right">{{'Rp'.$totaldebt}}</p>
			        			</div>
			      			</div>
			    		</div>
			  		</div>
			  		<div class="card-footer ">
			    		<hr>
			    		<div class="stats">
			      			<i class="fas fa-calendar-day"></i> Last day
			    		</div>
			  		</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="card card-stats">
			  		<div class="card-body ">
			    		<div class="row">
			      			<div class="col-5 col-md-4">
			        			<div class="icon-big text-center icon-warning">
			          				<i class="fas fa-coins"></i>
			        			</div>
			      			</div>
			      			<div class="col-7 col-md-8">
			        			<div class="numbers">
									<p class="card-category">Net Asset</p>
									<p class="text-right">{{'Rp'.$totaldebt}}</p>
			        			</div>
			      			</div>
			    		</div>
			  		</div>
			  		<div class="card-footer ">
			    		<hr>
			    		<div class="stats">
			      			<i class="fas fa-calendar-day"></i> Last day
			    		</div>
			  		</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="card card-stats">
			  		<div class="card-body ">
			    		<div class="row">
			      			<div class="col-5 col-md-4">
			        			<div class="icon-big text-center icon-warning">
			          				<i class="fas fa-money-check-alt"></i>
			        			</div>
			      			</div>
			      			<div class="col-7 col-md-8">
			        			<div class="numbers">
									<p class="card-category">Remaining Debt</p>
									<p class="text-right">{{'Rp'.$totaldebt}}</p>
			        			</div>
			      			</div>
			    		</div>
			  		</div>
			  		<div class="card-footer ">
			    		<hr>
			    		<div class="stats">
	          				<i class="fas fa-calendar-day"></i> Last day
			    		</div>
			  		</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="card card-stats">
			  		<div class="card-body ">
			    		<div class="row">
			      			<div class="col-5 col-md-4">
			        			<div class="icon-big text-center icon-warning">
			          				<i class="fas fa-calendar-day"></i>
			        			</div>
			      			</div>
			      			<div class="col-7 col-md-8">
			        			<div class="numbers">
									<p class="card-category">Liquidity - Remaining Day</p>
									<p class="text-right">{{'Rp'.$totaldebt}}</p>
			        			</div>
			      			</div>
			    		</div>
			  		</div>
			  		<div class="card-footer ">
			    		<hr>
			    		<div class="stats">
			      			<i class="fas fa-calendar-day"></i> Last day
			    		</div>
			  		</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="card card-stats">
			  		<div class="card-body ">
			    		<div class="row">
			      			<div class="col-5 col-md-4">
			        			<div class="icon-big text-center icon-warning">
			          				<i class="fas fa-calendar-day"></i>
			        			</div>
			      			</div>
			      			<div class="col-7 col-md-8">
			        			<div class="numbers">
									<p class="card-category">Average Monthly Income</p>
									<p class="text-right">{{'Rp'.$totaldebt}}</p>
			        			</div>
			      			</div>
			    		</div>
			  		</div>
			  		<div class="card-footer ">
			    		<hr>
			    		<div class="stats">
			      			<i class="fas fa-calendar-day"></i> Last day
			    		</div>
			  		</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="card card-stats">
			  		<div class="card-body ">
			    		<div class="row">
			      			<div class="col-5 col-md-4">
			        			<div class="icon-big text-center icon-warning">
			          				<i class="fas fa-calendar-day"></i>
			        			</div>
			      			</div>
			      			<div class="col-7 col-md-8">
			        			<div class="numbers">
									<p class="card-category">Average Expenditure</p>
									<p class="text-right">{{'Rp'.$totaldebt}}</p>
			        			</div>
			      			</div>
			    		</div>
			  		</div>
			  		<div class="card-footer ">
			    		<hr>
			    		<div class="stats">
			      			<i class="fas fa-calendar-day"></i> Last day
			    		</div>
			  		</div>
				</div>
			</div>
        </div>
        <div class="row">
        	<h5>Ratio</h5>
        </div>
        <div class="row">
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="card card-stats">
			  		<div class="card-body ">
			    		<div class="row">
			      			<div class="col-5 col-md-4">
			        			<div class="icon-big text-center icon-warning">
			          				<i class="fas fa-percent"></i>
			        			</div>
			      			</div>
			      			<div class="col-7 col-md-8">
			        			<div class="numbers">
									<p class="card-category">Liquidity Ratio</p>
									<p class="text-right">{{'Rp'.$totaldebt}}</p>
			        			</div>
			      			</div>
			    		</div>
			  		</div>
			  		<div class="card-footer ">
			    		<hr>
			    		<div class="stats">
			      			<i class="fas fa-calendar-day"></i> Last day
			    		</div>
			  		</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="card card-stats">
			  		<div class="card-body ">
			    		<div class="row">
			      			<div class="col-5 col-md-4">
			        			<div class="icon-big text-center icon-warning">
			          				<i class="fas fa-percent"></i>
			        			</div>
			      			</div>
			      			<div class="col-7 col-md-8">
			        			<div class="numbers">
									<p class="card-category">Debt Ratio</p>
									<p class="text-right">{{'Rp'.$totaldebt}}</p>
			        			</div>
			      			</div>
			    		</div>
			  		</div>
			  		<div class="card-footer ">
			    		<hr>
			    		<div class="stats">
			      			<i class="fas fa-calendar-day"></i> Last day
			    		</div>
			  		</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="card card-stats">
			  		<div class="card-body ">
			    		<div class="row">
			      			<div class="col-5 col-md-4">
			        			<div class="icon-big text-center icon-warning">
			          				<i class="fas fa-percent"></i>
			        			</div>
			      			</div>
			      			<div class="col-7 col-md-8">
			        			<div class="numbers">
									<p class="card-category">Solvency Ratio</p>
									<p class="text-right">{{'Rp'.$totaldebt}}</p>
			        			</div>
			      			</div>
			    		</div>
			  		</div>
			  		<div class="card-footer ">
			    		<hr>
			    		<div class="stats">
			      			<<i class="fas fa-calendar-day"></i> Last day
			    		</div>
			  		</div>
				</div>
			</div>
        </div>
        <div class="row">
        	<h5>Detail Asset</h5>
        </div>
  	</div>
  	<!-- End of Content Section -->
@endsection
=======
<!DOCTYPE html>
<html lang="en">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Wirecard Payment">
	@extends('insight-layout')
  	<title>Insight</title>
	<body>
		<div class="wrapper ">
		    <div class="sidebar" style="margin-top: 63px;" data-color="white" data-active-color="danger">
		      	<div class="sidebar-wrapper">
		        	<ul class="nav" id="accordion">
		          		<li class="active">
		            		<a href="/insight">
		              			<i class="fas fa-chart-line"></i>
		              			<p>Insight</p>
		            		</a>
		          		</li>
		          		<li>
		            		<a href="/cashflow">
		              			<i class="fas fa-receipt"></i>
		              			<p>Cashflow</p>
		            		</a>
		          		</li>
		          		<li>
		          			<a data-toggle="collapse" data-parent="#accordion" href="#collapse-asset">
		              			<i class="fas fa-wallet"></i>
		              			<p>Assets</p>
		            		</a>
		            		<div id="collapse-asset" class="panel-collapse collapse in">
		              			<a href="/cash">
		            			<div class="inner-menu">
			              			<p>Cash</p>
		              			</div>
		              			</a>
		              			<a href="/jenius-reguler">
		            			<div class="inner-menu">
			              			<p>Jenius Reguler</p>
		              			</div>
		              			</a>
		              			<a href="/jenius-flexi-server">
		            			<div class="inner-menu">
			              			<p>Jenius - Flexi Server</p>
		              			</div>
		              			</a>
		              			<a href="/ovo">
		            			<div class="inner-menu">
			              			<p>OVO</p>
		              			</div>
		              			</a>
		              			<a href="/mandiri">
		            			<div class="inner-menu">
			              			<p>Mandiri</p>
		              			</div>
		              			</a>
		              			<a href="/bni">
		            			<div class="inner-menu">
			              			<p>BNI</p>
		              			</div>
		              			</a>
		              			<a href="/bri">
		            			<div class="inner-menu">
			              			<p>BRI</p>
		              			</div>
		              			</a>
		              			<a href="/gold">
		            			<div class="inner-menu">
			              			<p>Gold</p>
		              			</div>
		              			</a>
		              			<a href="/crypto">
		            			<div class="inner-menu">
			              			<p>Cryptocurrency</p>
		              			</div>
		              			</a>
					      	</div>
		          		</li>
		          		<li>
		          			<a href="/debt">
		              			<i class="fas fa-money-check-alt"></i>
		              			<p>Debt</p>
		            		</a>
		          		</li>
		          		<li>
		            		<a href="/finplan">
		              			<i class="fas fa-receipt"></i>
		              			<p>Financial Plan</p>
		            		</a>
		          		</li>
		        	</ul>
		      	</div>
		    </div>

		    <div class="main-panel">
		      	<!-- Navbar -->
		      	<nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent" style="position: fixed; background-color: #fff !important; opacity: .9;">
		        	<div class="container-fluid">
		          		<div class="navbar-wrapper">
		            		<div class="navbar-toggle">
				              	<button type="button" class="navbar-toggler">
				                	<span class="navbar-toggler-bar bar1"></span>
				                	<span class="navbar-toggler-bar bar2"></span>
				                	<span class="navbar-toggler-bar bar3"></span>
				              	</button>
		            		</div>
		            		<a class="navbar-brand">Buba Financial Management Project</a>
		          		</div>
		          		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
				            <span class="navbar-toggler-bar navbar-kebab"></span>
				            <span class="navbar-toggler-bar navbar-kebab"></span>
				            <span class="navbar-toggler-bar navbar-kebab"></span>
			          	</button>
				        <div class="collapse navbar-collapse justify-content-end" id="navigation">
				            <form>
				              	<div id="searchbar" class="input-group no-border">
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
			                  			<a href="/user">
				                  			<button type="submit" class="btn btn-primary btn-round">Show Profile</button>
			                  			</a>
			                		</div>
			              		</div>
			            	</div>
			          	</div>
		          		<!-- End of User Profile -->
		        	</div>

			        <div class="row">
			          	<div class="col-lg-6 col-md-6 col-sm-6">
			            	<!-- Postpaid Payment -->
			            	<a href="#" style="text-decoration: none;">
				              	<div class="card card-stats">
				                	<div class="card-body ">
				                  		<div class="row">
				                    		<div class="col-5 col-md-4">
				                      			<div class="icon-big text-center icon-warning">
				                        			<i class="fas fa-tags"></i>
				                      			</div>
				                    		</div>
				                    		<div class="col-7 col-md-8">
				                      			<div class="numbers">
							                        <p class="card-category">Payment</p>
							                        <p class="card-title">Postpaid</p>
				                      			</div>
				                    		</div>
				                  		</div>
				                	</div>
				              	</div>
				            </a>
				            <!-- End of Postpaid Payment -->
			          	</div>
			          	<div class="col-lg-6 col-md-6 col-sm-6">
				            <!-- Prepaid Payment -->
				            <a href="#" style="text-decoration: none;">
				              	<div class="card card-stats">
					                <div class="card-body ">
					                  	<div class="row">
					                    	<div class="col-5 col-md-4">
					                      		<div class="icon-big text-center icon-warning">
					                        		<i class="far fa-credit-card"></i>
					                      		</div>
					                    	</div>
					                    	<div class="col-7 col-md-8">
					                      		<div class="numbers">
					                        		<p class="card-category">Payment</p>
					                        		<p class="card-title">Prepaid</p>
					                      		</div>
					                    	</div>
					                  	</div>
					                </div>
				              	</div>
				            </a>
				            <!-- End of Prepaid Payment -->
			          	</div>
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
					                </script> Buba Financial Management Project
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
>>>>>>> 72b6ca91313d07736e1924278ef2e25dc5fe01fd
