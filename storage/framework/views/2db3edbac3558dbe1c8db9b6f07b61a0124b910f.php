<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 m-auto">
            <form enctype="multipart/form-data" method="post" action="<?php echo e(route('saveuser')); ?>">
                <?php echo csrf_field(); ?>
                <label><?php echo e(__('language.USERNAME')); ?></label>
                <input type="text" name="name" class="form-control mb-4">
                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                 <div class="alert alert-danger"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                <label><?php echo e(__('language.EMAIL')); ?></label>
                <input type="text" name="email" class="form-control mb-4">
                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                 <div class="alert alert-danger"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                <label><?php echo e(__('language.PASSWORD')); ?></label>
                <input type="password" name="password" class="form-control mb-4">
                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                 <div class="alert alert-danger"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>


                <div class="form-group">
                    <label class="block">
                        <?php echo e(__('language.ROLE')); ?>

                    </label>
                    <div class="clip-radio radio-primary">
                    <input type="radio" id="rg-female" name="role" value="doctor" >
                    <label for="rg-female">
                        <?php echo e(__('language.DOCTOR')); ?>

                    </label>
                    <input type="radio" id="rg-male" name="role" value="admin">
                    <label for="rg-male">
                        <?php echo e(__('language.ADMIN')); ?>

                    </label>
                    </div>
                    </div>
                <?php $__errorArgs = ['role'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                 <div class="alert alert-danger"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                <input type="submit" value='<?php echo e(__('language.CREATEUSERACCOUNT')); ?>' class="form-control btn btn-success">
            </form>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\website\resources\views/user/create.blade.php ENDPATH**/ ?>