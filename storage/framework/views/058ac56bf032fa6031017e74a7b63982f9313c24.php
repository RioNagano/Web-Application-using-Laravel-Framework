

<?php $__env->startSection('title','viewCart'); ?>

<?php $__env->startSection('content'); ?>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <h2 style="text-align: center;">View Cart</h2>
        <table class="table">
            <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $head): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tbody>
                <?php $__currentLoopData = $shoe; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>    
                    <?php if($sub->id == $head->item_id): ?>
                        <tr>
                            <th><img src="<?php echo e(asset('storage/images/' . $sub->image)); ?>" width="300px" height="200px" alt="image"></th>
                            <th><?php echo e($sub->name); ?></th>
                            <th><?php echo e($head->quantity); ?></th>
                            <th><?php echo e($sub->price * $head->quantity); ?></th>
                            <th><a class="btn btn-primary" href="/editCart/<?php echo e($head->id); ?>" role="button">Edit</a></th>
                        </tr>
                        <?php break; ?>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
        <?php if(!empty($head)): ?>
        <a class="btn btn-primary" href="<?php echo e(Route('checkout')); ?>" role="button" style="float: right;">Checkout</a>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('justdu-it.temp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH R:\Binus\Binus\Smt 5\Web Programming - COMP6144\Project Lab\2201767232\resources\views/justdu-it/viewCart.blade.php ENDPATH**/ ?>