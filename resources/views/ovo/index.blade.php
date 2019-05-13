@extends('insight-layout')
<title>OVO Balance</title>
@section('content')
  	<!-- Content Section -->
	<div class="content">
        <div class="row">
          	<div class="col-md-12">
	        	<h3>Assets - OVO</h3>
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
            			<h4 class="card-title">OVO Statement</h4>
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
							        @foreach($ovos as $ovo)
							        <tr>
							            <td>{{$ovo->date}}</td>
							            <td>{{$ovo->description}}</td>
							            <td class="text-right">{{'Rp'.$ovo->credit}}</td>
							            <td class="text-right">{{'Rp'.$ovo->debit}}</td>
							        </tr>
							        @endforeach
		                    	</tbody>
	                  		</table>
	                    	<div class="d-flex">
								<a href="/ovo/create/" class="btn btn-primary ml-auto">
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
                		<h4 class="card-title">OVO Summary</h4>
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
											{{'Rp.'.$creditovo}}
										</td>
										<td class="text-center">
											{{'Rp.'.$debitovo}}
										</td>
										<td class="text-center">
											{{'Rp.'.$balanceovo}}
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