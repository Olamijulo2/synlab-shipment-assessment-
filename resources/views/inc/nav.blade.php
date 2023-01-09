<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #003765">
    {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation"> --}}
     {{-- <span class="navbar-toggler-icon"></span> --}}
   {{-- </button> --}}
   <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
     {{-- <div class="navbar-nav">
       
     </div> --}}
   </div>
   <ul>
    @if(Auth::guard('web')->check())
   <li class="nav-item dropdown">
           <h4 id="navbarDropdown" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color: aliceblue">
                {{ Auth::user()->lastName ." " . Auth::user()->firstName}} <span class="caret"></span>
           </h4>

           <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
               <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                   {{ __('Logout') }}
               </a>

               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                   @csrf
               </form>
           </div>
       </li>
       {{-- @endif --}}
       @elseif(Auth::guard('admin')->check())
       <li class="nav-item dropdown">
           <h4 id="adminDropdown" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color: aliceblue">
               {{ (Auth('admin')->User()->userName) }} (ADMIN) <span class="caret"></span>
           </h4>
           <div class="dropdown-menu dropdown-menu-right" aria-labelledby="adminDropdown">
               <a href="{{route('admin-dashboard')}}" class="dropdown-item">Dashboard</a>
               <a class="dropdown-item" href="#" onclick="event.preventDefault();document.querySelector('#admin-logout-form').submit();">
                   Logout
               </a>
               <form id="admin-logout-form" action="{{ route('admin-logout') }}" method="POST" style="display: none;">
                   @csrf
               </form>
           </div>
       </li>
   @endif
</ul>
 </nav>
 
 