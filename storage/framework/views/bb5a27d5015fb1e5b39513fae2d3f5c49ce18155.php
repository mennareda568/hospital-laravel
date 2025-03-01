<!DOCTYPE html>
<html>

<head>
    <title>Prescription</title>
</head>

<body> 
    <h1>Prescription</h1>
    <table>
        <thead>
            <tr>
                <td><?php echo e(__('language.DOCTORNAME')); ?></td>
                <br>
                <br>
                <td><?php echo e(__('language.DOCTORPHONE')); ?></td>
                <br>
                <br>
                <td><?php echo e(__('language.DEPARTMENT')); ?></td>
                <br>
                <br>
                <td><?php echo e(__('language.DATE')); ?></td>
            </tr>
        </thead>
        <tbody>
      

                <tr>
                    <td><?php echo e($prescription->doctor); ?></td>


                    <td><?php echo e($prescription->doctorphone); ?></td>


                    <td><?php echo e($prescription->department); ?></td>


                    <td><?php echo e($prescription->created_at); ?></td>
                </tr>
        </tbody>
    </table>

    <br>
    <br>
    <br>

    <table>
        <thead>
            <tr>
                <td><?php echo e(__('language.PATIENTNAME')); ?></td>
                <br>
                <br>

                <td><?php echo e(__('language.PATIENTAGE')); ?></td>
            </tr>
        </thead>
        <tbody>

                <tr>
                    <td><?php echo e($prescription->patientname); ?></td>
                    <td><?php echo e($prescription->patientage); ?></td>
                </tr>
        </tbody>
    </table>
    <br>
    <br>
    <br>


    <table>
        <thead>
            <tr>
                <td><?php echo e(__('language.MEDICINE')); ?></td>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td><?php echo e($prescription->medicine); ?></td>
                </tr>
        </tbody>
    </table>
  
</body>

</html>
<?php /**PATH D:\website\resources\views/prescriptions/pdf.blade.php ENDPATH**/ ?>