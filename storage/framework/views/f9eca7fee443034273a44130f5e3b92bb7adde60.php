<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12 m-auto ">
                <div class="card">
                    <div class="card-header">
                        <?php echo e(__('language.PATIENTS')); ?>

                        <?php echo e($patients); ?>

                    </div>
                    <div class="card-body ">
                    <div class="d-flex align-items-center justify-content-between">
                        <a href="<?php echo e(route('createpatient')); ?>" 
                            class="btn btn-success mt-2">
                            <?php echo e(__('language.ADDNEWPATIENT')); ?></a>                        
                    </div>
                        <?php if(session('message')): ?>
                            <h4 class="alert alert-success"><?php echo e(session('message')); ?></h4>
                        <?php endif; ?>
                        <table class="table table-dark mt-3">
                            <thead>
                                <tr>
                                    <td><?php echo e(__('language.ID')); ?></td>
                                    <td><?php echo e(__('language.NAME')); ?></td>
                                    <td><?php echo e(__('language.GENDER')); ?></td>
                                    <td><?php echo e(__('language.AGE')); ?></td>
                                    <td><?php echo e(__('language.MEDICALHISTORY')); ?></td>
                                    <td><?php echo e(__('language.PHONE')); ?></td>
                                    <td><?php echo e(__('language.EMAIL')); ?></td>
                                    <td><?php echo e(__('language.ADDRESS')); ?></td>
                                    <td><?php echo e(__('language.ACTION')); ?></td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($item->id); ?></td>
                                        <td><?php echo e($item->name); ?></td>
                                        <td><?php echo e($item->gender); ?></td>
                                        <td><?php echo e($item->age); ?></td>
                                        <td><?php echo e($item->medicalhistory); ?></td>
                                        <td><?php echo e($item->phone); ?></td>
                                        <td><?php echo e($item->email); ?></td>
                                        <td><?php echo e($item->address); ?></td>
                                        <td>
                                            <a href="<?php echo e(route('editpatient', $item->id)); ?>" class="btn btn-primary"><i
                                                    class="fa-solid fa-pen-to-square"></i></a>
                                            <a href="<?php echo e(route('deletepatient', $item->id)); ?>" class="btn btn-danger"><i
                                                    class="fa-solid fa-trash"></i></a>
                                                    <a href="<?php echo e(route('perscription',$item->id)); ?>" class="btn btn-primary">Generate Prescription
                                                        PDF </a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                        <?php echo e($page->links()); ?> <!-- Display pagination links -->
                    </div>
                </div>
            </div>
        </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\website\resources\views/patient.blade.php ENDPATH**/ ?>