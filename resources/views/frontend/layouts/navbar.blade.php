<header id="header" class="headroom">
    <div class="startp-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="/"><img src="{{ asset('images/logo.png') }}" alt="logo" class="image-logo"></a><button
                    class="navbar-toggler navbar-toggler-right collapsed" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span
                        class="icon-bar top-bar"></span><span class="icon-bar middle-bar"></span><span
                        class="icon-bar bottom-bar"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link {{ Route::current()->uri == '/' ? 'active' : '' }}" href="/">
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/#">
                                About
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="6 9 12 15 18 9" />
                                </svg>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link {{ Route::current()->uri == 'about-us' ? 'active' : '' }}" href="/about-us">About Us</a></li>
                                <li class="nav-item"><a class="nav-link {{ Route::current()->uri == 'our-team' ? 'active' : '' }}" href="/our-team/">Our Team</a></li>
                                {{-- <li class="nav-item"><a class="nav-link" href="/about-3/">About Style 3</a></li> --}}
                            </ul>
                        </li>
                        <li class="nav-item">
                            <li class="nav-item"><a class="nav-link {{ Route::current()->uri == 'services' ? 'active' : '' }}" href="/services">Services</a></li>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::current()->uri == 'blog' ? 'active' : '' }}" href="/blog">
                                Blog
                            </a>

                        </li>
                        <li class="nav-item"><a class="nav-link {{ Route::current()->uri == 'contact' ? 'active' : '' }}" href="/contact/">Contact</a></li>
                    </ul>
                </div>
                <div class="others-option">
                    <a class="btn btn-light" href="/contact/">Support</a>
                 </div>
            </nav>
        </div>
    </div>
</header>
