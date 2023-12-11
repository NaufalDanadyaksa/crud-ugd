<div>
    <!--[if BLOCK]><![endif]--><?php if(Session::get('error')): ?>
        <div class="alert alert-danger"><?php echo e(Session::get('error')); ?></div>
    <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
    <!--[if BLOCK]><![endif]--><?php if(Session::get('success')): ?>
        <div class="alert alert-success" ><?php echo e(Session::get('success')); ?></div>
    <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
    <form action="./" method="post" autocomplete="off" novalidate="" wire:submit.prevent="LoginHandler()">
        <div class="mb-3">
            <label class="form-label"> Username</label>
            
            <input type="text" class="form-control" placeholder="Enter email or username" autocomplete="off"  wire:model="name">
            <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['login_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class="text-danger"><?php echo e($message); ?></span>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> <!--[if ENDBLOCK]><![endif]-->
        </div>
       
        <div class="mb-2">
            <label class="form-label">
                Password
                <span class="form-label-description">
                    <a href="<?php echo e(route('forgot-password')); ?>">I forgot password</a>
                </span>
            </label>
            <div class="input-group input-group-flat">
                <input type="password" class="form-control" placeholder="Your password" autocomplete="off" wire:model="password">
              
               
            </div>
            <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class="text-danger"><?php echo e($message); ?></span>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> <!--[if ENDBLOCK]><![endif]-->
        </div>
        <div class="form-footer">
            <button type="submit" class="btn btn-primary w-100">Sign in</button>
        </div>
    </form>
   
</div>
<?php /**PATH /home/kira/dev/Laravel/crud-ugm/resources/views/livewire/login-form.blade.php ENDPATH**/ ?>