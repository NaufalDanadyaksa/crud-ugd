<div>
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <!-- FORM PENCARIAN -->
        <div class="pb-3">
               <input type="text" class="form-control me-2" name="search" wire:model.live.debounce.500ms="search" placeholder="Search" aria-label="Search"  id="liveSearchInput">
        </div>
        
        <!-- TOMBOL TAMBAH DATA -->
        <div class="pb-3">
            <a href='<?php echo e(route('create')); ?>' class="btn btn-primary">+ Tambah Data</a>
        </div>
    
        <table class="table table-striped">
            <thead>
                <tr >
                    <th class="col-md-1">No</th>
                    <th class="col-md-3">NIM</th>
                    <th class="col-md-4">Nama</th>
                    <th class="col-md-2">Jurusan</th>
                    <th class="col-md-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
               
               <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $mahasiswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               
                   <tr wire:key="item-<?php echo e($item->id); ?>">
                        <td><?php echo e($mahasiswa->firstItem() + $loop->index); ?></td>
                        <td><?php echo e($item->nim); ?></td>
                        <td><?php echo e($item->name); ?></td>
                        <td><?php echo e($item->jurusan); ?></td>
                        <td>
                            <a href='<?php echo e(url('mahasiswa/'.$item->nim.'/edit')); ?>' class="btn btn-success btn-sm">Edit</a>
                            <form onsubmit="return confirm('Yakin menghapus data?')" class="d-inline" action="<?php echo e(url('mahasiswa/'.$item->nim)); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" name="submit" class="btn btn-danger btn-sm">Del</Del></button>
                            </form>
                        </td>
                   </tr>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!--[if ENDBLOCK]><![endif]-->
            </tbody>
        </table>
        <?php echo e($mahasiswa->links()); ?>

        
        <a href='<?php echo e(route('logout')); ?>' class="btn btn-danger btn-sm">Logout</a>
    </div>
   
</div>
<?php /**PATH /home/kira/crud-ugd/resources/views/livewire/search.blade.php ENDPATH**/ ?>