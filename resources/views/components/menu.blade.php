<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <!-- Logo & Navbar Toggle Button -->
        <a class="navbar-brand" href="{{ route('home') }}">
            <!-- Logo image -->
            <img src="{{ asset('Lambang_Kabupaten_Ponorogo.png') }}" alt="Logo" width="40" height="40" class="d-inline-block align-top">
            Ponorogo Update
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Links (Toggled for non-authenticated users) -->
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                @if (!Auth::check())
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
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('users') }}">Data Users</a>
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
                @endif
            </ul>
        </div>

        <!-- Auth Buttons (SignUp, SignIn, or Logout) -->
        @if (!Auth::check())
            <a href="{{ route('signup') }}" class="btn btn-outline-light mx-2">Sign Up</a>
            <a href="{{ route('signin') }}" class="btn btn-outline-light">Signin</a>
        @else
            <a href="{{ route('logout') }}" class="btn btn-outline-light">Logout</a>
        @endif
    </div>
</nav>
