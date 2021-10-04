<!DOCTYPE html>
<html lang="en">

<head>
  
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>LK Farming Assistant </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="{{url('backend/css/feather.css')}}">
  <link rel="stylesheet" href="{{url('backend/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{url('backend/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{url('backend/css/typicons.css')}}">
  <link rel="stylesheet" href="{{url('backend/css/simple-line-icons.css')}}">
  <link rel="stylesheet" href="{{url('backend/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{url('backend/css/dataTables.bootstrap4.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('backend/css/select.dataTables.min.css')}}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{url('backend/css//style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.png" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>






<body>
  <div class="container-scroller"> 
    
    @include('backend.partials.header')
    
  
    <div class="container-fluid page-body-wrapper">
     
      @include('backend.partials.sidebar')

     
      <div class="main-panel">
        
@yield('content')


    </div>
    
  </div>
  

  <!-- plugins:js -->
  <script src="{{url('/js/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{url('backend/js/Chart.min.js')}}"></script>
  <script src="{{url('/js/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{url('/js/progressbar.min.js')}}"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{url('backend/js/off-canvas.js')}}"></script>
  <script src="{{url('backend/js/hoverable-collapse.js')}}"></script>
  <script src="{{url('backend/js/template.js')}}"></script>
  <script src="{{url('backend/js/settings.js')}}"></script>
  <script src="{{url('backend/js/todolist.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{url('backend/js/dashboard.js')}}"></script>
  <script src="{{url('backend/js/Chart.roundedBarCharts.js')}}"></script>
  <!-- End custom js for this page-->
</body>

</html>

