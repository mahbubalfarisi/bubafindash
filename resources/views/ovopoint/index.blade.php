@extends('insight-layout')
<title>OVO Points Balance</title>
@section('content')
  	<!-- Content Section -->
	<div class="content">
        <div class="row">
          	<div class="col-md-12">
	        	<h3>Assets - OVO Points</h3>
	        </div>
        </div>
        <div class="row">
          	<div class="col-md-7">
            	<div class="card">
				 	@if(session()->get('success'))
				    	<div class="alert alert-success alert-block">
					  		<button type="button" class="close" data-dismiss="alert">×</button>
				      		{{ session()->get('success') }}  
				    	</div>
				  	@endif
              		<div class="card-header">
            			<h4 class="card-title">OVO Points Statement</h4>
              		</div>
              		<div class="card-body">
                		<div class="table-responsive">
                  			<table class="table">
                    			<thead class=" text-primary">
			                      	<th class="text-center">
			                        	Date
			                      	</th>
		                      		<th class="text-center">
		                        		Description
		                      		</th>
		                      		<th class="text-center">
		                        		Credit
			                      	</th>
			                      	<th class="text-center">
			                        	Debit
			                      	</th>
		                    	</thead>
	                    		<tbody>
							        @foreach($ovopoints as $ovop)
							        <tr>
							            <td>{{$ovop->date}}</td>
							            <td>{{$ovop->description}}</td>
							            <td class="text-right">{{'Rp'.$ovop->credit}}</td>
							            <td class="text-right">{{'Rp'.$ovop->debit}}</td>
							        </tr>
							        @endforeach
		                    	</tbody>
	                  		</table>
	                    	<div class="d-flex">
								<a href="/ovopoint/create/" class="btn btn-primary ml-auto">
									<i class="fas fa-plus"></i>
								</a>
	                		</div>
	                	</div>
              		</div>
            	</div>
          	</div>
          	<div class="col-md-4" style="position: fixed; top: 11em; right: 1em;">
          		<div class="card">
              		<div class="card-header">
                		<h4 class="card-title">OVO Points Summary</h4>
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
											{{'Rp.'.$creditovop}}
										</td>
										<td class="text-center">
											{{'Rp.'.$debitovop}}
										</td>
										<td class="text-center">
											{{'Rp.'.$balanceovop}}
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