    <!-- Topbar Start -->
    <div class="container-fluid px-0 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-4 text-center bg-secondary py-3">
                <div class="d-inline-flex align-items-center justify-content-center">
                    <i class="bi bi-envelope fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase mb-1">Email Us</h6>
                        <span>info@example.com</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center bg-primary border-inner py-3">
                <div class="d-inline-flex align-items-center justify-content-center">
                    <a href="{{ url('/') }}" class="navbar-brand">
                        <h1 class="m-0 text-uppercase text-white"><i class="fa fa-birthday-cake fs-1 text-dark me-3"></i>CakeZone</h1>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 text-center bg-secondary py-3">
                <div class="d-inline-flex align-items-center justify-content-center">
                    <i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase mb-1">Call Us</h6>
                        <span>+012 345 6789</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark shadow-sm py-3 py-lg-0 px-3 px-lg-0">
        <a href="{{ url('/') }}" class="navbar-brand d-block d-lg-none">
            <h1 class="m-0 text-uppercase text-white"><i class="fa fa-birthday-cake fs-1 text-primary me-3"></i>CakeZone</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto mx-lg-auto py-0">
                <a href="{{ url('/') }}" class="nav-item nav-link active">Home</a>
                <a href="{{ url('/about') }}" class="nav-item nav-link">About Us</a>
                <a href="{{ url('/menu') }}" class="nav-item nav-link">Menu & Pricing</a>
                <a href="{{ url('/team') }}" class="nav-item nav-link">Master Chefs</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu m-0">
                        <a href="{{ url('/service') }}" class="dropdown-item">Our Service</a>
                        <a href="{{ url('/testimonial') }}" class="dropdown-item">Testimonial</a>
                    </div>
                </div>

                @if (Auth::check())

                @if (Auth::user()->is_admin == 1)
                <a href="{{ url('/contact') }}" class="nav-item nav-link">Contact Us</a>

                <a href="{{route('admin')}}" class="nav-item nav-link">Dashboard</a>
                @else
                <a href="{{ url('/contact') }}" class="nav-item nav-link">Contact Us</a>

                <a href="{{route('dashboard')}}" class="nav-item nav-link">Dashboard</a>

                @endif

                @else
                <a href="{{ url('/contact') }}" class="nav-item nav-link">Contact Us</a>
            </div>
            <div class="d-flex">
                <a href="{{ url('/register') }}" class="btn btn-primary mx-2">Register</a>
                <a href="{{ url('/login') }}" class="btn btn-outline-light">Login</a>
            </div>
            @endif


        </div>
    </nav>
    <!-- Navbar End -->