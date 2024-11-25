<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <!-- Logo & Navbar Toggle Button -->
        <a class="navbar-brand" href="<?php echo e(route('home')); ?>">
            <!-- Logo image -->
            <img src="<?php echo e(asset('Lambang_Kabupaten_Ponorogo.png')); ?>" alt="Logo" width="40" height="40" class="d-inline-block align-top">
            Ponorogo Update
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Links (Toggled for non-authenticated users) -->
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <?php if(!Auth::check()): ?>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo e(route('home')); ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('profile')); ?>">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('about')); ?>">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('contact')); ?>">Contact</a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('users')); ?>">Data Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('categories')); ?>">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('posts')); ?>">Posts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('profile')); ?>">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('about')); ?>">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('contact')); ?>">Contact</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>

        <!-- Auth Buttons (SignUp, SignIn, or Logout) -->
        <?php if(!Auth::check()): ?>
            <a href="<?php echo e(route('signup')); ?>" class="btn btn-outline-light mx-2">Sign Up</a>
            <a href="<?php echo e(route('signin')); ?>" class="btn btn-outline-light">Signin</a>
        <?php else: ?>
            <a href="<?php echo e(route('logout')); ?>" class="btn btn-outline-light">Logout</a>
        <?php endif; ?>
    </div>
</nav>
<?php /**PATH C:\Users\AXIO RPL 26\Documents\aplikasi_web1\resources\views/components/menu.blade.php ENDPATH**/ ?>