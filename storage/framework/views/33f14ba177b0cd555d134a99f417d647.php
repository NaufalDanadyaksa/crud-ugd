<div>
    <!--[if BLOCK]><![endif]--><?php if(Session::get('success')): ?>
        <div class="alert alert-success"><?php echo e(Session::get('success')); ?></div>
    <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
    <form class="card card-md"  method="post"  wire:submit.prevent="ForgotHandler()">
        <div class="card-body">
          <h2 class="card-title text-center mb-4">Forgot password</h2>
          <p class="text-muted mb-4">Enter your email address and your password will be reset and emailed to you.</p>
          <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" class="form-control" placeholder="Enter email" wire:model="email">
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
          <div class="form-footer">
            <button  class="btn btn-primary w-100" type="submit">
             
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z"></path><path d="M3 7l9 6l9 -6"></path></svg>
              Send me reset password link
            </button>
          </div>
        </div>
      </form>
      <div class="text-center text-muted mt-3">
        Forget it, <a href="<?php echo e(route('login')); ?>">send me back</a> to the sign in screen.
      </div>
</div>
<?php /**PATH /home/kira/dev/Laravel/crud-ugm/resources/views/livewire/forgot-form.blade.php ENDPATH**/ ?>