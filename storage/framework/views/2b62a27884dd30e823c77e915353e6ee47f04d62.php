

<?php $__env->startSection('title','detailShoe'); ?>

<?php $__env->startSection('content'); ?>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <div class="card flex-row flex-wrap">
            <div class="card-header border-0">
                <img src="<?php echo e(asset('storage/images/' . $shoes->image)); ?>" width="300px" height="200px" alt="image">
            </div>
            <div class="card-block px-2">
                <h4 class="card-title">Name : <?php echo e($shoes->name); ?></h4>
                <p class="card-text">Price : Rp. <?php echo e($shoes->name); ?></p>
                <p class="card-text">Description : </p>
                <p class="card-text"><?php echo e($shoes->description); ?></p>
                <?php if(auth()->guard()->check()): ?>
                    <?php if(auth()->user()->role == 'member'): ?>
                        <h7><a href="/addCart/<?php echo e($shoes->id); ?>">Add to Cart</a></h7>
                    <?php elseif(auth()->user()->role == 'admin'): ?>
                        <h7><a href="/updateShoe/<?php echo e($shoes->id); ?>">Update Shoe</a></h7>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('justdu-it.temp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH R:\Binus\Binus\Smt 5\Web Programming - COMP6144\Project Lab\2201767232\resources\views/justdu-it/detailShoe.blade.php ENDPATH**/ ?>