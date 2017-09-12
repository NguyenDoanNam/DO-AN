@extends('admindeliver.master')
@section('content')
<div class="contaier-fluid mt-5">
	<div class="row">
		<div class="col-md-10 push-1">
			<div class="container mt-5 mb-3">
				<div id="choose" class="mb-3">
					<div class="btn-group">
						<button class="btn btn-outline-info">All</button>
						<button class="btn btn-outline-info">Delivered</button>
						<button class="btn btn-outline-info">Canceled</button>
					</div>
				</div>
				<table class="table table-hover">
				  	<thead>
				    	<tr>
						    <th class="text-center">#</th>
						    <th class="text-center">Code</th>
						    <th class="text-center">Pass</th>
						    <th class="text-center">Brand Name</th>
						    <th class="text-center">Address</th>
						    <th class="text-center">Booked At</th>
						    <th class="text-center">Status</th>
				    	</tr>
				  	</thead>
				  	<tbody>
					    <tr>
						    <th>1</th>
						    <td>A969</td>
						    <td>sdejg</td>
				      		<td>MH mobile</td>
						    <td>30/54 Đình Đông, Đông Hải, Lê Chân, Hải Phòng</td>
						    <td>2017-08-06-21:07</td>
						    <td>Canceled</td>
					    </tr>
				    	<tr>
				      		<th>2</th>
					      	<td>A2001</td>
					      	<td>bcdef</td>
					      	<td>BKAV</td>
					      	<td>18/210 Lạch Tray, Ngô Quyền, Hải Phòng</td>
						    <td>2017-08-08-08:07</td>
						    <td>Canceled</td>
				    	</tr>
					    <tr>
					     	<th>3</th>
					      	<td>A2002</td>
					      	<td>anrew</td>
					      	<td>Apple</td>
					      	<td>18/2/310 Đà Nẵng, Ngô Quyền, Quảng Ninh</td>
						    <td>2017-08-08-08:07</td>
						    <td>Delivered</td>
					    </tr>
					    <tr>
						    <th>4</th>
						    <td>A30001</td>
						    <td>fdvgr</td>
						    <td>Remmy</td>
						    <td>479 Phủ Thượng Đoạn, Hải An, Hải Phòng</td>
						    <td>2017-08-09-21:12</td>
						    <td>Delivered</td>
					    </tr>
				  	</tbody>
				</table>	
			</div>
		</div>
	</div>
</div>
@endsection