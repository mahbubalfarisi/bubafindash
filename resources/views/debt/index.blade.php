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
		                        		Amount
			                      	</th>
			                      	<th class="text-right">
			                        	Remaining
			                      	</th>
		                    	</thead>
	                    		<tbody>
	                    			<?php
	                    				$totalamount = '0';
	                    				$totalremaining = '0';
                    				?>
							        @foreach($debts as $debt)
	                    			<!-- Amount Formatter -->
	                    			<?php
	                    				$amount = $debt->amount;
	                    				if (strlen($amount) < 4) {
	                    					$amount = mb_substr($debt->amount, -3);
	                    				}
	                    				else if (strlen($amount) > 3 && strlen($amount) < 7) {
	                    					$amount = '.'.mb_substr($debt->amount, -6, -3).'.'.mb_substr($debt->amount, -3);
	                    				}
	                    				else if (strlen($amount) > 6 && strlen($amount) < 10) {
	                    					$amount = '.'.mb_substr($debt->amount, -9, -6).'.'.mb_substr($debt->amount, -6, -3).'.'.mb_substr($debt->amount, -3);
	                    				}
	                    			?>
	                    			<!-- Remaining Formatter -->
	                    			<?php
	                    				$remaining = $debt->remaining;
	                    				if (strlen($remaining) < 4) {
	                    					$remaining = mb_substr($debt->remaining, -3);
	                    				}
	                    				else if (strlen($remaining) > 3 && strlen($remaining) < 7) {
	                    					$remaining = '.'.mb_substr($debt->remaining, -6, -3).'.'.mb_substr($debt->remaining, -3);
	                    				}
	                    				else if (strlen($remaining) > 6 && strlen($remaining) < 10) {
	                    					$remaining = '.'.mb_substr($debt->remaining, -9, -6).'.'.mb_substr($debt->remaining, -6, -3).'.'.mb_substr($debt->remaining, -3);
	                    				}
	                    			?>
	                    			<?php
	                    				$totalamount = $totalamount + $debt->amount;
	                    				$totalremaining = $totalremaining + $debt->remaining;
	                    			?>
							        <tr>
							            <td>{{$debt->purpose}}</td>
							            <td>{{$debt->creditor}}</td>
							            <td class="text-right">{{'Rp'.$amount}}</td>
							            <td class="text-right">{{'Rp'.$remaining}}</td>
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
		                    	<tfoot>
			                      	<th></th>
		                      		<th>
		                        		Total
		                      		</th>
		                      		<th class="text-right">
		                      			{{'Rp'.$totalamount}}
			                      	</th>
			                      	<th class="text-right">
		                      			{{'Rp'.$totalremaining}}
			                      	</th>
		                    	</tfoot>
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
			                      	<th class="text-center">
			                        	Debt Amount (Rp)
			                      	</th>
			                      	<th class="text-center">
			                        	Remaining Debt (Rp)
			                      	</th>
		                    	</thead>
	                    		<tbody>
									<tr>
										<td class="text-center">
		                      				{{'Rp'.$totalamount}}
										</td>
										<td class="text-center">
		                      				{{'Rp'.$totalremaining}}
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