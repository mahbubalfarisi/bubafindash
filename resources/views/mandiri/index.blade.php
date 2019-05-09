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
          	<div class="col-md-12">
            	<div class="card">
				 	@if(session()->get('success'))
				    	<div class="alert alert-success alert-block">
					  		<button type="button" class="close" data-dismiss="alert">×</button>
				      		{{ session()->get('success') }}  
				    	</div>
				  	@endif
              		<div class="card-header">
            			<h4 class="card-title">Mandiri Statement</h4>
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
							        @foreach($mandiris as $mandiri)
							        <tr>
							            <td>{{$mandiri->date}}</td>
							            <td>{{$mandiri->description}}</td>
							            <td class="text-right">{{'Rp'.$mandiri->credit}}</td>
							            <td class="text-right">{{'Rp'.$mandiri->debit}}</td>
							            <td class="text-right">
						            		<a href="{{ route('mandiri.edit',$mandiri->id)}}">
							            		<button class="btn btn-primary">
							            			<i class="far fa-edit"></i>
							            		</button>
						            		</a>
							            </td>
							            <td class="text-center">
							                <form action="{{ route('mandiri.destroy', $mandiri->id)}}" method="post" style="margin-bottom: 0 !important">
							                  	@csrf
							                  	@method('DELETE')
							                  	<button class="btn btn-success" type="submit">
							                  		<i class="fas fa-check"></i>
							                  	</button>
							                </form>
							            </td>
							        </tr>
							        @endforeach
		                    	</tbody>
	                  		</table>
	                    	<div class="d-flex">
								<a href="/mandiri/create/" class="btn btn-primary ml-auto">
									<i class="fas fa-plus"></i>
								</a>
	                		</div>
	                	</div>
              		</div>
            	</div>
          	</div>
          	<div class="col-md-12">
          		<div class="card">
              		<div class="card-header">
                		<h4 class="card-title">Mandiri Summary</h4>
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