<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-10 m-auto ">
                <div class="card">
                    <div class="card-header">
                        <?php echo e(__('language.DOCTORS')); ?>

                    </div>
                    <div class="card-body ">
                    <div class="d-flex align-items-center justify-content-between">
                        <form action=<?php echo e(route('searchdoc')); ?> method="get">
                            <div class="input-group">
                                <input type="search" name="search" class="form-control">
                                <span class="input-group-prepend">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </span>
                            </div>
                        </form>
                    </div>
                <?php if($element->total() > 0): ?>
                <table class="table table-dark mt-3">
                    <thead>
                            <tr>
                                <td><?php echo e(__('language.ID')); ?></td>
                                <td><?php echo e(__('language.NAME')); ?></td>
                                <td><?php echo e(__('language.DEPARTMENT')); ?></td>
                                <td><?php echo e(__('language.CONSULTANCYFEES')); ?></td>
                                <td><?php echo e(__('language.DAYS')); ?></td>
                                <td><?php echo e(__('language.TIME')); ?></td>
                                <td><?php echo e(__('language.PHONE')); ?></td>
                                <td><?php echo e(__('language.ACTION')); ?></td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($item->id); ?></td>
                                    <td><?php echo e($item->name); ?></td>
                                    <td><?php echo e($item->department); ?></td>
                                    <td><?php echo e($item->Consultancyfees); ?></td>
                                    <td><?php echo e($item->days); ?></td>
                                    <td><?php echo e($item->time); ?></td>
                                    <td><?php echo e($item->phone); ?></td>
                                    <td>
                                        <a href="<?php echo e(route('showdoctor', $item->id)); ?>" class="btn btn-success"><i
                                                class="fa-solid fa-eye"></i></a>
                                        <a href="<?php echo e(route('deletedoctor', $item->id)); ?>" class="btn btn-danger"><i
                                                class="fa-solid fa-trash"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    <?php echo e($element->links()); ?>

                <?php else: ?>
                    <p class="mt-3"> <?php echo e(__('language.DOCTORISNOTINDATABASE')); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\website\resources\views/doctorsearch.blade.php ENDPATH**/ ?>