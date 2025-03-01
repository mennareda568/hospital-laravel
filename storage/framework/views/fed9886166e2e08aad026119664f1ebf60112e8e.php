<?php $__env->startSection('content'); ?>
    <div class="container mt-5">
        <?php if(Auth::user() && Auth::user()->role == 'patient'): ?>
            <?php if(session('message')): ?>
                <h4 class="alert alert-success"><?php echo e(session('message')); ?></h4>
            <?php endif; ?>
            <div class="row">
                <div class="col-md-4 mt-5">
                    <div class="card">
                        <div class="card-header">
                            <div class="text-center">
                                <a href="<?php echo e(route('myprofile', Auth::user()->id)); ?>">
                                    <?php echo e(__('language.MYPROFILE')); ?>

                                </a>
                                <i class="fa-solid fa-user fa-2xl"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-5">
                    <div class="card">
                        <div class="card-header">
                            <div class="text-center">
                                <a href="<?php echo e(route('relation')); ?>">
                                    <?php echo e(__('language.MYBOOKINGS')); ?>

                                </a>
                                <i class="fa-solid fa-book-medical fa-2xl"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-5">
                    <div class="card">
                        <div class="card-header">
                            <div class="text-center">
                                <a href="<?php echo e(route('doctorlist')); ?>">
                                    <?php echo e(__('language.DOCTORS')); ?>

                                </a>
                                <i class="fa-solid fa-user-doctor fa-2xl"></i>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        <?php endif; ?>
        <?php if(Auth::user() && Auth::user()->role == 'admin'): ?>
            <?php if(session('messageadmin')): ?>
                <h4 class="alert alert-success"><?php echo e(session('messageadmin')); ?></h4>
            <?php endif; ?>

            <div class="row mt-5">
                <div class="col-md-4 m-auto ">
                    <div class="card">
                        <div class="card-header">
                            <div class="text-center">
                                <a href="<?php echo e(route('doctor')); ?>">
                                    <?php echo e(__('language.DOCTORS')); ?>

                                </a>
                                <i class="fa-solid fa-user-doctor fa-2xl"></i>
                            </div>
                        </div>
                        <div class="card-body text-center ">
                            <?php echo e($countdoctors); ?>

                        </div>
                    </div>
                </div>

                <div class="col-md-4 m-auto ">
                    <div class="card">
                        <div class="card-header">
                            <div class="text-center">
                                <a href="<?php echo e(route('department')); ?>">
                                    <?php echo e(__('language.DEPARTMENT')); ?>

                                </a>
                                <i class="fa-solid fa-list fa-2xl"></i>
                            </div>
                        </div>
                        <div class="card-body text-center ">
                            <?php echo e($countdepart); ?>


                        </div>
                    </div>
                </div>

                <div class="col-md-4 m-auto ">
                    <div class="card">
                        <div class="card-header">
                            <div class="text-center">
                                <a href="<?php echo e(route('allbooking')); ?>">
                                    <?php echo e(__('language.ALLBOOKING')); ?>

                                </a>
                                <i class="fa-solid fa-book-medical fa-2xl"></i>
                            </div>
                        </div>
                        <div class="card-body text-center ">
                            <?php echo e($countpatibook); ?>

                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <?php if(Auth::user() && Auth::user()->role == 'doctor'): ?>
            <?php if(session('messagedoc')): ?>
                <h4 class="alert alert-success"><?php echo e(session('messagedoc')); ?></h4>
            <?php endif; ?>
            <div class="row mt-5">
                <div class="col-md-5 ">
                    <div class="card">
                        <div class="card-header text-center">
                            <a href="<?php echo e(route('myapp')); ?>">
                                <?php echo e(__('language.MYAPPOINTMENTS')); ?>

                            </a>
                            <i class="fa-regular fa-calendar-check fa-2xl"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 ">
                    <div class="card">
                        <div class="card-header">
                            <div class="text-center">
                                <a href="<?php echo e(route('patient')); ?>">
                                    <?php echo e(__('language.MYPATIENTS')); ?>

                                </a>
                                <i class="fa-solid fa-hospital-user fa-2xl"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </div>
    <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\website\resources\views/home.blade.php ENDPATH**/ ?>