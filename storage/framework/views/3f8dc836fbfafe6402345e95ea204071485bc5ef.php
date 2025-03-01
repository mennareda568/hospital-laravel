<?php $__env->startSection('content'); ?>
    <div class="container mt-5">
<div class="row mt-5">
    <div class="col-md-8 m-auto">
        <div class="card">
            <div class="card-header">
                <?php echo e(__('language.MYAPPOINTMENTS')); ?>

            </div>
            <div class="card-body">
                <table class="table table-dark mt-3">
                    <thead>
                        <tr>
                            <td><?php echo e(__('language.PATIENTNAME')); ?></td>
                            <td><?php echo e(__('language.PATIENTEMAIL')); ?></td>
                            <td><?php echo e(__('language.PATIENTPHONE')); ?></td>
                            <td><?php echo e(__('language.DAYS')); ?></td>
                            <td><?php echo e(__('language.TIME')); ?></td>
                            <td><?php echo e(__('language.CONSULTANCYFEES')); ?></td>
                        </tr>
                    </thead>
                    <tbody>
                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($item->patientname); ?></td>
                                <td><?php echo e($item->patientemail); ?></td>
                                <td><?php echo e($item->patientphone); ?></td>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\website\resources\views/myappointment.blade.php ENDPATH**/ ?>