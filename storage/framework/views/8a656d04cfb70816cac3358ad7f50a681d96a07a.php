<?php $__env->startSection('content'); ?>
    <!-- ################# Slider Starts Here#######################--->

    <div class="slider-detail">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            </ol>





            <div class="carousel-inner">
                <div class="carousel-item ">
                    <img class="d-block w-100" src=<?php echo e(asset('img/slider/slider_2.jpg')); ?> alt="Second slide">
                    <div class="carousel-cover"></div>
                    <div class="carousel-caption vdg-cur d-none d-md-block">
                        <h5 class="animated bounceInDown">Hospital Management System</h5>



                    </div>
                </div>

                <div class="carousel-item active">
                    <img class="d-block w-100" src=<?php echo e(asset('img/slider/slider_3.jpg')); ?> alt="Second slide">
                    <div class="carousel-cover"></div>
                    <div class="carousel-caption vdg-cur d-none d-md-block">
                        <h5 class="animated bounceInDown">Hospital Management System</h5>



                    </div>

                </div>

            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


    </div>

 

    <!--  ************************* Gallery Starts Here ************************** -->
    <div id="gallery" class="gallery">
        <div class="container">
            <div class="inner-title">

                <h2>Our Gallery</h2>
                <p>View Our Gallery</p>
            </div>
            <div class="row">


                <div class="gallery-filter d-none d-sm-block">
                    <button class="btn btn-default filter-button" data-filter="all">All</button>
                    <button class="btn btn-default filter-button" data-filter="hdpe">Dental</button>
                    <button class="btn btn-default filter-button" data-filter="sprinkle">Cardiology</button>
                    <button class="btn btn-default filter-button" data-filter="spray"> Neurology</button>
                    <button class="btn btn-default filter-button" data-filter="irrigation">Laboratry</button>
                </div>
                <br />



                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                    <img src=<?php echo e(asset('img/gallery/gallery_01.jpg')); ?> class="img-responsive">
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter sprinkle">
                    <img src=<?php echo e(asset('img/gallery/gallery_02.jpg')); ?> class="img-responsive">
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                    <img src=<?php echo e(asset('img/gallery/gallery_03.jpg')); ?> class="img-responsive">
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
                    <img src=<?php echo e(asset('img/gallery/gallery_04.jpg')); ?> class="img-responsive">
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                    <img src=<?php echo e(asset('img/gallery/gallery_05.jpg')); ?> class="img-responsive">
                </div>



                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                    <img src=<?php echo e(asset('img/gallery/gallery_06.jpg')); ?> class="img-responsive">
                </div>

            </div>
        </div>


    </div>
    <!-- ######## Gallery End ####### -->


    <!--  ************************* Contact Us Starts Here ************************** -->

    <section id="contact_us" class="contact-us-single">
        <div class="row no-margin">

            <div class="col-sm-12 cop-ck">
                <?php if(session('message')): ?>
                <h4 class="alert alert-success"><?php echo e(session('message')); ?></h4>
                <?php endif; ?>
                <form method="post" action=<?php echo e(route('storemsg')); ?> enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                        <h4>Contact Form</h4>
                    <div class="row cf-ro">
                        <div class="col-sm-3"><label>Enter Name :</label></div>
                        <div class="col-sm-8">
                        <input type="text" placeholder="Enter Name" name="name"
                                class="form-control input-sm" required></div>
                    </div>
                    <div class="row cf-ro">
                        <div class="col-sm-3"><label>Email Address :</label></div>
                        <div class="col-sm-8"><input type="text" name="email" placeholder="Enter Email Address"
                                class="form-control input-sm" required></div>
                    </div>
                    <div class="row cf-ro">
                        <div class="col-sm-3"><label>Mobile Number:</label></div>
                        <div class="col-sm-8"><input type="text" name="mobil" placeholder="Enter Mobile Number"
                                class="form-control input-sm" required></div>
                    </div>
                    <div class="row cf-ro">
                        <div class="col-sm-3"><label>Enter Message:</label></div>
                        <div class="col-sm-8">
                            <textarea rows="5" placeholder="Enter Your Message" class="form-control input-sm" name="message" required></textarea>
                        </div>
                    </div>
                    <div class="row cf-ro">
                        <div class="col-sm-3"><label></label></div>
                        <div class="col-sm-8">
                            <button class="btn btn-success btn-sm" type="submit" name="submit">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.users', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\website\resources\views/welcome.blade.php ENDPATH**/ ?>