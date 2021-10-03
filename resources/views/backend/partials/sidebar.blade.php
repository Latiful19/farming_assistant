<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav">


        @if(auth()->user()->role=='admin')
        <li class="nav-item">
            <a class="nav-link" href="#">
            <i class="fas fa-tachometer-alt"></i>
              {{auth()->user()->Full_Name}}
             
            </a>
          </li>

        
    
          <li class="nav-item">
            <a class="nav-link" href="{{route('dashboard.dash')}}">
            <i class="fas fa-tachometer-alt"></i>
              <span class="menu-title">Dashboard</span>
             
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('farmer.list')}}">
              <i class="sv-nav-link-icon"></i>
              <span class="menu-title">Farmer</span>
            </a>
          </li>
         
          <li class="nav-item">
            <a class="nav-link" href="{{route('allregistered.registered')}}">
              <i class="sv-nav-link-icon"></i>
              <span class="menu-title">Users</span>
            </a>
          </li>
          
         
          <li class="nav-item">
            <a class="nav-link" href="{{route('farmingtips.farmingtip')}}">
              <i class="sv-nav-link-icon"></i>
              <span class="menu-title">Farming Tips</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('allcomplaints.complaints')}}">
              <i class="sv-nav-link-icon"></i>
              <span class="menu-title">Problems</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('advertisements.advertisement')}}">
              <i class="sv-nav-link-icon"></i>
              <span class="menu-title">Post Advertise</span>
            </a>
          </li>

          <!-- <li class="nav-item">
            <a class="nav-link" href="{{route('solutions')}}">
            <i class="sv-nav-link-icon"></i>
              <span class="menu-title">Solution</span>
             
            </a>
          </li> -->

          @endif
          
          
        </ul>
      </nav>
   