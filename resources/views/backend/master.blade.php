<!DOCTYPE html>
<html lang="en">

<head>
  
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>LK Farming Assistant </title>
  <!-- plugins:css -->
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
    <!-- partial:partials/_navbar.html -->
    @include('backend.partials.header')
    
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
          
      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close ti-close"></i>
        <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="todo-tab" data-bs-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="chats-tab" data-bs-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
          </li>
        </ul>
        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">
              <form class="form w-100">
                <div class="form-group d-flex">
                  <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                  <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                </div>
              </form>
            </div>
            
                <small class="text-muted my-auto">19 min</small>
              </li>
            </ul>
          </div>
          <!-- chat tab ends -->
        </div>
      </div>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      @include('backend.partials.sidebar')

      <!-- partial -->
      <div class="main-panel">
        
@yield('content')


      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

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

