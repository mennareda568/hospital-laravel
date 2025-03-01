<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-10 m-auto ">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center justify-content-between">
                            <?php echo e(__('language.DOCTORS')); ?>

                            <form action=<?php echo e(route('searchlist')); ?> method="get">
                                <div class="input-group">
                                    <input type="search" name="search" class="form-control">
                                    <span class="input-group-prepend">
                                        <button type="submit" class="btn btn-primary"><?php echo e(__('language.SEARCH')); ?></button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="card-body ">
                        <?php if(session('message')): ?>
                        <h4 class="alert alert-success mt-2"><?php echo e(session('message')); ?></h4>
                        <?php endif; ?>
                        <table class="table table-dark ">
                            <thead>
                                <tr>
                                    <td></td>
                                    <td><?php echo e(__('language.DOCTORNAME')); ?></td>
                                    <td><?php echo e(__('language.DEPARTMENT')); ?></td>
                                    <td><?php echo e(__('language.DAYS')); ?></td>
                                    <td><?php echo e(__('language.TIME')); ?></td>
                                    <td><?php echo e(__('language.PHONE')); ?></td>
                                    <td><?php echo e(__('language.CONSULTANCYFEES')); ?></td>
                                    <td><?php echo e(__('language.BOOKANAPPOINTMENT')); ?></td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><img style="width:100px" src=<?php echo e(asset('img/doctors/' . $item->doc_image)); ?>>
                                        <td><?php echo e($item->name); ?></td>
                                        <td><?php echo e($item->department); ?></td>
                                        <td><?php echo e($item->days); ?></td>
                                        <td><?php echo e($item->time); ?></td>
                                        <td><?php echo e($item->phone); ?></td>
                                        <td><?php echo e($item->Consultancyfees); ?></td>
                                        <td>
                                            <a href="<?php echo e(route('bookappoint', $item->id)); ?>" class="btn btn-success"><i
                                                    class="fa-solid fa-book"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                        <?php echo e($element->links()); ?> <!-- Display pagination links -->
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\website\resources\views/doctorlist.blade.php ENDPATH**/ ?>