@extends('admindeliver.master')
@section('content')
<div class="container-fluid mt-5">
	<div class="row">
		<div class="col-md-6 push-3 mt-5">
			<div class="container mt-4 push-3">
				<div id="personal">
					<h3 class="m-0">Personal Information</h3>	
					<img src="{!!asset('ec/template/images/icon/png/user.png')!!}" alt="">
					<p>{!! Auth::user()->first_name !!} {!! Auth::user()->last_name !!}</p>
					<img src="{!!asset('ec/template/images/icon/png/mail.png')!!}" alt="">
					<p>{!! Auth::user()->email !!}</p>
					<button class="btn btn-outline-info" data-toggle="modal" data-target="#myModal">Change E-mail</button>
					<button class="btn btn-outline-info" data-toggle="modal" data-target="#myModal">Change Password</button>
				</div>
				<div id="popup">
					<!-- Modal -->
					<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="myModalLabel">Modal title</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					        <form>
							  <div class="form-group row">
							    <label for="staticEmail" class="col-md 4 col-form-label">Current Email</label>
							    <div class="col-md-8 pull-1">
							      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{!! Auth::user()->email !!}">
							    </div>
							  </div>
							  <div class="form-group row">
							    <label for="inputEmail" class="col-md-4 col-form-label">New Email</label>
							    <div class="col-md-8 pull-1">
							      <input type="email" class="form-control" id="inputEmail">
							    </div>
							  </div>
							</form>
							<form>
							  <div class="form-group row">
							    <label for="inputEmail" class="col-md-4 col-form-label">Current Pwd</label>
							    <div class="col-md-8 pull-1">
							      <input type="Password" class="form-control" id="inputEmail">
							    </div>
							  </div>
							  <div class="form-group row">
							    <label for="inputEmail" class="col-md-4 col-form-label">New Pwd</label>
							    <div class="col-md-8 pull-1">
							      <input type="Password" class="form-control" id="inputEmail">
							    </div>
							  </div>
							  <div class="form-group row">
							    <label for="inputEmail" class="col-md-4 col-form-label">Re-type Pwd</label>
							    <div class="col-md-8 pull-1">
							      <input type="Password" class="form-control" id="inputEmail">
							    </div>
							  </div>
							</form>

					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					        <button type="button" class="btn btn-primary">Save</button>
					      </div>
					    </div>
					  </div>
					</div>
				</div>
			</div>
		</div>
	</div>  
</div>
@endsection