

<?php $__env->startSection('title','updateShoe'); ?>

<?php $__env->startSection('content'); ?>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <?php $__currentLoopData = $shoe; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $head): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($cart->item_id == $head->id): ?>
            <div class="card flex-row flex-wrap">
                <div class="card-header border-0">
                    <img src="<?php echo e(asset('storage/images/' . $head->image)); ?>" width="300px" height="200px" alt="image">
                </div>
                <div class="card-block px-2">
                    <h4 class="card-title">Name : <?php echo e($head->name); ?></h4>
                    <h4 class="card-title">Rp. <?php echo e($head->price); ?></h4>
                    <h4 class="card-title"><?php echo e($head->description); ?></h4>
                </div>
            </div>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <form action="/updateCart/<?php echo e($cart->id); ?>" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
            <div class="form-group">
                <label>Quantity</label>
                <input type="number" name="quantity" class="form-control">
                <?php $__errorArgs = ['quantity'];
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
            <button type="submit" value="updateCart" class="btn btn-primary">Update Shoe</button>
            <a class="btn btn-link" href="/delCart/<?php echo e($cart->id); ?>" role="button">Delete</a>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('justdu-it.temp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH R:\Binus\Binus\Smt 5\Web Programming - COMP6144\Project Lab\2201767232\resources\views/justdu-it/editCart.blade.php ENDPATH**/ ?>