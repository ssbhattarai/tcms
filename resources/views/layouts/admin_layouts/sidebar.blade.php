<!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs  navbar-light  bg-secondary" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header align-items-center">
        <a class="navbar-brand d-block col-9 m-auto" href="javascript:void(0)" >
          <logo></logo>
        </a>
      </div>
      <div class="navbar-inner mt-3">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="{{url('/admin/')}}">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>

            {{-- <li class="nav-item">
              <a class="nav-link" href="{{url('/admin/analytics')}}">
                <i class="ni ni-chart-bar-32 text-orange"></i>
                <span class="nav-link-text">Analytics</span>
              </a>
            </li> --}}

            {{-- site settings --}}
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-cogs"></i> Site Settings
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="{{url('/admin/homepage')}}">Logo & Homepage Slider</a>
                <a class="dropdown-item" href="{{url('/admin/script')}}">Script</a>
                 <a class="dropdown-item" href="{{url('/admin/infos')}}">Info Pages</a>
                 <a class="dropdown-item" href="{{url('/admin/team')}}">Our Team</a>
              </div>
            </li>

            {{-- <li class="nav-item">
              <a class="nav-link" href="{{url('/admin/users')}}">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-text">Users</span>
              </a>
            </li> --}}

            {{-- site settings --}}
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-user-run"></i> Management
              </a>
              <div class="dropdown-menu">
                {{-- <a class="dropdown-item" href="{{url('/admin/api-management')}}">Api Management</a> --}}
                <a class="dropdown-item" href="{{url('/admin/contact')}}">Contact Us</a>
              </div>
            </li>

            {{-- site settings --}}
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-cog"></i> Blog
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="{{url('/admin/category')}}">Category</a>
                <a class="dropdown-item" href="{{url('/admin/blogs')}}">Blog</a>
              </div>
            </li>

            {{-- <li class="nav-item">
              <a class="nav-link" href=" {{url('/admin/reservations')}} ">
                <i class="ni ni-pin-3 text-primary"></i>
                <span class="nav-link-text">Reservations</span>
              </a>
            </li> --}}

            {{-- <li class="nav-item">
              <a class="nav-link" href=" {{url('/admin/orders')}} ">
                <i class="ni ni-cart text-primary"></i>
                <span class="nav-link-text">Orders</span>
              </a>
            </li> --}}


            {{-- <li class="nav-item">
              <a class="nav-link" href=" {{url('/admin/blogs')}} ">
                <i class="ni ni-book-bookmark"></i>
                <span class="nav-link-text">Blogs</span>
              </a>
            </li> --}}

            </li>
          </ul>

          </ul>
        </div>
      </div>
    </div>
  </nav>
