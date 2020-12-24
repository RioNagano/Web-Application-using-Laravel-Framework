

<?php $__env->startSection('title','updateShoe'); ?>

<?php $__env->startSection('content'); ?>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <h2 style="text-align: center;">Edit Shoe</h2>
        <div class="card flex-row flex-wrap">
            <div class="card-header border-0">
                <img src="<?php echo e(asset('storage/images/' . $shoes->image)); ?>" width="300px" height="200px" alt="image">
            </div>
            <div class="card-block px-2">
                <h4 class="card-title"><?php echo e($shoes->name); ?></h4>
                <h4 class="card-title"><?php echo e($shoes->price); ?></h4>
                <h4 class="card-title"><?php echo e($shoes->description); ?></h4>
            </div>
        </div>
        <form action="/updateShoe/<?php echo e($shoes->id); ?>" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
            <div class="form-group">
                <label>Shoe Name</label>
                <input type="text" name="name" class="form-control" placeholder="<?php echo e($shoes->name); ?>">
                <?php $__errorArgs = ['name'];
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
            <div class="form-group">
                <label>Price</label>
                <input type="number" name="price" class="form-control" placeholder="<?php echo e($shoes->price); ?>">
                <?php $__errorArgs = ['price'];
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
            <div class="form-group">
                <label>Description</label>
                <input type="text" name="description" class="form-control" placeholder="<?php echo e($shoes->description); ?>">
                <?php $__errorArgs = ['description'];
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
            <div class="form-group">
                <input type="file" name="image" class="form-control-file">
                <?php $__errorArgs = ['image'];
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
            <button type="submit" value="editShoe" class="btn btn-primary">Update Shoe</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('justdu-it.temp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH R:\Binus\Binus\Smt 5\Web Programming - COMP6144\Project Lab\2201767232\resources\views/justdu-it/updateShoe.blade.php ENDPATH**/ ?>