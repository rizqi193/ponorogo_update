<?php $__env->startSection('content'); ?>
<div class="container" style="padding-top: 100px;">
    <h1><?php echo e($post->title); ?></h1>
    <p>Kategori: <?php echo e($post->category->name); ?></p>
    <?php if($post->image): ?>
        <img src="<?php echo e(asset('images/posts/' . $post->image)); ?>" alt="<?php echo e($post->title); ?>" class="img-fluid">
    <?php else: ?>
        <p>No image available</p>
    <?php endif; ?>
    <p><?php echo e($post->body); ?></p>
    <a href="<?php echo e(url()->previous()); ?>" class="btn btn-secondary mt-3">Kembali</a>
</div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\AXIOO RPL 02\Documents\aplikasi_web1\resources\views/posts/show.blade.php ENDPATH**/ ?>