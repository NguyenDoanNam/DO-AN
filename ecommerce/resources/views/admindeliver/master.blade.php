<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin panel</title>
	<link rel="stylesheet" href="{!!asset('ec/template/css/bootstrap.min.css')!!}">
</head>
<body>
	<div class="bg-faded fixed-top">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-9 push-1"">
					<nav class="navbar navbar-light navbar-toggleable">
					<a class="navbar-brand" href="{!! route('index') !!}">
						<p class="m-0">January 6</p>
					</a>
					@if(!isset($a))
					<ul class="nav navbar-nav">
						<li class="nav-item">
							<a class="nav-link" href="{!! route('manage') !!}">Manage Orders</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{!! route('statistic') !!}">Statistics</a>
						</li>
					</ul>
					@endif
					<!-- <form class="form-inline my-2 my-lg-0 ml-1">
					    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" disabled>
					    <button class="btn btn-outline-info my-2 my-sm-0" type="submit" disabled>Search</button>
					</form> -->
					</nav>
				</div>
				@if(!isset($a))
				<div class="col-md-3 my-auto">
					<div class="dropdown d-inline-block">
						<div class="btn btn-outline-light dropdown-toggle" data-toggle="dropdown" style="cursor: pointer;">
							
								{!! Auth::user()->first_name !!} {!! Auth::user()->last_name !!}
							
						</div>
						<div class="dropdown-menu">
							<a href="{!! route('accounts') !!}" class="btn-outline-secondary dropdown-item">Manage Account</a>
							<a class="btn-outline-secondary dropdown-item" href="{!! url('deliver/logout') !!}">Log Out <img src="{!!asset('ec/template/images/icon/png/log-out.png')!!}" alt="log-out"></a>
						</div>
					</div>
				</div>
				@endif
			</div>
		</div><!--Het container -->
	</div><!--Het Header-->

	<div id="body" class="mt-5">
		@yield('content')
	</div><!--Het body-->


	<div id="footer" class="fixed-bottom">
		<div class="container-fluid bg-faded pb-3">
			<div class="row">
				<div class="container">
					<div class="d-flex justify-content-center">
					<p class="m-0 p-3">Copyright © 2017 by H2N Company</p>
					</div>
					<div class="d-flex justify-content-center">
						<a href="#">	
							<img src="{!!asset('ec/template/images/social/png/facebook.png')!!}" class="m-2">
						</a>
						<a href="#">
							<img src="{!!asset('ec/template/images/social/png/instagram.png')!!}" class="m-2">
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="{!!asset('ec/template/js/jquery-3.2.1.min.js')!!}"></script>
	<script src="{!!asset('ec/template/js/tether.min.js')!!}"></script>
	<script src="{!!asset('ec/template/js/bootstrap.min.js')!!}"></script>
</body>
</html>