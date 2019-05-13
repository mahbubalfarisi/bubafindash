@extends('insight-layout')
<title>Cash Balance</title>
@section('content')
  	<!-- Content Section -->
	<div class="content">
        <div class="row">
          	<div class="col-md-12">
	        	<h3>Assets - Cash</h3>
	        </div>
        </div>
        <div class="row">
          	<div class="col-md-8">
            	<div class="card">
				 	@if(session()->get('success'))
				    	<div class="alert alert-success alert-block">
					  		<button type="button" class="close" data-dismiss="alert">×</button>
				      		{{ session()->get('success') }}  
				    	</div>
				  	@endif
              		<div class="card-header">
                  		<div class="d-flex">
                			<h4 class="card-title">Cash Statement</h4>
							<a href="/cashes/create/" class="btn btn-primary ml-auto">
								<i class="fas fa-plus"></i>
							</a>
                		</div>
              		</div>
              		<div class="card-body">
                		<div class="table-responsive">
                  			<table class="table">
                    			<thead class=" text-primary">
                    				<tr class="d-flex">
				                      	<th class="text-center col-2">
				                        	Date
				                      	</th>
			                      		<th class="text-center col-6">
			                        		Description
			                      		</th>
			                      		<th class="text-center col-2">
			                        		Credit
				                      	</th>
				                      	<th class="text-center col-2">
				                        	Debit
				                      	</th>
			                      	</tr>
		                    	</thead>
	                    		<tbody>
							        @foreach($cashes as $cash)
							        <tr class="d-flex">
							            <td class="text-center col-2">{{$cash->date}}</td>
							            <td class="text-left col-6">{{$cash->description}}</td>
							            <td class="text-right col-2">{{'Rp'.$cash->credit}}</td>
							            <td class="text-right col-2">{{'Rp'.$cash->debit}}</td>
							        </tr>
							        @endforeach
		                    	</tbody>
	                  		</table>
	                	</div>
              		</div>
            	</div>
          	</div>
          	<div class="col-md-4">
          		<div class="card">
              		<div class="card-header">
                		<h4 class="card-title">Cash Summary</h4>
              		</div>
              		<div class="card-body">
                		<div class="table-responsive">
                  			<table class="table">
                    			<thead class=" text-primary">
			                      	<th class="text-center">
			                        	Total Credit
			                      	</th>
			                      	<th class="text-center">
			                        	Total Debit
			                      	</th>
			                      	<th class="text-center">
			                        	Balance
			                      	</th>
		                    	</thead>
	                    		<tbody>
									<tr>
										<td class="text-center">
											{{'Rp.'.$creditcash}}
										</td>
										<td class="text-center">
											{{'Rp.'.$debitcash}}
										</td>
										<td class="text-center">
											{{'Rp.'.$balancecash}}
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