<?php $__env->startSection('konten'); ?>
<div>
    <h2 class="mb-3">Profile</h2>
    <div class="card">
        <div class="card-body d-flex align-items-center">
           
            <img src="<?php echo e(session('user.profile_picture')); ?>"  alt="Profile Picture" class="img-thumbnail me-3">
            <div>
                <p class="card-text"><strong>Name:</strong> <?php echo e(session('user.name')); ?></p>
                <p class="card-text"><strong>NIM:</strong> <?php echo e(session('user.nim')); ?></p>
                <p class="card-text"><strong>Jurusan:</strong> <?php echo e(session('user.jurusan')); ?></p>
            </div> 
        </div>
    </div>
</div>
    <a href="<?php echo e(route('logout')); ?>">logout</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/kira/dev/Laravel/crud-ugm/resources/views/mahasiswa/profile.blade.php ENDPATH**/ ?>