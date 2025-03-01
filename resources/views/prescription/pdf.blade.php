<!DOCTYPE html>
<html>

<head>
    <title>Prescription</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center">Alpha Health Care</h1>
    <span class="mt-3">{{ __('language.DATE') }}:</span>
    <span>{{ date('Y-m-d') }}</span>
    <hr>
    <span>{{ __('language.DOCTORNAME') }}:</span>
    <span>{{ $doctor }}</span>
    <br>

    <span>{{ __('language.DOCTORPHONE') }}:</span>
    <span>{{ $doctorphone }}</span>
    <br>

    <span>{{ __('language.DEPARTMENT') }}:</span>
    <span>{{ $department }}</span>
    <br>
<hr>
    <span>{{ __('language.PATIENTNAME') }}:</span>
    <span>{{ $patientname }}</span>
    <br>

    <span>{{ __('language.PATIENTAGE') }}:</span>
    <span>{{ $patientage }}</span>
    <br>
<hr>
    <span class="text-center">{{ __('language.MEDICINE') }}:</span>
    <br>
    <span>{{ $medicine }}</span>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>
</html>
