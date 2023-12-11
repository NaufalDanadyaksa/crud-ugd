<?php $__env->startSection('pageTitle', isset($pageTitle) ? $pageTitle : 'Forgot Password'); ?>
<?php $__env->startSection('content'); ?>
<div class="page page-center">
      <div class="container container-tight py-4">
        <div class="text-center mb-4">
          <a href="." class="navbar-brand navbar-brand-autodark"><img src="./static/logo.svg" height="36" alt=""></a>
        </div>
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('forgot-form');

$__html = app('livewire')->mount($__name, $__params, 'nwB8hhG', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
      </div>
    </div>
     
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.auth-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/kira/dev/Laravel/crud-ugm/resources/views/mahasiswa/forgot.blade.php ENDPATH**/ ?>