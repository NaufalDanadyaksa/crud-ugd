<!-- START FORM -->
<?php $__env->startSection('konten'); ?>
<?php
    $jurusan = [
    ['id' => 1, 'nama_jurusan' => 'Teknik Informatika'],
    ['id' => 2, 'nama_jurusan' => 'Teknik Sipil'],
    ['id' => 3, 'nama_jurusan' => 'Teknik Mesin'],
];

?>

<form action="<?php echo e(url('mahasiswa/'.$data->nim)); ?>" method='post' enctype="multipart/form-data">
<?php echo csrf_field(); ?>
<?php echo method_field('PUT'); ?>
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <a href="<?php echo e(url('mahasiswa')); ?>" class="btn btn-secondary"><- kembali</a>
    <div class="mb-3 row">
        <label for="nim" class="col-sm-2 col-form-label">NIM</label>
        <div class="col-sm-10">
            <?php echo e($data->nim); ?>

        </div>
    </div>
    <div class="mb-3 row">
        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name='name' value="<?php echo e($data->name); ?>" id="name">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
        <div class="col-sm-10">
            <select class="form-select" name="jurusan" id="jurusan">
                <?php $__currentLoopData = $jurusan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $j): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($j['nama_jurusan']); ?>" <?php echo e($data->j == $j['id'] ? 'selected' : ''); ?>>
                        <?php echo e($j['nama_jurusan']); ?>

                    </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
    </div>
    <div class="mb-3 row">
        <label for="nama" class="col-sm-2 col-form-label">Profile Picture</label>
        <div class="col-sm-10">
            <input type="file" class="form-control" name='profile_picture' id="profile_picture">
        </div>
    </div>
    
    <div class="mb-3 row">
        <label for="jurusan" class="col-sm-2 col-form-label"></label>
        <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
    </div>
</div>
</form>
<!-- AKHIR FORM -->
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/kira/crud-ugd/resources/views/mahasiswa/edit.blade.php ENDPATH**/ ?>