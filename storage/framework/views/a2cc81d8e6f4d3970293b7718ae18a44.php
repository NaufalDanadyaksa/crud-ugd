
<!-- START DATA -->
<?php $__env->startSection('konten'); ?>

<?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('search');

$__html = app('livewire')->mount($__name, $__params, 'kexbkwn', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
<!-- AKHIR DATA -->


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/kira/crud-ugd/resources/views/mahasiswa/index.blade.php ENDPATH**/ ?>