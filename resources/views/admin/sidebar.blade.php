<ul class="sidebar navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="{{route('admin.home')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======

        @if(Auth::user()->akses == 'admin')
>>>>>>> tokap11
          <li class="nav-item">
          <a class="nav-link" href="{{route('admin.user')}}">
            <i class="fas fa-fw fa-users"></i>
            <span>User</span>
          </a>
        </li>
<<<<<<< HEAD
>>>>>>> tokap10
      
=======
      @endif
>>>>>>> tokap11
      </ul>