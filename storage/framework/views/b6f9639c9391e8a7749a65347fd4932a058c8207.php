<?php $__env->startSection('content'); ?>
    <div class="container mt-5">
        <div class="row mt-5">
            <div class="col-md-10 m-auto">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <?php echo e(__('language.MYBOOKING')); ?>

                            <a href="<?php echo e(route('doctorlist')); ?>">Show Doctor List</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <?php if(session('message')): ?>
                            <h4 class="alert alert-success"><?php echo e(session('message')); ?></h4>
                        <?php endif; ?>
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <td><?php echo e(__('language.DOCTORNAME')); ?></td>
                                    <td><?php echo e(__('language.DEPARTMENT')); ?></td>
                                    <td><?php echo e(__('language.DAYS')); ?></td>
                                    <td><?php echo e(__('language.TIME')); ?></td>
                                    <td><?php echo e(__('language.CONSULTANCYFEES')); ?></td>
                                    <td><?php echo e(__('language.DELETE')); ?></td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($item->doctor); ?></td>
                                        <td><?php echo e($item->department); ?></td>
                                        <td><?php echo e($item->days); ?></td>
                                        <td><?php echo e($item->time); ?></td>
                                        <td><?php echo e($item->consultancyfees); ?></td>
                                        <td>
                                            <a href="<?php echo e(route('deletebook', $item->id)); ?>" class="btn btn-danger"><i
                                                    class="fa-solid fa-trash"></i></a>
                                        </td>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\website\resources\views/mybooking.blade.php ENDPATH**/ ?>