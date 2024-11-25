<?php $__env->startSection('content'); ?>
<div class="container" style="padding-top: 100px;">
    <h1>Edit Postingan</h1>
    <form action="<?php echo e(route('posts.update', $post)); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="mb-3">
            <label for="category_id" class="form-label">Kategori</label>
            <select class="form-select" name="category_id" id="category_id">
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($category->id); ?>" <?php echo e($category->id == $post->category_id ? 'selected' : ''); ?>><?php echo e($category->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Judul</label>
            <input type="text" class="form-control" id="title" name="title" value="<?php echo e($post->title); ?>">
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Isi</label>
            <textarea class="form-control" id="body" name="body" rows="3"><?php echo e($post->body); ?></textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Gambar</label>
            <input type="file" class="form-control" id="image" name="image">
            <?php if($post->image): ?>
                <img src="<?php echo e(asset('images/posts/' . $post->image)); ?>" alt="<?php echo e($post->title); ?>" class="img-thumbnail mt-2" width="200">
            <?php endif; ?>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\AXIOO RPL 02\Documents\aplikasi_web1\resources\views/posts/edit.blade.php ENDPATH**/ ?>