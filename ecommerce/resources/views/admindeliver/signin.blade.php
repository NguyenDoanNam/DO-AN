<!-- <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sign-In 6th August</title>

    <link href="{!!asset('ec/template/css/bootstrap.min.css')!!}" rel="stylesheet">
    <link href="{!!asset('ec/template/css/signin.css')!!}" rel="stylesheet">
  </head>
  <body> -->
@extends('admindeliver.master')
@section('content')
<link href="{!!asset('ec/template/css/signin.css')!!}" rel="stylesheet">
    <div class="container">
      <form class="form-signin" action="" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        @if(session('error_login'))
          <div class="alert alert-danger text-center">
            {{session('error_login')}}
          </div>
        @endif
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" name="txtemail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name="txtpassword" class="form-control" placeholder="Password" required>
        
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

    </div> 
  </body>
</html>
@endsection
