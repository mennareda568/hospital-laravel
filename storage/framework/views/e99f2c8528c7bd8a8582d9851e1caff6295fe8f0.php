<?php $__env->startSection('content'); ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-10 m-auto">
        <div class="card">
  <div class="card-header">
    <?php echo e(__('language.DETAILSOFADMIN')); ?>

  </div>
  <div class="card-body">
    <table class="table table-dark">
        <thead>
            <tr>
                <td><?php echo e(__('language.ID')); ?></td>
                <td><?php echo e(__('language.ADMINNAME')); ?></td>
                <td><?php echo e(__('language.EMAIL')); ?></td>
                <td><?php echo e(__('language.GENDER')); ?></td>
                <td><?php echo e(__('language.ADDRESS')); ?></td>
                <td><?php echo e(__('language.PHONE')); ?></td>
                <td><?php echo e(__('language.OPERATION')); ?></td>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td><?php echo e($result->id); ?></td>
            <td><?php echo e($result->name); ?></td>
            <td><?php echo e($result->email); ?></td>
            <td><?php echo e($result->gender); ?></td>
            <td><?php echo e($result->address); ?></td>
            <td><?php echo e($result->phone); ?></td>
            <td>
            <a href="<?php echo e(route('admin')); ?>" class="btn btn-success"><i class="fa-solid fa-house"></i></a>
            </td>
            </tr>
        </tbody>
    </table>
  </div>
</div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\website\resources\views/admin/show.blade.php ENDPATH**/ ?>