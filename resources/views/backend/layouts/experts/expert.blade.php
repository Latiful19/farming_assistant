@extends('backend.master')
@section('content')



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>


body {
	color: #fff;
	background: #3598dc;
	font-family: 'Roboto', sans-serif;
}
.form-control {
	min-height: 41px;
	box-shadow: none;
	border-color: #ddd;
}
.form-control, .btn {        
	border-radius: 3px;
}
.signup-form {
	width: 425px;
	margin: 0 auto;
	padding: 30px 0;
}
.signup-form form {
	color: #999;
	border-radius: 3px;
	margin-bottom: 15px;
	background: #fff;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	padding: 30px;
}
.signup-form h2 {
	color: #333;
	font-weight: bold;
	margin-top: 0;
}
.signup-form hr {
	margin: 0 -30px 20px;
}
.signup-form .form-group {
	margin-bottom: 20px;
}
.signup-form label {
	font-weight: normal;
	font-size: 14px;
}
.signup-form input[type="checkbox"] {
	margin-top: 6px;
}    
.signup-form .btn {        
	font-size: 16px;
	font-weight: bold;
	background: #3598dc;
	border: none;
	min-width: 140px;
}
.signup-form .btn:hover, .signup-form .btn:active {
	background: #2389cd;
	outline: none !important;
}
.signup-form a {
	color: #fff;
	text-decoration: underline;
}
.signup-form a:hover {
	text-decoration: none;
}
.signup-form form a {
	color: #3598dc;
	text-decoration: none;
}
.signup-form form a:hover {
	text-decoration: underline;
}
</style>
</head>

<body>
<div class="signup-form">
    <form action="{{route('post.experts')}}" method="post">
    @csrf 
		<h2>Create an Expert Account</h2>
		<p>Please fill in this form to add an expert!</p>
        @if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif

@if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
		<hr>
        <div class="form-group">
			<label>Full Name</label>
        	<input type="text" class="form-control" name="fullname" required="required">
        </div>

		<div class="form-group col-md-4">
         <label for="name">Designation</label>
        <select id="inputState" class="form-control" name="username" id="name">
        <option selected>Select</option>
        <option>Veterinarian</option>
        <option>Agrologist</option>
        </select>
    </div>

        <div class="form-group">
			<label>Email Address</label>
        	<input type="email" class="form-control" name="email" required="required">
        </div>
        <div class="form-group">
			<label>Mobile_No</label>
            <input type="text" class="form-control" name="mobile_no" required="required">
        </div>
        <div class="form-group">
			<label>Address</label>
            <input type="text" class="form-control" name="address" required="required">
        </div>
		<div class="form-group">
			<label>Password</label>
            <input type="password" class="form-control" name="password" required="required">
        </div>
		<div class="form-group">
			<label>Confirm Password</label>
            <input type="password" class="form-control" name="password_confirmation" required="required">
        </div>
		<div class="form-group form-check">
			<input type="checkbox" class="form-check-input" required="required">
			<label class="form-check-label">Are you sure? <a href="#">About this expert's</a> &amp; <a href="#">Information.</a></label>
		</div>
		<div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg">Add this expert</button>
        </div>
    </form>
	
</div>
</body>
</html>

@endsection