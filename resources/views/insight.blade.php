@extends('insight-layout')
<title>Insight</title>
@section('content')
  	<!-- Content Section -->
	<div class="content">
        <div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
        		<h3>Insight</h3>
			</div>
        </div>
        <div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
        		<h5>Ratio</h5>
			</div>
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
									<p class="card-category">Liquidity</p>
									<p class="text-right">{{round($liquidityratio).'%'}}</p>
									<p class="card-category">{{$liqratiostatus}}</p>
									<br/>
									<br/>
			        			</div>
			      			</div>
			    		</div>
			    		<div class="row">
			      			<div class="col-12 col-md-12">
								<p class="card-category">{{'You have liquid assets to meet your household expenses for '.round($daytoliquid).' days.'}}</p>
								<strong><p>{{'Suggestion: '. $liqsuggest}}</p></strong>
							</div>
			    		</div>
			  		</div>
			  		<div class="card-footer ">
			    		<hr>
			    		<div class="stats">
			      			<i class="fas fa-info-circle"></i> What's this?
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
									<p class="card-category">Debt to Income</p>
									<p class="text-right">{{ceil($debtratio).'%'}}</p>
									<p class="card-category">{{$debtratiostatus}}</p>
			        			</div>
			      			</div>
			    		</div>
			  		</div>
			  		<div class="card-footer ">
			    		<hr>
			    		<div class="stats">
			      			<i class="fas fa-info-circle"></i> What's this?
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
									<p class="card-category">Solvency</p>
									<p class="text-right">{{ceil($solvencyratio).'%'}}</p>
									<p class="card-category">{{$solvencyratiostatus}}</p>
									<br/>
									<br/>
			        			</div>
			      			</div>
			    		</div>
			    		<div class="row">
			      			<div class="col-12 col-md-12">			      				
								<p class="card-category">{{"You ".$srsdesc." using your current assets."}}</p>
								<strong><p>{{'Suggestion: '. $srsuggest}}</p></strong>
							</div>
			    		</div>
			  		</div>
			  		<div class="card-footer ">
			    		<hr>
			    		<div class="stats">
			      			<i class="fas fa-info-circle"></i> What's this?
			    		</div>
			  		</div>
				</div>
			</div>
        </div>
        <div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
        		<h5>Asset and Debt</h5>
			</div>
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
									<p class="card-category">Liquid Asset</p>
									<p class="text-right">{{'Rp'.$getliquidasset}}</p>
			        			</div>
			      			</div>
			    		</div>
			  		</div>
			  		<div class="card-footer ">
			    		<hr>
			    		<div class="stats">
			      			<i class="fas fa-info-circle"></i> What's this?
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
									<p class="text-right">{{'Rp'.(number_format((float)$gettotalasset, 2, '.', ''))}}</p>
			        			</div>
			      			</div>
			    		</div>
			  		</div>
			  		<div class="card-footer ">
			    		<hr>
			    		<div class="stats">
			      			<i class="fas fa-info-circle"></i> What's this?
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
									<p class="text-right">{{'Rp'.(number_format((float)$netasset, 2, '.', ''))}}</p>
			        			</div>
			      			</div>
			    		</div>
			  		</div>
			  		<div class="card-footer ">
			    		<hr>
			    		<div class="stats">
			      			<i class="fas fa-info-circle"></i> What's this?
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
									<p class="text-right">{{'Rp'.$remainingdebt}}</p>
			        			</div>
			      			</div>
			    		</div>
			  		</div>
			  		<div class="card-footer ">
			    		<hr>
			    		<div class="stats">
			      			<i class="fas fa-info-circle"></i> What's this?
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
									<p class="text-right">{{'Rp5500000'}}</p>
			        			</div>
			      			</div>
			    		</div>
			  		</div>
			  		<div class="card-footer ">
			    		<hr>
			    		<div class="stats">
			      			<i class="fas fa-info-circle"></i> What's this?
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
									<p class="text-right">{{'Rp1836168'}}</p>
			        			</div>
			      			</div>
			    		</div>
			  		</div>
			  		<div class="card-footer ">
			    		<hr>
			    		<div class="stats">
			      			<i class="fas fa-info-circle"></i> What's this?
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
