<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('content'); ?>
<div class="container" style="padding-top: 100px;">
    <div class="row">
        <div class="col-md-12">
            <?php if(session('success')): ?>
                <div class="alert alert-success fade show" role="alert">
                    <?php echo e(session('success')); ?>

                </div>
            <?php endif; ?>

            <?php if($errors->any()): ?>
                <div class="alert alert-danger fade show" role="alert">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>

            <h2 class="display-4 text-center text-primary mb-4">Selamat Datang di Halaman Beranda Aplikasi</h2>
        </div>
    </div>

    <div class="row mt-4">
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm border-light rounded">
                <?php if($post->image): ?>
                    <img src="<?php echo e(asset('images/posts/' . $post->image)); ?>" class="card-img-top" alt="<?php echo e($post->title); ?>">
                <?php else: ?>
                    <img src="https://via.placeholder.com/350x200" class="card-img-top" alt="Placeholder Image">
                <?php endif; ?>
                <div class="card-body">
                    <h5 class="card-title text-dark"><?php echo e($post->title); ?></h5>
                    <p class="card-text text-muted"><?php echo e(Str::limit($post->body, 100)); ?></p>
                    <a href="<?php echo e(route('posts.show', $post)); ?>" class="btn btn-primary btn-block">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>

<style>


/* Alert Box Styling */
.alert {
    border-radius: 10px;
    padding: 20px;
    margin-bottom: 30px;
}

.alert-success {
    background-color: #d4edda;
    border-color: #c3e6cb;
    color: #155724;
}

.alert-danger {
    background-color: #f8d7da;
    border-color: #f5c6cb;
    color: #721c24;
}

/* Card Styling */
.card {
    border: none;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s, box-shadow 0.3s;
}

.card:hover {
    transform: translateY(-10px);
    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
}

.card-img-top {
    border-radius: 10px 10px 0 0;
    object-fit: cover;
    height: 200px;
}

/* Card Body */
.card-body {
    padding: 20px;
    background-color: #ffffff;
    border-radius: 0 0 10px 10px;
}

.card-title {
    font-size: 1.25rem;
    color: #333;
    font-weight: 500;
}

.card-text {
    font-size: 1rem;
    color: #666;
}

.btn {
    padding: 12px 20px;
    font-size: 16px;
    font-weight: 500;
    text-align: center;
    display: block;
    margin-top: 10px;
    border-radius: 5px;
}

.btn-primary {
    background-color: #007bff;
    border-color: #007bff;
}

.btn-primary:hover {
    background-color: #0056b3;
    border-color: #0056b3;
}

/* Responsiveness for smaller screens */
@media (max-width: 768px) {
    .container {
        padding-left: 10px;
        padding-right: 10px;
    }

    .card-img-top {
        height: 150px;
    }
}

</style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\AXIOO RPL 02\Documents\aplikasi_web1\resources\views/home.blade.php ENDPATH**/ ?>