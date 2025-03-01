
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-10 m-auto ">
                <div class="card">
                    <div class="card-header">
                        <?php echo e(__('language.Prescription')); ?>

                    </div>
                    <div class="card-body ">
                        <?php if(session('message')): ?>
                            <h4 class="alert alert-success"><?php echo e(session('message')); ?></h4>
                        <?php endif; ?>
                        <table class="table table-dark mt-3">
                            <thead>
                                <tr>
                                    <td><?php echo e(__('language.DOCTORNAME')); ?></td>
                                    <td><?php echo e(__('language.DOCTORPHONE')); ?></td>
                                    <td><?php echo e(__('language.DEPARTMENT')); ?></td>
                                    <td><?php echo e(__('language.PATIENTNAME')); ?></td>
                                    <td><?php echo e(__('language.PATIENTAGE')); ?></td>
                                    <td><?php echo e(__('language.MEDICINE')); ?></td>
                                    <td><?php echo e(__('language.DATE')); ?></td>
                                    <td><?php echo e(__('language.ACTION')); ?></td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $prescription; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($item->doctor); ?></td>
                                        <td><?php echo e($item->doctorphone); ?></td>
                                        <td><?php echo e($item->department); ?></td>
                                        <td><?php echo e($item->patientname); ?></td>
                                        <td><?php echo e($item->patientage); ?></td>
                                        <td><?php echo e($item->medicine); ?></td>
                                        <td><?php echo e($item->created_at); ?></td>
                                        <td>
                                            
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\website\resources\views/prescription.blade.php ENDPATH**/ ?>