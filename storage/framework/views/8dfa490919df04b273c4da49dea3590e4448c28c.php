<?php $__env->startSection('content'); ?>

    <!--Main-->
    <section class="jumbotron flex">
        <div class="container">
            <div class="cards flex">
                <?php $__currentLoopData = $cards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $card): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card">
                        <img src="<?php echo e($card['image']); ?>" alt="<?php echo e($card['title']); ?>">
                        <h4 class="card-title"> <?php echo e($card['title']); ?></h4>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <button class="loadmore"><a href="#">Load more</a></button>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\giuse\Desktop\laravel-comics\resources\views/home.blade.php ENDPATH**/ ?>