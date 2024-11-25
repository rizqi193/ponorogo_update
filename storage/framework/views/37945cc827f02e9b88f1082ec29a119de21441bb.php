<?php $__env->startSection('content'); ?>
<div class="container">
    <h2>Edit Profile</h2>
    <form action="<?php echo e(route('profile.update')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="full_name">Full Name</label>
            <input type="text" name="full_name" class="form-control" value="<?php echo e($profile->full_name); ?>" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" name="phone" class="form-control" value="<?php echo e($profile->phone); ?>">
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" name="address" class="form-control" value="<?php echo e($profile->address); ?>">
        </div>
        <div class="form-group">
            <label for="avatar">Avatar</label>
            <input type="file" name="avatar" class="form-control">
        </div>
        <button type="submit" class="btn btn-success mt-3">Update Profile</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\AXIO RPL 26\Documents\aplikasi_web1\resources\views/profile/edit.blade.php ENDPATH**/ ?>