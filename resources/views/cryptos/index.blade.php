@extends('insight-layout')
<title>Crypto Balance</title>
@section('content')
  	<!-- Content Section -->
	<div class="content">
        <div class="row">
          	<div class="col-md-12">
	        	<h3>Investment - Crypto</h3>
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
                			<h4 class="card-title">Ethereum Statement</h4>
							<a href="/cryptos/create/" class="btn btn-primary ml-auto">
								<i class="fas fa-plus"></i>
							</a>
                		</div>
              		</div>
              		<div class="card-body">
                		<div class="table-responsive">
                  			<table class="table">
                    			<thead class=" text-primary">
			                      	<th class="text-center">
			                        	Date
			                      	</th>
		                      		<th class="text-center">
		                        		Balance
			                      	</th>
			                      	<th class="text-center">
			                        	Value
			                      	</th>
		                    	</thead>
	                    		<tbody>
							        @foreach($cryptos as $crypto)
							        <tr>
							            <td class="text-center">{{$crypto->date}}</td>
							            <td class="text-center">{{'ETH '.$crypto->balance}}</td>
							            <td class="text-center">{{'Rp.'.$crypto->value}}</td>
							            <td class="text-right">
						            		<a href="{{ route('cryptos.edit',$crypto->id)}}">
							            		<button class="btn btn-primary">
							            			<i class="far fa-edit"></i>
							            		</button>
						            		</a>
						            	</td>
							            <td class="text-left>
							                <form action="{{ route('cryptos.destroy', $crypto->id)}}" method="post" style="margin-bottom: 0 !important">
							                  	@csrf
							                  	@method('DELETE')
							                  	<button class="btn btn-danger" type="submit">
							                  		<i class="far fa-trash-alt"></i>
							                  	</button>
							                </form>
							            </td>
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
                		<h4 class="card-title">Ethereum Stats</h4>
              		</div>
              		<div class="card-body">
                		<div class="table-responsive">
                  			<table class="table">
                    			<thead class=" text-primary">
			                      	<th class="text-center">
			                        	ETH to Rupiah
			                      	</th>
			                      	<th class="text-center">
			                        	Total ETH Value to Rupiah
			                      	</th>
		                    	</thead>
	                    		<tbody>
									<tr>
										<td class="text-center">
											{{'Rp.'.$balancecrypto}}
										</td>
										<td class="text-center">
											{{'Rp.'.$valuecrypto}}
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
                		<h4 class="card-title">Crypto Summary</h4>
              		</div>
              		<div class="card-body">
                		<div class="table-responsive">
                  			<table class="table">
                    			<thead class=" text-primary">
			                      	<th class="text-center">
			                        	Total ETH Balance
			                      	</th>
			                      	<th class="text-center">
			                        	Total ETH Value
			                      	</th>
		                    	</thead>
	                    		<tbody>
									<tr>
										<td class="text-center">
											{{'ETH '.$balancecrypto}}
										</td>
										<td class="text-center">
											{{'Rp.'.$valuecrypto}}
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