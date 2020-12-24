

<?php $__env->startSection('title','home'); ?>


<?php $__env->startSection('content'); ?>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <div class="jumbotron" style="background-color: white;">
            <h2 style="text-align: center;">View Shoe</h2>
            <div id="item_list">
            <?php $__currentLoopData = $shoes->chunk(3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shoe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                <div class="row course-set courses__row">
                    <?php $__currentLoopData = $shoe; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-4">
                    <img src="<?php echo e(asset('storage/images/' . $item->image)); ?>" width="300px" height="200px" alt="no image">
                        <div id="detail">
                            <h5><a href="/detailItem/<?php echo e($item->id); ?>"><?php echo e($item->name); ?></a></h5>
                            <p>Rp. <?php echo e($item->price); ?></p>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <?php echo e($shoes->links()); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('justdu-it.temp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH R:\Binus\Binus\Smt 5\Web Programming - COMP6144\Project Lab\2201767232\resources\views/justdu-it/home.blade.php ENDPATH**/ ?>