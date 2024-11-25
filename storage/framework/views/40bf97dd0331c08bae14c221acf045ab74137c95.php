<?php $__env->startSection('content'); ?>
<div class="container">
    <h2>Your Profile</h2>
    <table class="table">
        <tr>
            <th>Name</th>
            <td><?php echo e($profile->full_name); ?></td>
        </tr>
        <tr>
            <th>Phone</th>
            <td><?php echo e($profile->phone ?? 'N/A'); ?></td>
        </tr>
        <tr>
            <th>Address</th>
            <td><?php echo e($profile->address ?? 'N/A'); ?></td>
        </tr>
        <tr>
            <th>Avatar</th>
            <td><img src="<?php echo e(asset('storage/' . $profile->avatar)); ?>" alt="Avatar" width="100"></td>
        </tr>
    </table>
    <a href="<?php echo e(route('profile.edit')); ?>" class="btn btn-primary">Edit Profile</a>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\AXIOO RPL 02\Documents\aplikasi_web1\resources\views/profile/index.blade.php ENDPATH**/ ?>