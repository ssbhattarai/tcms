{{-- <div class="top-notice">
    <p>Subscribe Now to get 50% off.</p>
</div> --}}
<!-- header ends -->
<div class="navbar" id="navbar">
        <div class="nav-list">

            <div class="nav-list-item">
                <div class="nav-logo">
                    <logo></logo>
                </div>
            </div>

            <div class="nav-list-item" id="search-links">
                <ul class="nav-links">
                    <li class="nav-item">
                        <a href="{{url('/')}}" >Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('/about')}}" >About</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('/menu')}}" > Menu </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('/reservation')}}" > Reservation </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('/blog')}}" > Blog </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('/contact')}}" > Contact </a>
                    </li>
                </ul>
                <div class="nav-signup-login">
                    @if (!auth()->check())
                        <a onclick="showLogin()">
                            Login
                        </a>
                    @else
                        <div class="logged-in-items">
                            <div class="fa-dashboard">
                                <i class="fas fa-user"></i>
                            </div>
                            <ul class="loggedin-list">
                                <li>Welcome, {{auth()->user()->name}}</li>
                                @if (auth()->user()->is_admin == 1)
                                <li><a href="/admin">Admin Dashboard</a></li>
                                @endif

                                <li>
                                    <a onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        Logout <i class="fas fa-sign-out-alt"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    @endif
                    <div class="nav-cart">

                        <navcart></navcart>

                    </div>
                </div>
            </div>
        </div>
        <div class="nav-menu">
            <i onclick="toggleNav()" class="fa fa-bars"></i>
        </div>
    </div>

    @if (!auth()->check())
        <login-form></login-form>
    @endif

    @if (auth()->check())
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    @endif

<main>
