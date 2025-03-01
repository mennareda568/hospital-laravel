<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-8 m-auto ">
                <div class="card">
                    <div class="card-header">
                        <div class="text-center">
                            <?php echo e(__('language.MESSAGES')); ?>

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
                                    <td><?php echo e(__('language.NAME')); ?></td>
                                    <td><?php echo e(__('language.EMAIL')); ?></td>
                                    <td><?php echo e(__('language.PHONE')); ?></td>
                                    <td><?php echo e(__('language.DELETE')); ?></td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($item->message); ?></td>
                                        <td><?php echo e($item->name); ?></td>
                                        <td><?php echo e($item->email); ?></td>
                                        <td><?php echo e($item->mobil); ?></td>
                                        <td>
                                            <a href="<?php echo e(route('deletemsg', $item->id)); ?>" class="btn btn-danger"><i
                                                    class="fa-solid fa-trash"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                        <?php echo e($result->links()); ?> <!-- Display pagination links -->
                    </div>
                </div>
            </div>
        </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\website\resources\views/message.blade.php ENDPATH**/ ?>