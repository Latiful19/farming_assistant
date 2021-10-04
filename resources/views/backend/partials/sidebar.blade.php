<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav">


        @if(auth()->user()->role=='admin')
        <li class="nav-item">
            <a class="nav-link" href="#">
            <i class="fas fa-lock"></i>
            <span class="menu-title"  style="font-size: 1rem;">{{auth()->user()->Full_Name}}</span>
              
             
            </a>
          </li>

        
    
          <li class="nav-item">
            <a class="nav-link" href="{{route('dashboard.dash')}}">
            <i class="fas fa-tachometer-alt"></i>
              <span class="menu-title" style="font-size: 1rem;">Dashboard</span>
             
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('farmer.list')}}">
            <i class="fas fa-user-check"></i>
              <span class="menu-title" style="font-size: 1rem;">Farmer</span>
            </a>
          </li>
         
          <li class="nav-item">
            <a class="nav-link" href="{{route('allregistered.registered')}}">
            <i class="fas fa-users"></i>
              <span class="menu-title" style="font-size: 1rem;">Users</span>
            </a>
          </li>
          
         
          

          <li class="nav-item">
            <a class="nav-link" href="{{route('advertisements.advertisement')}}">
            <i class="fas fa-ad"></i>
              <span class="menu-title" style="font-size: 1rem;">Post Advertise</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('farm.experts')}}">
            <i class="fas fa-user-plus"></i>
              <span class="menu-title" style="font-size: 1rem;">Add an Expert</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('farmingtips.farmingtip')}}">
            <i class="fa-solid fa-circle-radiation"></i>
              <span class="menu-title" style="font-size: 1rem;">Farming Tips</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('allcomplaints.complaints')}}">
            <i class="fa-solid fa-exclamation"></i>            
             <span class="menu-title" style="font-size: 1rem;">Problems</span>
            </a>
          </li>


          @else
 
               
              

          <li class="nav-item">
            <a class="nav-link" href="{{route('farmingtips.tips')}}">
            <i class="fa-solid fa-user"></i>
              <span class="menu-title" style="font-size: 1rem;">{{auth()->user()->User_Name}}</span>

            </a>
          </li>

          
     

          <li class="nav-item">
            <a class="nav-link" href="{{route('farmingtips.farmingtip')}}">
            <i class="fa-solid fa-circle-radiation"></i>
              <span class="menu-title" style="font-size: 1rem;">Farming Tips</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('allcomplaints.complaints')}}">
            <i class="fa-solid fa-exclamation"></i>            
             <span class="menu-title" style="font-size: 1rem;">Problems</span>
            </a>
          </li>
          @endif
          
        </ul>
      </nav>
   