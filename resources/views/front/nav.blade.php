<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Tailwind CSS (Production version) -->
    <link href="https://unpkg.com/tailwindcss@^3.0/dist/tailwind.min.css" rel="stylesheet">
    <!-- SweetAlert CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-gray-800 mb-0">
    <div class="container-fluid">
        <!-- Logo -->
        <div class="navbar-brand">
            <img class="h-12 w-16" src="../admin/img/salah.png" alt="Workflow">
        </div>
        <!-- Toggler/collapsible Button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Navbar links -->
        <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
            <!-- Centered Links -->
            <ul class="navbar-nav mb-2 mb-lg-0 mx-auto">

   




                    @auth <!-- Check if the user is authenticated -->
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('dashboard') }}">سەرەکی</a>
                    </li>

                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('personal.showone') }}">پێشکەشکردن</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('contact') }}">داواکاری</a>
                        </li>
                    @else <!-- If the user is not authenticated -->
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('dashboard') }}">سەرەکی</a>
                    </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('login') }}">پێشکەشکردن</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('login') }}">داواکاری</a>
                        </li>
                    @endauth
                </ul>


            <!-- Logout Link -->
            <ul class="navbar-nav">
                @auth
                    <!-- If the user is authenticated, display the logout link -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.logout') }}"><span class="text-center text-white">دەرچوون</span></a>
                    </li>
                @else
                    <!-- If the user is a guest, display the login and register links -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}"><span class="text-center text-white">چونەژورەوە</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}"><span class="text-center text-white">تۆمارکردن</span></a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
