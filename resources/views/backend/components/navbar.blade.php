<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->

      <li class="nav-item">
        <a href="/home" class="nav-link">
          <i class="nav-icon fas fa-th"></i>
          <p>
            Dashboard
          </p>
        </a>
      </li>

      <li class="nav-item">
        <a href="/setting" class="nav-link">
          <i class="nav-icon fas fa-cogs"></i>
          <p>
            General Settings
          </p>
        </a>
      </li>


      <li class="nav-item">
        <a href="/sliders" class="nav-link">
          <i class="nav-icon fas fa-image"></i>
          <p>
            Slider
          </p>
        </a>
      </li>



      {{-- <li class="nav-item">
        <a href="/principal" class="nav-link">
          <i class="nav-icon fas fa-comments"></i>
          <p>
            Message
          </p>
        </a>
      </li> --}}

      <li class="nav-item">
        <a href="/download" class="nav-link">
          <i class="nav-icon fas fa-file"></i>
          <p>
           Downloads
          </p>
        </a>
      </li>

      <li class="nav-item">
        <a href="/about" class="nav-link">
          <i class="nav-icon fas fa-info-circle"></i>
          <p>
            About us Section
          </p>
        </a>
      </li>

      <li class="nav-item">
        <a href="/information" class="nav-link">
          <i class="nav-icon fas fa-cubes"></i>
          <p>
            Information Section
          </p>
        </a>
      </li>

      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-university"></i>
          <p>
            Academic
          </p>
        </a>
      </li>

      <li class="nav-item">
        <a href="/gallery" class="nav-link">
          <i class="nav-icon fas fa-images"></i>
          <p>
            Photo Gallery
          </p>
        </a>
      </li>

      <li class="nav-item">
        <a href="/video" class="nav-link">
          <i class="nav-icon fas fa-photo-video"></i>
          <p>
            Video Gallery
          </p>
        </a>
      </li>
      
        <li class="nav-item">
        <a href="/admissionview" class="nav-link">
          <i class="nav-icon fas fa-photo-video"></i>
          <p>
            Admission
          </p>
        </a>
      </li>

      <li class="nav-item">
        <a href="/newsandevent" class="nav-link">
          <i class="nav-icon fas fa-calendar-alt"></i>
          <p>
           Events
          </p>
        </a>
      </li>

      <li class="nav-item">
        <a href="/blogs" class="nav-link">
          <i class="nav-icon fas fa-blog"></i>
          <p>
            Blog
          </p>
        </a>
      </li>

      <li class="nav-item">
        <a href="/post-notice" class="nav-link">
          <i class="nav-icon fas fa-bullhorn"></i>
          <p>
            Notice
          </p>
        </a>
      </li>
      
       <li class="nav-item">
        <a href="/contacts" class="nav-link">
         <i class="far fa-envelope"></i>
          <p>
             Contact
          </p>
        </a>
      </li>
      
       <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
             <i class="fas fa-sign-out-alt"></i>
          <p>
             Logout
          </p>
        </a>
         <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
       {{ csrf_field() }}
             </form>
      </li>

    </ul>
  </nav>
