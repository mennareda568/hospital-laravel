
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-10 m-auto">
                <form enctype="multipart/form-data" action="<?php echo e(route('updatedays')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="old_id" class="form-control mb-4" value="<?php echo e(Auth::user()->id); ?>">

                    <label><?php echo e(__('language.DAYS')); ?></label>
                    <input type="text" name="days" class="form-control mb-4" value="<?php echo e($result->days); ?>">
                    <?php $__errorArgs = ['days'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="alert alert-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                    <label><?php echo e(__('language.TIME')); ?></label>
                    <input type="text" name="time" class="form-control mb-4" value="<?php echo e($result->time); ?>">
                    <?php $__errorArgs = ['time'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="alert alert-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <label><?php echo e(__('language.CONSULTANCYFEES')); ?></label>
                    <input type="text" name="Consultancyfees" class="form-control mb-4"
                        value="<?php echo e($result->Consultancyfees); ?>">
                    <?php $__errorArgs = ['Consultancyfees'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="alert alert-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                    <input type="submit" value='<?php echo e(__('language.UPDATEMYPROFILE')); ?>'
                        class="form-control btn btn-success">

                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\website\resources\views/Doctor/update.blade.php ENDPATH**/ ?>