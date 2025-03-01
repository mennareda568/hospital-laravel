<?php $__env->startSection('content'); ?>
    <div class="container mt-5">
            <div class="row mt-5">
                <div class="col-md-10 m-auto">
                    <div class="card">
                        <div class="card-header">
                            <?php echo e(__('language.ALLBOOKING')); ?>

                            (<?php echo e($countpatibook); ?>)
                        </div>
                        <div class="card-body">
                            <?php if(session('message')): ?>
                            <h4 class="alert alert-success mt-2"><?php echo e(session('message')); ?></h4>
                            <?php endif; ?>
                            <table class="table table-dark">
                                <thead>
                                    <tr>
                                        <td><?php echo e(__('language.DOCTORNAME')); ?></td>
                                        <td><?php echo e(__('language.DEPARTMENT')); ?></td>
                                        <td><?php echo e(__('language.DAYS')); ?></td>
                                        <td><?php echo e(__('language.TIME')); ?></td>
                                        <td><?php echo e(__('language.CONSULTANCYFEES')); ?></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $patientbook; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($item->doctor); ?></td>
                                            <td><?php echo e($item->department); ?></td>
                                            <td><?php echo e($item->days); ?></td>
                                            <td><?php echo e($item->time); ?></td>
                                            <td><?php echo e($item->consultancyfees); ?></td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\website\resources\views/allbooking.blade.php ENDPATH**/ ?>