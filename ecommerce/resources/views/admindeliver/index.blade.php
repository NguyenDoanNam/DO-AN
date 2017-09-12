@extends('admindeliver.master')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-5 push-1">
				<table class="mt-5 mb-5 table table-responsive">
					<tbody>
						<tr>
							<td class="p-4">
								<a href="{!! route('manage') !!}">
	  								<div class="card p-3">
	  									<div class="d-flex justify-content-center">
								    		<img class="card-img-top img-fluid" src="{!!asset('ec/template/images/delivery.png')!!}" alt="Card image cap">
								    	</div>
								    	<div class="card-body d-flex justify-content-center">
								      		<h4 class="card-title text-center mt-2 btn btn-outline-info">Manage Orders</h4>
								    	</div>
									</div>
						    	</a>
							</td>
							<td class="p-4">
								<a href="{!! route('statistic') !!}" >
  								<div class="card p-3" style="width: 185px">
  									<div class="d-flex justify-content-center">
							    		<img class="card-img-top img-fluid" src="{!!asset('ec/template/images/Statistics.png')!!}" alt="Card image cap">
							    	</div> 	
							    	<div class="card-body d-flex justify-content-center">
							      		<h4 class="card-title text-center mt-2 btn-outline-info btn">Statistics</h4>
							    	</div>
								</div>
						    </a>
							</td>
						</tr>
						<tr>
							<td class="p-4" colspan="2">
								<a href="#">
  								<div class="card p-3">
  									<div class="d-flex justify-content-center">
							    		<img class="card-img-top img-fluid" src="{!!asset('ec/template/images/account.png')!!}" alt="Card image cap">
							    	</div>
							    	<div class="card-body d-flex justify-content-center">
							      		<a href="{!! route('accounts') !!}" class="card-title text-center mt-2 btn btn-outline-info">Manage Account</a>
							    	</div>
								</div>
						    </a>
							</td>
						</tr>
					</tbody>
				</table>			
		</div><!--Menu left-->
		<div class="col-md-1 push-2 mt-5">
			<img src="{!!asset('ec/template/images/total.png')!!}" class="mt-5" width="100px">
		</div>
		<div class="col-md-3 push-2 mt-5">
			<ul class="mt-5">
				<li>News orders:</li>
				<li>Inventory: </li>
				<li>Cancellation: </li>
			</ul>
		</div>
	</div>
</div>
@endsection