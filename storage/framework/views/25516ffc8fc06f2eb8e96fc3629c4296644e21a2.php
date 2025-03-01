<?php $__env->startSection('content'); ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12 m-auto">
        <div class="card">
  <div class="card-header">
    <?php echo e(__('language.DETAILSOFDOCTOR')); ?>

  </div>
  <div class="card-body">
    <table class="table table-dark">
        <thead>
            <tr>
                <td><?php echo e(__('language.ID')); ?></td>
                <td><?php echo e(__('language.DOCTORNAME')); ?></td>
                <td><?php echo e(__('language.IMAGE')); ?></td>
                <td><?php echo e(__('language.EMAIL')); ?></td>
                <td><?php echo e(__('language.GENDER')); ?></td>
                <td><?php echo e(__('language.ADDRESS')); ?></td>
                <td><?php echo e(__('language.PHONE')); ?></td>
                <td><?php echo e(__('language.DEPARTMENT')); ?></td>
                <td><?php echo e(__('language.AGE')); ?></td>
                <td><?php echo e(__('language.DAYS')); ?></td>
                <td><?php echo e(__('language.TIME')); ?></td>
                <td><?php echo e(__('language.CONSULTANCYFEES')); ?></td>
                <td><?php echo e(__('language.OPERATION')); ?></td>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td><?php echo e($result->id); ?></td>
            <td><?php echo e($result->name); ?></td>
            <td><img style="width:100px" src=<?php echo e(asset("img/doctors/".$result->doc_image)); ?> ></td>
            <td><?php echo e($result->email); ?></td>
            <td><?php echo e($result->gender); ?></td>
            <td><?php echo e($result->address); ?></td>
            <td><?php echo e($result->phone); ?></td>
            <td><?php echo e($result->department); ?></td>
            <td><?php echo e($result->age); ?></td>
            <td><?php echo e($result->days); ?></td>
            <td><?php echo e($result->time); ?></td>
            <td><?php echo e($result->Consultancyfees); ?></td>
            <td>
            <a href="<?php echo e(route('doctor')); ?>" class="btn btn-success"><i class="fa-solid fa-house"></i></a>
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

<?php echo $__env->make("layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\website\resources\views/Doctor/show.blade.php ENDPATH**/ ?>