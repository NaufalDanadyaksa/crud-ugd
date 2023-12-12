<div>
    <!--[if BLOCK]><![endif]--><?php if(Session::get('fail')): ?>
        <div class="alert alert-danger">
            <?php echo Session::get('fail'); ?>

        </div>
        
    <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
    <!--[if BLOCK]><![endif]--><?php if(Session::get('success')): ?>
        <div class="alert alert-success" >
            <?php echo Session::get('success'); ?>

        </div>
        
    <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
    <form action="./" method="post" autocomplete="off" novalidate="" wire:submit.prevent="ResetHandler()">
        <h2 class="card-title text-center mb-4">Reset Password</h2>
        <div class="mb-3">
            <label class="form-label">Email </label>
            
            <input type="text" class="form-control" placeholder="Enter email or username" autocomplete="off"  wire:model="email" disabled>
            <span class="text-danger"><!--[if BLOCK]><![endif]--><?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <?php echo e($message); ?>

            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> <!--[if ENDBLOCK]><![endif]--></span>
            
        </div>
    
        <div class="mb-2">
            <label class="form-label">
                New Password
            </label>
            <div class="input-group input-group-flat">
                <input type="password" class="form-control" placeholder="New password" autocomplete="off" wire:model="new_password">
                <span class="input-group-text">
                    <a href="#" class="link-secondary" data-bs-toggle="tooltip" aria-label="Show password" data-bs-original-title="Show password"><!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path>
                            <path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6"></path>
                        </svg>
                    </a>
                </span>
            
            </div>
            <span class="text-danger"><!--[if BLOCK]><![endif]--><?php $__errorArgs = ['new_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <?php echo e($message); ?>

            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> <!--[if ENDBLOCK]><![endif]--></span>
        </div>
        <div class="mb-2">
            <label class="form-label">
                Cofirm Password 
            </label>
            <div class="input-group input-group-flat">
                <input type="password" class="form-control" placeholder="confirm password" autocomplete="off" wire:model="confirm_new_password">
                <span class="input-group-text">
                    <a href="#" class="link-secondary" data-bs-toggle="tooltip" aria-label="Show password" data-bs-original-title="Show password"><!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path>
                            <path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6"></path>
                        </svg>
                    </a>
                </span>
            
            </div>
            <span class="text-danger"><!--[if BLOCK]><![endif]--><?php $__errorArgs = ['confirm_new_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <?php echo e($message); ?>   
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> <!--[if ENDBLOCK]><![endif]--></span>
        </div>
        <div class="mb-2">
            <label class="form-check">
                
                <a href="<?php echo e(route('login')); ?>">back to Login Page</a>
            </label>
        </div>
        <div class="form-footer">
            <button type="submit" class="btn btn-primary w-100">Reset Password</button>
        </div>
    </form>
</div>
<?php /**PATH /home/kira/crud-ugd/resources/views/livewire/reset-form.blade.php ENDPATH**/ ?>