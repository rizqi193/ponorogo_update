<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="<?php echo e(route('home')); ?>">Aplikasi Desa</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <?php if(!Auth::check()): ?>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
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


                </ul>
            </div>


            <a href="<?php echo e(route('signup')); ?>" class="btn btn-outline-light mx-2">Sign Up</a>
            <a href="<?php echo e(route('signin')); ?>" class="btn btn-outline-light">Signin</a>
        <?php else: ?>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?php echo e(route('users')); ?>">Data Users</a>
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


                </ul>
            </div>
            <a href="<?php echo e(route('logout')); ?>" class="btn btn-outline-light">Logout</a>
        <?php endif; ?>
    </div>
    </div>
</nav>
<?php /**PATH C:\Users\AXIOO RPL 02\Documents\aplikasi_web1\resources\views/components/menu.blade.php ENDPATH**/ ?>