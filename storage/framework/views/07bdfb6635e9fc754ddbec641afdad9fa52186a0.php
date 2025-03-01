
<?php $__env->startSection('content'); ?>
    <div class="container">
            <div class="row mt-5">
                <div class="col-md-8 m-auto ">
                    <div class="card">
                        <div class="card-header">
                            <div class="text-center">
                                <?php echo e($data); ?>

                                <?php echo e(__('language.NOTIFICATION')); ?>

                            </div>
                        </div>
                        <div class="card-body ">
                            <?php if(session('message')): ?>
                                <h4 class="alert alert-success"><?php echo e(session('message')); ?></h4>
                            <?php endif; ?>
                            <table class="table table-dark ">
                                <thead>
                                    <tr>
                                        <td><?php echo e(__('language.MESSAGE')); ?></td>
                                        <td><?php echo e(__('language.DATE')); ?></td>
                                        <td><?php echo e(__('language.TIME')); ?></td>
                                        <td><?php echo e(__('language.AT')); ?></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($item->message); ?></td>
                                            <td><?php echo e($item->date); ?></td>
                                            <td><?php echo e($item->time); ?></td>
                                            <td><?php echo e($item->created_at); ?></td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                            <?php echo e($result->links()); ?> <!-- Display pagination links -->
                        </div>
                    </div>
                </div>
            </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\website\resources\views/notification.blade.php ENDPATH**/ ?>