

<?php $__env->startSection('title','viewTransaction'); ?>


<?php $__env->startSection('content'); ?>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <div class="jumbotron" style="background-color: white;">
            <h2 style="text-align: center;">View All Transaction</h2>
            <br>
            <br>
            <?php if(auth()->guard()->check()): ?>
                <?php if(auth()->user()->role == 'member'): ?>
                    <?php $__currentLoopData = $tr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="row course-set courses__row" style="margin-bottom: 100px;">
                        <div id="status">
                            <div id="date">
                                <h5><?php echo e($t->created_at); ?></h5>
                            </div>
                            <div id="total">
                                <h5>Total Rp. <?php echo e($t->total); ?></h5>
                            </div>
                        </div>
                        <?php $__currentLoopData = $dts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($d->transaction_id == $t->id): ?>
                                <?php $__currentLoopData = $shoes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($d->item_id == $s->id): ?>
                                        <div class="col-md-4">
                                            <img src="<?php echo e(asset('storage/images/' . $s->image)); ?>" width="300px" height="200px" alt="no image">
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>        
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php elseif(auth()->user()->role == 'admin'): ?>
                    <?php $__currentLoopData = $trs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="row course-set courses__row" style="margin-bottom: 100px;">
                            <div id="status">
                                <div id="date">
                                    <h5><?php echo e($t->created_at); ?></h5>
                                </div>
                                <div id="total">
                                    <h5>Total Rp. <?php echo e($t->total); ?></h5>
                                </div>
                            </div>
                            <?php $__currentLoopData = $dts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($d->transaction_id == $t->id): ?>
                                    <?php $__currentLoopData = $shoes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($d->item_id == $s->id): ?>
                                            <div class="col-md-4">
                                                <img src="<?php echo e(asset('storage/images/' . $s->image)); ?>" width="300px" height="200px" alt="no image">
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>        
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('justdu-it.temp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH R:\Binus\Binus\Smt 5\Web Programming - COMP6144\Project Lab\2201767232\resources\views/justdu-it/viewTransaction.blade.php ENDPATH**/ ?>