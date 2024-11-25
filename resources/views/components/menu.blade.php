<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elegant Navbar</title>
    <!-- Link to Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* General Font */
        body {
            font-family: 'Poppins', sans-serif;
        }

        /* Navbar Styling */
        .navbar {
            background-color: #2C3E50; /* Dark Blue for a sleek look */
        }

        .navbar-brand {
            font-weight: bold;
            font-size: 1.8rem;
            color: #ECF0F1 !important;
            letter-spacing: 1px;
        }

        .navbar-nav .nav-link {
            color: #ECF0F1 !important;
            font-size: 1.1rem;
            transition: color 0.3s ease-in-out;
        }

        .navbar-nav .nav-link:hover {
            color: #3498DB !important; /* Light Blue for hover effect */
        }

        /* Navbar Button Styling */
        .btn-outline-light {
            color: #ECF0F1;
            border-color: #ECF0F1;
            font-size: 1rem;
            border-radius: 20px;
            padding: 8px 20px;
            transition: background-color 0.3s ease, border-color 0.3s ease;
        }

        .btn-outline-light:hover {
            background-color: #3498DB;
            border-color: #3498DB;
            color: #fff;
        }

        /* Navbar Collapse for mobile view */
        .navbar-collapse {
            justify-content: flex-end;
        }

        /* Custom Navbar Toggle Icon */
        .navbar-toggler-icon {
            background-color: #ECF0F1;
        }

        /* Add padding to the navbar for a more spacious look */
        .navbar-nav {
            padding-left: 0;
        }

        .navbar-nav .nav-item {
            margin-left: 30px;
        }

        /* Add background for the active page */
        .nav-link.active {
            background-color: #2980B9;
            color: white !important;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">𝚟𝚒𝚗𝚗𝚣 𝚊𝚞𝚝𝚘𝚖𝚘𝚝𝚒𝚏</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        @if (!Auth::check())
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('profile') }}">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>
            </div>

            <a href="{{ route('signup') }}" class="btn btn-outline-light mx-2">Sign Up</a>
            <a href="{{ route('signin') }}" class="btn btn-outline-light">Signin</a>
        @else
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('users') }}">Data Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('categories') }}">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('posts') }}">Posts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('profile') }}">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>
            </div>
            <a href="{{ route('logout') }}" class="btn btn-outline-light">Logout</a>
        @endif
    </div>
</nav>

<!-- Bootstrap 5 JS and Popper.js (for responsive navbar) -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

</body>
</html>
