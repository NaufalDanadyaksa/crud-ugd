
<!-- START FORM -->
<?php $__env->startSection('konten'); ?>


<form action='<?php echo e(url('mahasiswa')); ?>' method='post' enctype="multipart/form-data">
<?php echo csrf_field(); ?>
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <a href="<?php echo e(route('mahasiswa')); ?>" class="btn btn-secondary"><-kembali</a>
    <div class="mb-3 row">
        <label for="nim" class="col-sm-2 col-form-label">NIM</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" name='nim' value="<?php echo e(Session::get('nim')); ?>" id="nim">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name='name' value="<?php echo e(Session::get('nama')); ?>" id="nama">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
        <div class="col-sm-10">
            <select class="form-select" name="jurusan" id="jurusan">
                <option value="Teknik Informatika">Teknik Informatika</option>
                <option value="Teknik Sipil">Teknik Sipil</option>
                <option value="Teknik Mesin">Teknik Mesin</option>
            </select>
        </div>
    </div>
    <div class="mb-3 row">
        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" name='email' value="<?php echo e(Session::get('email')); ?>" id="email">
        </div>
    </div>
    <divpassword class="mb-3 row">
        <label for="password" class="col-sm-2 col-form-label">password</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name='password' value="<?php echo e(Session::get('password')); ?>" id="password">
        </div>
    </divpassword>
    <div class="mb-3 row">
        <label for="nama" class="col-sm-2 col-form-label">Profile Picture</label>
        <div class="col-sm-10">
            <input type="file" class="form-control" name='profile_picture' id="profile_picture">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
        <div class="col-sm-10">
            <select class="form-select" name="type" id="type">
                <option value="1">Admin</option>
                <option value="2">User</option>
            </select>
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
<?php echo $__env->make('layout.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/kira/crud-ugd/resources/views/mahasiswa/create.blade.php ENDPATH**/ ?>