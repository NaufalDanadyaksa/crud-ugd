<?php $__env->startSection('pageTitle', isset($pageTitle) ? $pageTitle : 'Login'); ?>
<?php $__env->startSection('content'); ?>
<div class="page page-center">
    <div class="container container-tight py-4">
        <div class="text-center mb-4">
            <a href="." class="navbar-brand navbar-brand-autodark"><img src="./static/Universitas.png" height="200" alt=""></a>
            <h1>Universitas Gajah Duduk</h1>
        </div>
        <div class="card card-md">
            <div class="card-body">
                <h2 class="h2 text-center mb-4">Login to your account</h2>
                <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('login-form');

$__html = app('livewire')->mount($__name, $__params, 'QLDymwX', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
                
            </div>

           
        </div>
    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.auth-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/kira/dev/Laravel/crud-ugm/resources/views/mahasiswa/login.blade.php ENDPATH**/ ?>