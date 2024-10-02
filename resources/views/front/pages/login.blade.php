<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CakeZone - Cake Shop Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Oswald:wght@500;600;700&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Local CSS File -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    @include('sweetalert::alert')
    <!-- Login Form Start -->
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h2 class="text-center text-uppercase mb-4 text-light bg-warning">Login</h2>
                <form action="{{ route('login.authenticate') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="rememberMe" name="rememberMe">
                            <label class="form-check-label" for="rememberMe">Remember me</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Login</button>
                    <p class="text-center mt-3 mb-0">
                        <a href="#" class="text-primary">Forgot your password?</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
    <!-- Login Form End -->

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Local JavaScript File -->
    <script src="js/main.js"></script>
</body>

</html>