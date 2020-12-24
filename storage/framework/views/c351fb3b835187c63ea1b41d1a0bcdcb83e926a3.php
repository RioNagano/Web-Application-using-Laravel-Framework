

<?php $__env->startSection('title','login'); ?>

<?php $__env->startSection('search'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('sidenav'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div id="formLR">
        <form action="<?php echo e(Route('login')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="fo">
                <label for="formEmail" id="labels">E-Mail address</label>
                <input type="email" name="email">
                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="error" style="color: red;"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="fo">
                <label for="formPassword" id="labels">Password</label>
                <input type="password" name="password">
                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="error" style="color: red;"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="fo">
                <input type="checkbox" name="remember" id="rbm">
                <label for="rbm">Remember me</label>
            </div>
            <input type="submit" value="Login">
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('justdu-it.temp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH R:\Binus\Binus\Smt 5\Web Programming - COMP6144\Project Lab\2201767232\resources\views/justdu-it/login.blade.php ENDPATH**/ ?>