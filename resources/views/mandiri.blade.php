@extends('insight-layout')
<title>Mandiri Balance</title>
@section('content')
  	<!-- Content Section -->
	<div class="content">
        <div class="row">
          	<div class="col-md-12">
	        	<h3>Assets - Mandiri</h3>
	        </div>
        </div>
        <div class="row">
          	<div class="col-md-8">
            	<div class="card">
              		<div class="card-header">
                		<h4 class="card-title">Mandiri Balance</h4>
              		</div>
              		<div class="card-body">
                		<div class="table-responsive">
                  			<table class="table">
                    			<thead class=" text-primary">
			                      	<th>
			                        	Date
			                      	</th>
		                      		<th>
		                        		Description
		                      		</th>
		                      		<th class="text-right">
		                        		Credit
			                      	</th>
			                      	<th class="text-right">
			                        	Debit
			                      	</th>
			                      	<th class="text-right">
			                        	Balance
			                      	</th>
		                    	</thead>
	                    		<tbody>
									<tr>
										<td>
											04/28/2019
										</td>
										<td>
											Deposit from Ibu & Mbah
										</td>
										<td class="text-right">
											200000
										</td>
										<td class="text-right">
											-
										</td>
										<td class="text-right">
											200000
										</td>
									</tr>
									<tr>
										<td>
											04/28/2019
										</td>
										<td>
											Withdrawal
										</td>
										<td class="text-right">
											-
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
											04/30/2019
										</td>
										<td>
											Payroll
										</td>
										<td class="text-right">
											3000000
										</td>
										<td class="text-right">
											-
										</td>
										<td class="text-right">
											3100000
										</td>
									</tr>
		                    	</tbody>
	                  		</table>
	                	</div>
              		</div>
            	</div>
          	</div>
          	<div class="col-md-4">
          		<div class="card">
              		<div class="card-header">
                		<h4 class="card-title">Asset Summary</h4>
              		</div>
              		<div class="card-body">
                		<div class="table-responsive">
                  			<table class="table">
                    			<thead class=" text-primary">
			                      	<th>
			                        	April Income (Rp)
			                      	</th>
			                      	<th>
			                        	April Expenditure (Rp)
			                      	</th>
			                      	<th>
			                        	April Balance (Rp)
			                      	</th>
		                    	</thead>
	                    		<tbody>
									<tr>
										<td class="text-right">
											3200000
										</td>
										<td class="text-right">
											100000
										</td>
										<td class="text-right">
											3100000
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
@endsection