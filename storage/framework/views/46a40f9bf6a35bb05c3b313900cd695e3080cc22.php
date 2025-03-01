<!DOCTYPE html>
<html>

<head>
    <title>Prescription</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center">Alpha Health Care</h1>
    <span class="mt-3"><?php echo e(__('language.DATE')); ?>:</span>
    <span><?php echo e(date('Y-m-d')); ?></span>
    <hr>
    <span><?php echo e(__('language.DOCTORNAME')); ?>:</span>
    <span><?php echo e($doctor); ?></span>
    <br>

    <span><?php echo e(__('language.DOCTORPHONE')); ?>:</span>
    <span><?php echo e($doctorphone); ?></span>
    <br>

    <span><?php echo e(__('language.DEPARTMENT')); ?>:</span>
    <span><?php echo e($department); ?></span>
    <br>
<hr>
    <span><?php echo e(__('language.PATIENTNAME')); ?>:</span>
    <span><?php echo e($patientname); ?></span>
    <br>

    <span><?php echo e(__('language.PATIENTAGE')); ?>:</span>
    <span><?php echo e($patientage); ?></span>
    <br>
<hr>
    <span class="text-center"><?php echo e(__('language.MEDICINE')); ?>:</span>
    <br>
    <span><?php echo e($medicine); ?></span>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>
</html>
<?php /**PATH D:\github\resources\views/prescription/pdf.blade.php ENDPATH**/ ?>