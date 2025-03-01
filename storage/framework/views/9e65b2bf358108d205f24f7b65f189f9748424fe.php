<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-10 m-auto">
                <form enctype="multipart/form-data" method="post" action="<?php echo e(route('savebooking')); ?>">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="doctor" value=<?php echo e($result->name); ?>>
                    <input type="hidden" name="doctoremail" value=<?php echo e($result->email); ?>>
                    <input type="hidden" name="department" value=<?php echo e($result->department); ?>>
                    <input type="hidden" name="consultancyfees" value=<?php echo e($result->Consultancyfees); ?>>
                    <input type="hidden" name="days" value=<?php echo e($result->days); ?>>
                    <input type="hidden" name="time" value=<?php echo e($result->time); ?>>
                    <input type="hidden" name="patientemail" value="<?php echo e(Auth::user()->email); ?>">

                    <label><?php echo e(__('language.NAME')); ?></label>
                    <input type="text" name="patientname" class="form-control mb-4" value=<?php echo e($data->name); ?>>
                    <?php $__errorArgs = ['patientname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="alert alert-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                    <label><?php echo e(__('language.AGE')); ?></label>
                    <input type="text" name="patientage" class="form-control mb-4" value=<?php echo e($data->age); ?>>
                    <?php $__errorArgs = ['patientage'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="alert alert-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                    <label><?php echo e(__('language.PHONE')); ?></label>
                    <input type="text" name="patientphone" class="form-control mb-4" value=<?php echo e($data->phone); ?>>
                    <?php $__errorArgs = ['patientphone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="alert alert-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                    <input type="submit" value='<?php echo e(__('language.BOOKANAPPOINTMENT')); ?>'
                        class="form-control btn btn-success">

                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\website\resources\views/patientbooking/create.blade.php ENDPATH**/ ?>