
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-8 m-auto ">
                <div class="card">
                    <div class="card-header">
                        <div class="text-center">
                            ( <?php echo e(__('language.MYPROFILE')); ?> )
                        </div>
                    </div>
                    <div class="card-body ">
                        <?php if(session('message')): ?>
                            <h4 class="alert alert-success"><?php echo e(session('message')); ?></h4>
                        <?php endif; ?>
    
                                <label><?php echo e(__('language.NAME')); ?></label>
                                <label class="form-control mb-4"><?php echo e(Auth::user()->name); ?></label>

                              
                                <label><?php echo e(__('language.EMAIL')); ?></label>
                                <label class="form-control mb-4"><?php echo e(Auth::user()->email); ?></label>
                              
                                <label><?php echo e(__('language.PHONE')); ?></label>
                                <label class="form-control mb-4"><?php echo e($result->phone); ?></label>
                               
                                <label><?php echo e(__('language.AGE')); ?></label>
                                <label class="form-control mb-4"><?php echo e($result->age); ?></label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\website\resources\views/profile.blade.php ENDPATH**/ ?>