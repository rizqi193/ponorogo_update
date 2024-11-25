<?php $__env->startSection('title'); ?>
Users
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12" style="padding-top: 100px;">
            <div class="card">
                <div class="card-header">Users</div>
                <?php if(session('success')): ?>
                <div class="alert alert-success">
                    <?php echo e(session('success')); ?>

                </div>
            <?php endif; ?>


            <?php if($errors->any()): ?>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="alert alert-danger">
                <?php echo e($error); ?>

            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
                <div class="card-body">
                    <?php if(auth()->guard()->check()): ?>
                        <form method="GET" action="<?php echo e(route('users')); ?>">
                            <div class="input-group mb-3">
                                <input type="text" name="search" class="form-control" placeholder="Search users">
                                <button class="btn btn-primary">Search</button>
                            </div>
                        </form>
                        <a href="<?php echo e(route('users.create')); ?>" class="btn btn-success mb-3">Add New User</a>


                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Created At</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($user->id); ?></td>
                                        <td><?php echo e($user->name); ?></td>
                                        <td><?php echo e($user->email); ?></td>
                                        <td><?php echo e($user->created_at->format('Y-m-d H:i:s')); ?></td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#userModal<?php echo e($user->id); ?>">
                                                View
                                            </button>
                                            <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editUserModal<?php echo e($user->id); ?>">
                                                Edit
                                            </button>
                                            <form action="<?php echo e(route('users.destroy', $user->id)); ?>" method="POST" class="d-inline">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah yakin ingin menghapus data?')">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>


                        <?php echo e($users->links()); ?>

                    <?php else: ?>
                        <p>You are not logged in. Please <a href="<?php echo e(route('signin')); ?>">log in</a> to view users.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>


<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="modal fade" id="userModal<?php echo e($user->id); ?>" tabindex="-1" aria-labelledby="userModalLabel<?php echo e($user->id); ?>" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="userModalLabel<?php echo e($user->id); ?>"><?php echo e($user->name); ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Email: <?php echo e($user->email); ?></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="editUserModal<?php echo e($user->id); ?>" tabindex="-1" aria-labelledby="editUserModalLabel<?php echo e($user->id); ?>" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editUserModalLabel<?php echo e($user->id); ?>">Edit User: <?php echo e($user->name); ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo e(route('users.update', $user->id)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>


                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="<?php echo e($user->name); ?>">
                        </div>


                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?php echo e($user->email); ?>">
                        </div>


                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\AXIO RPL 26\Documents\aplikasi_web1\resources\views/user.blade.php ENDPATH**/ ?>