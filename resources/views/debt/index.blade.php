@extends('insight-layout')
<title>Debt</title>
@section('content')
  	<!-- Content Section -->
	<div class="content">
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
                  		<div class="d-flex">
                			<h4 class="card-title">Debt Statement</h4>
							<a href="/debts/create/" class="btn btn-primary ml-auto">
								<i class="fas fa-plus"></i>
							</a>
                		</div>
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
							        @foreach($debts as $debt)
							        <tr>
							            <td>{{$debt->purpose}}</td>
							            <td>{{$debt->creditor}}</td>
							            <td class="text-right">{{$debt->amount}}</td>
							            <td class="text-right">{{$debt->remaining}}</td>
							            <td>
						            		<a href="{{ route('debts.edit',$debt->id)}}">
							            		<button class="btn btn-primary">
							            			<i class="far fa-edit"></i>
							            		</button>
						            		</a>
							            </td>
							            <td>
							                <form action="{{ route('debts.destroy', $debt->id)}}" method="post" style="margin-bottom: 0 !important">
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
	                  		</table><br/>
	                	</div>
              		</div>
            	</div>
          	</div>
          	<div class="col-md-5">
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
@endsection