<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!--author:starttemplate-->
<!--reference site : starttemplate.com-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords"
          content="unique login form,leamug login form,boostrap login form,responsive login form,free css html login form,download login form">
    <meta name="author" content="leamug">
    <title>LK Farming Assistant</title>
    <link href="css/style.css" rel="stylesheet" id="style">
    <!-- Bootstrap core Library -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <!-- Font Awesome-->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<style type="text/css" >
/*author:starttemplate*/
/*reference site : starttemplate.com*/
body {
  background-image:url('https://images.unsplash.com/photo-1586771107445-d3ca888129ff?ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8YWdyaWN1bHR1cmV8ZW58MHx8MHx8&ixlib=rb-1.2.1&w=1000&q=80');
  background-position:center;
  background-size:cover;
  
  -webkit-font-smoothing: Arial;
  font: normal 22px Roboto,arial,sans-serif;
  font-family: 'Dancing Script', cursive!important;
}

.container {
    padding: 75px;
}
::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
    color: #ffffff!important;
    opacity: 5; /* Firefox */
    font-size:25px!important;
}
.form-login {
    background-color: rgba(0,0,0,0.55);
    padding-top: 15px;
    padding-bottom: 10px;
    padding-left: 16px;
    padding-right: 20px;
    border-radius: 15px;
    border-color:#d2d2d2;
    border-width: 5px;
    color:white;
    box-shadow:0 1px 0 #cfcfcf;
}
.form-control{
    background:transparent!important;
    color:white!important;
    font-size: 18px!important;
}
h1{
    color:white!important;
}
h4 { 
 border:0 solid #fff; 
 border-bottom-width:5px;
 padding-bottom:10px;
 text-align: center;
}

.form-control {
    border-radius: 10px;
}
.text-white{
    color: white!important;
}
.wrapper {
    text-align: center;
}
.footer p{
    font-size: 50px;
}
</style>
<body>


<!-- Page Content -->
<form action="{{route('userlogin.post')}}" method="post">
                    @csrf
                    
<div class="container">
    <div class="row">
        <div class="col-md-offset-6 col-md-4 text-center">
            <h1 class='text-white'>Farmer Log In</h1>
              <div class="form-login"></br>
                <h2>Secure Login</h2>
                </br>
                @if(session()->has('message'))
                <span class="alert alert-danger">{{session()->get('message')}}</span>
            @endif
</br>
</br>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input  name="email" placeholder="Enter your email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                </br></br>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input  name="password" placeholder="Enter your password" type="password" class="form-control" id="exampleInputPassword1">
                </div>

                <div class="wrapper">
                        <span class="group-btn">
                        <button type="submit" class="btn btn-danger btn-md">login </button>
                        </span>
                </div>


               
                
            </div>
        </div>
    </div>
    </form>
    </br></br>
    <!--footer-->
    <div class="footer text-white text-center">
        <p>LK farming Assistant| All rights reserved</p>
    </div>
    <!--//footer-->
</div>
</body>
</html>









