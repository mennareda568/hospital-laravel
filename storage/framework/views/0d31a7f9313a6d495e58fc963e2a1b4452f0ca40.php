<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href=<?php echo e(route('home')); ?>>
                    <?php echo e(__('language.DASHBOARD')); ?>

                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">


                        <?php if(Auth::user() && Auth::user()->role == 'admin'): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('admin')); ?>"><?php echo e(__('language.ADMINS')); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('message')); ?>"><?php echo e(__('language.MESSAGES')); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn btn-success"
                                    href="<?php echo e(route('createuser')); ?>"><?php echo e(__('language.ADDADMINDOCTOR')); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn btn-primary ml-3"
                                    href="<?php echo e(route('pass')); ?>"><?php echo e(__('language.CHANGEMYPASSWORD')); ?></a>
                            </li>
                        <?php endif; ?>

                        <?php if(Auth::user() && Auth::user()->role == 'patient'): ?>
                            <li class="nav-item">
                                <a class="nav-link ml-3 btn btn-warning"
                                    href="<?php echo e(route('notification')); ?>"><?php echo e(__('language.MYNOTIFICATION')); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn btn-success ml-3"
                                    href="<?php echo e(route('profedit', Auth::user()->id)); ?>"><?php echo e(__('language.UPDATEMYPROFILE')); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn btn-primary ml-3"
                                    href="<?php echo e(route('passpatient')); ?>"><?php echo e(__('language.CHANGEMYPASSWORD')); ?></a>
                            </li>
                        <?php endif; ?>

                        <?php if(Auth::user() && Auth::user()->role == 'doctor'): ?>
                            <li class="nav-item">
                                <a class="nav-link ml-3 btn btn-success"
                                    href="<?php echo e(route('editdoctor', Auth::user()->id)); ?>"><?php echo e(__('language.UPDATEMYPROFILE')); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn btn-primary ml-3"
                                    href="<?php echo e(route('password')); ?>"><?php echo e(__('language.CHANGEMYPASSWORD')); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link ml-3 btn btn-warning"
                                    href="<?php echo e(route('editdays', Auth::user()->id)); ?>"><?php echo e(__('language.UPDATEMYDAYS')); ?></a>
                            </li>
                        <?php endif; ?>

                        <?php $__currentLoopData = LaravelLocalization::getSupportedLocales(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="nav-item">
                                <a class="nav-link" rel="alternate" hreflang="<?php echo e($localeCode); ?>"
                                    href="<?php echo e(LaravelLocalization::getLocalizedURL($localeCode, null, [], true)); ?>">
                                    <?php echo e($properties['native']); ?>

                                </a>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                            </li>
                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?>

                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>

</body>

</html>
<?php /**PATH D:\website\resources\views/layouts/app.blade.php ENDPATH**/ ?>