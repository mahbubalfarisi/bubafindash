@extends('insight-layout')
<title>Insight</title>
@section('content')
  	<!-- Content Section -->  	
	<?php
		$totaldebt = '0';
		$debts = DB::select('SELECT * FROM debts');
		$debtratio = '0';
		$avgmonthincome = '5500000';
	?>
    @foreach($debts as $debt)
		<?php
			$amount = $debt->amount;
		?>
		<?php
			$totaldebt = $totaldebt + $debt->amount;
		?>
    @endforeach
	<div class="content">
        <div class="row">
        	<h3>Insight</h3>
        </div>
        <div class="row">
        	<h5>Status</h5>
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
									<p class="card-category">Debt Status</p>
									<p class="text-right">{{'Rp'.$totaldebt}}</p>
			        			</div>
			      			</div>
			    		</div>
			  		</div>
			  		<div class="card-footer ">
			    		<hr>
			    		<div class="stats">
			      			<i class="fas fa-calendar-day"></i> Last day
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
			          				<i class="fas fa-wallet"></i>
			        			</div>
			      			</div>
			      			<div class="col-7 col-md-8">
			        			<div class="numbers">
									<p class="card-category">Solvency Status</p>
									<p class="text-right">{{'Rp'.$totaldebt}}</p>
			        			</div>
			      			</div>
			    		</div>
			  		</div>
			  		<div class="card-footer ">
			    		<hr>
			    		<div class="stats">
			      			<i class="fas fa-calendar-day"></i> Last day
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
			          				<i class="fas fa-wallet"></i>
			        			</div>
			      			</div>
			      			<div class="col-7 col-md-8">
			        			<div class="numbers">
									<p class="card-category">Daily Expenditure Status</p>
									<p class="text-right">{{'Rp'.$totaldebt}}</p>
			        			</div>
			      			</div>
			    		</div>
			  		</div>
			  		<div class="card-footer ">
			    		<hr>
			    		<div class="stats">
			      			<i class="fas fa-calendar-day"></i> Last day
			    		</div>
			  		</div>
				</div>
			</div>
		</div>
        <div class="row">
        	<h5>Asset and Debt</h5>
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
									<p class="card-category">Liquid Balance</p>
									<p class="text-right">{{'Rp'.$totaldebt}}</p>
			        			</div>
			      			</div>
			    		</div>
			  		</div>
			  		<div class="card-footer ">
			    		<hr>
			    		<div class="stats">
			      			<i class="fas fa-calendar-day"></i> Last day
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
									<p class="text-right">{{'Rp'.$totaldebt}}</p>
			        			</div>
			      			</div>
			    		</div>
			  		</div>
			  		<div class="card-footer ">
			    		<hr>
			    		<div class="stats">
			      			<i class="fas fa-calendar-day"></i> Last day
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
									<p class="text-right">{{'Rp'.$totaldebt}}</p>
			        			</div>
			      			</div>
			    		</div>
			  		</div>
			  		<div class="card-footer ">
			    		<hr>
			    		<div class="stats">
			      			<i class="fas fa-calendar-day"></i> Last day
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
									<p class="text-right">{{'Rp'.$totaldebt}}</p>
			        			</div>
			      			</div>
			    		</div>
			  		</div>
			  		<div class="card-footer ">
			    		<hr>
			    		<div class="stats">
	          				<i class="fas fa-calendar-day"></i> Last day
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
									<p class="card-category">Liquidity - Remaining Day</p>
									<p class="text-right">{{'Rp'.$totaldebt}}</p>
			        			</div>
			      			</div>
			    		</div>
			  		</div>
			  		<div class="card-footer ">
			    		<hr>
			    		<div class="stats">
			      			<i class="fas fa-calendar-day"></i> Last day
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
									<p class="text-right">{{'Rp1728061'}}</p>
			        			</div>
			      			</div>
			    		</div>
			  		</div>
			  		<div class="card-footer ">
			    		<hr>
			    		<div class="stats">
			      			<i class="fas fa-calendar-day"></i> Last day
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
			      			<i class="fas fa-calendar-day"></i> Last day
			    		</div>
			  		</div>
				</div>
			</div>
        </div>
        <div class="row">
        	<h5>Ratio</h5>
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
									<p class="card-category">Liquidity Ratio</p>
									<p class="text-right">{{'Rp'.$totaldebt}}</p>
			        			</div>
			      			</div>
			    		</div>
			  		</div>
			  		<div class="card-footer ">
			    		<hr>
			    		<div class="stats">
			      			<i class="fas fa-calendar-day"></i> Last day
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
								    <?php
										$debtratio = $totaldebt / $avgmonthincome * 100;
									?>
									<p class="card-category">Debt Ratio</p>
									<p class="text-right">{{number_format($debtratio, 4).'%'}}</p>
			        			</div>
			      			</div>
			    		</div>
			  		</div>
			  		<div class="card-footer ">
			    		<hr>
			    		<div class="stats">
			      			<i class="fas fa-calendar-day"></i> Last day
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
									<p class="card-category">Solvency Ratio</p>
									<p class="text-right">{{'Rp'.$totaldebt}}</p>
			        			</div>
			      			</div>
			    		</div>
			  		</div>
			  		<div class="card-footer ">
			    		<hr>
			    		<div class="stats">
			      			<<i class="fas fa-calendar-day"></i> Last day
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
