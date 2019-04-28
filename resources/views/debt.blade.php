<!DOCTYPE html>
<html lang="en">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Wirecard Payment">
	@extends('insight-layout')
  	<title>Debt</title>
	<body>
		<div class="wrapper ">
		    <div class="sidebar" style="margin-top: 63px;" data-color="white" data-active-color="danger">
		      	<div class="sidebar-wrapper">
		        	<ul class="nav" id="accordion">
		          		<li>
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
		          		<li class="active">
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
			          	<div class="col-md-6">
			            	<div class="card">
			              		<div class="card-header">
			                		<h4 class="card-title">Debt Statement</h4>
			              		</div>
			              		<div class="card-body">
			                		<div class="table-responsive">
			                  			<table class="table">
			                    			<thead class=" text-primary">
						                      	<th>
						                        	Purpose
						                      	</th>
					                      		<th>
					                        		Creditor
					                      		</th>
					                      		<th class="text-right">
					                        		Amount (Rp)
						                      	</th>
						                      	<th class="text-right">
						                        	Remaining (Rp)
						                      	</th>
					                    	</thead>
				                    		<tbody>
												<tr>
													<td>
														Pinjam
													</td>
													<td>
														Kichan
													</td>
													<td class="text-right">
														200000
													</td>
													<td class="text-right">
														200000
													</td>
												</tr>
												<tr>
													<td>
														Pinjam
													</td>
													<td>
														Kichan
													</td>
													<td class="text-right">
														50000
													</td>
													<td class="text-right">
														50000
													</td>
												</tr>
												<tr>
													<td>
														Pinjam
													</td>
													<td>
														Kichan
													</td>
													<td class="text-right">
														30000
													</td>
													<td class="text-right">
														5000
													</td>
												</tr>
												<tr>
													<td>
														Pinjam
													</td>
													<td>
														Kichan
													</td>
													<td class="text-right">
														20000
													</td>
													<td class="text-right">
														20000
													</td>
												</tr>
												<tr>
													<td>
														Pinjam
													</td>
													<td>
														Kichan
													</td>
													<td class="text-right">
														50000
													</td>
													<td class="text-right">
														50000
													</td>
												</tr>
												<tr>
													<td>
														Beli Pulsa
													</td>
													<td>
														Thea
													</td>
													<td class="text-right">
														100000
													</td>
													<td class="text-right">
														100000
													</td>
												</tr>
												<tr>
													<td>
														Beli Pulsa
													</td>
													<td>
														Mbah
													</td>
													<td class="text-right">
														30000
													</td>
													<td class="text-right">
														30000
													</td>
												</tr>
												<tr>
													<td>
														Pinjam
													</td>
													<td>
														Cahatfood
													</td>
													<td class="text-right">
														60000
													</td>
													<td class="text-right">
														60000
													</td>
												</tr>
												<tr>
													<td>
														Pinjam
													</td>
													<td>
														Kichan
													</td>
													<td class="text-right">
														180000
													</td>
													<td class="text-right">
														180000
													</td>
												</tr>
												<tr>
													<td>
														Pinjam
													</td>
													<td>
														Kichan
													</td>
													<td class="text-right">
														120000
													</td>
													<td class="text-right">
														120000
													</td>
												</tr>
												<tr>
													<td>
														Pinjam
													</td>
													<td>
														Kichan
													</td>
													<td class="text-right">
														100000
													</td>
													<td class="text-right">
														100000
													</td>
												</tr>
												<tr>
													<td>
														Pinjam
													</td>
													<td>
														Kichan
													</td>
													<td class="text-right">
														330000
													</td>
													<td class="text-right">
														330000
													</td>
												</tr>
												<tr>
													<td>
														Pinjam
													</td>
													<td>
														Kichan
													</td>
													<td class="text-right">
														420000
													</td>
													<td class="text-right">
														420000
													</td>
												</tr>
												<tr>
													<td>
														Patungan Hadiah Wisuda
													</td>
													<td>
														Thea
													</td>
													<td class="text-right">
														30000
													</td>
													<td class="text-right">
														30000
													</td>
												</tr>
												<tr>
													<td>
														Patungan Nikahan Adel
													</td>
													<td>
														Upi
													</td>
													<td class="text-right">
														50000
													</td>
													<td class="text-right">
														50000
													</td>
												</tr>
												<tr>
													<td>
														Pinjam
													</td>
													<td>
														Kichan
													</td>
													<td class="text-right">
														250000
													</td>
													<td class="text-right">
														250000
													</td>
												</tr>
												<tr>
													<td>
														Pinjam
													</td>
													<td>
														Bude Lia
													</td>
													<td class="text-right">
														2000000
													</td>
													<td class="text-right">
														2000000
													</td>
												</tr>
												<tr>
													<td>
														Bayar Minuman
													</td>
													<td>
														Asti
													</td>
													<td class="text-right">
														30000
													</td>
													<td class="text-right">
														30000
													</td>
												</tr>
												<tr>
													<td>
														Pinjam
													</td>
													<td>
														Kichan
													</td>
													<td class="text-right">
														400000
													</td>
													<td class="text-right">
														400000
													</td>
												</tr>
					                    	</tbody>
				                  		</table>
				                	</div>
			              		</div>
			            	</div>
			          	</div>
			          	<div class="col-md-6">
			          		<div class="card">
			              		<div class="card-header">
			                		<h4 class="card-title">Debt Summary</h4>
			              		</div>
			              		<div class="card-body">
			                		<div class="table-responsive">
			                  			<table class="table">
			                    			<thead class=" text-primary">
						                      	<th>
						                        	Debt Amount (Rp)
						                      	</th>
						                      	<th>
						                        	Remaining Debt (Rp)
						                      	</th>
					                    	</thead>
				                    		<tbody>
												<tr>
													<td class="text-right">
														4450000
													</td>
													<td class="text-right">
														4425000
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
			          		<div class="card">
			              		<div class="card-header">
			                		<h4 class="card-title">Liquidity Ratio</h4>
			              		</div>
			              		<div class="card-body">
			                		<div class="table-responsive">
			                  			<table class="table">
			                    			<thead class=" text-primary">
						                      	<th>
						                        	Average Monthly Expenditure (Rp)
						                      	</th>
						                      	<th>
						                        	Liquid Asset (Rp)
						                      	</th>
						                      	<th>
						                        	Ratio
						                      	</th>
						                      	<th>
						                        	Days Remaining (Ratio*30)
						                      	</th>
					                    	</thead>
				                    		<tbody>
												<tr>
													<td class="text-right">
														1836168
													</td>
													<td class="text-right">
														444928
													</td>
													<td>
														0,24231
													</td>
													<td>
														7 days
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
			          		<div class="card">
			              		<div class="card-header">
			                		<h4 class="card-title">Debt Ratio</h4>
			              		</div>
			              		<div class="card-body">
			                		<div class="table-responsive">
			                  			<table class="table">
			                    			<thead class=" text-primary">
						                      	<th>
						                        	Average Monthly Income (Rp)
						                      	</th>
						                      	<th>
						                        	Debt (Rp)
						                      	</th>
						                      	<th>
						                        	Ratio
						                      	</th>
						                      	<th>
						                        	Status
						                      	</th>
					                    	</thead>
				                    		<tbody>
												<tr>
													<td class="text-right">
														1728061
													</td>
													<td class="text-right">
														4425000
													</td>
													<td>
														256%
													</td>
													<td>
														Warning
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
			          		<div class="card">
			              		<div class="card-header">
			                		<h4 class="card-title">Solvency Ratio</h4>
			              		</div>
			              		<div class="card-body">
			                		<div class="table-responsive">
			                  			<table class="table">
			                    			<thead class=" text-primary">
						                      	<th>
						                        	Net Assets (Rp)
						                      	</th>
						                      	<th>
						                        	Total Assets (Rp)
						                      	</th>
						                      	<th>
						                        	Ratio
						                      	</th>
						                      	<th>
						                        	Status
						                      	</th>
					                    	</thead>
				                    		<tbody>
												<tr>
													<td class="text-right">
														-3980072
													</td>
													<td class="text-right">
														444928
													</td>
													<td>
														-895%
													</td>
													<td>
														Warning
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
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