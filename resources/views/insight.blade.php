@extends('insight-layout')
<title>Insight</title>
@section('content')
  	<!-- Content Section -->  	
	<?php
		$totaldebt = '0';
		$debts = DB::select('SELECT * FROM debts');
		$debtratio = '0';
		$avgmonthincome = '7500000';
		$debtratiostatus = 'Good';
		$liquidasset = '444928';
		$totalasset = '0';

	?>
    @foreach($debts as $debt)
		<?php
			$amount = $debt->amount;
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
									<?php
										$netasset = $totalasset - $totaldebt;
									?>
									<p class="text-right">{{'Rp'.$netasset}}</p>
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
									<p class="text-right">{{'Rp'.$liquidasset}}</p>
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

										if ($debtratio < 20) {
											$debtratiostatus = 'Ideal';
										}
										elseif ($debtratio >= 20 && $debtratio <= 36) {
											$debtratiostatus = 'Good';
										}
										elseif ($debtratio >= 37 && $debtratio <= 42) {
											$debtratiostatus = 'Warning';
										}
										elseif ($debtratio >= 43 && $debtratio <= 49) {
											$debtratiostatus = 'Danger';
										}
										elseif ($debtratio >= 50) {
											$debtratiostatus = 'Catasthropic';
										}
									?>
									<p class="card-category">Debt Ratio</p>
									<p class="text-right">{{ceil($debtratio).'%'}}</p>
									<p class="card-category">{{$debtratiostatus}}</p>
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
