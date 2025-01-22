<!DOCTYPE html>
<html lang="eng">


<!-- Mirrored from www.madebydesignesia.com/themes/rentaly/index-7.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Sep 2023 12:42:58 GMT -->

<head>
    <title>Rentaly - Multipurpose Vehicle Car Rental Website Template</title>
    <link rel="icon" href="images/icon.png" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Rentaly - Multipurpose Vehicle Car Rental Website Template" name="description">
    <meta content="" name="keywords">
    <meta content="" name="author">
    <!-- CSS Files
    ================================================== -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="css/mdb.min.css" rel="stylesheet" type="text/css" id="mdb">
    <link href="css/plugins.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/coloring.css" rel="stylesheet" type="text/css">
    <!-- color scheme -->
    <link id="colors" href="css/colors/scheme-01.css" rel="stylesheet" type="text/css">
</head>

<body onload="initialize()">
    <div id="wrapper">

        <!-- page preloader begin -->
        <div id="de-preloader"></div>
        <!-- page preloader close -->

        <!-- header begin -->
        <?php include("menu.php"); ?>
        <!-- header close -->
        <!-- content begin -->
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>
            <section id="de-carousel" class="no-top no-bottom carousel slide carousel-fade" data-mdb-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators z1000">
                    <li data-mdb-target="#de-carousel" data-mdb-slide-to="0" class="active"></li>
                    <li data-mdb-target="#de-carousel" data-mdb-slide-to="1"></li>
                    <li data-mdb-target="#de-carousel" data-mdb-slide-to="2"></li>
                </ol>

                <!-- Inner -->
                <div class="carousel-inner position-relative">
                    <!-- Single item -->
                    <div class="carousel-item active jarallax">
                        <img src="images/slider/1.jpg" class="jarallax-img" alt="">
                        <div class="mask">
                            <div class="no-top no-bottom">
                                <div class="h-100 v-center">
                                    <div class="container">
                                        <div class="row gx-5 align-items-center " style="color:white;">
                                            <div class="col-lg-6 offset-lg-3 text-center mb-sm-30">
                                                <h1 class="s3 mb-3 wow fadeInUp" style="color:white;">Premium Cars</h1>
                                                <p class="lead wow fadeInUp" data-wow-delay=".3s">Discover the world in
                                                    unparalleled comfort and style.</p>
                                                <div class="spacer-10"></div>
                                                <a class="btn-line mb10 wow fadeInUp" data-wow-delay=".6s" href="#"
                                                    style="color:white; border:1px white solid;">Discover</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single item -->
                    <div class="carousel-item jarallax">
                        <img src="images/slider/2.jpg" class="jarallax-img" alt="">
                        <div class="mask">
                            <div class="no-top no-bottom">
                                <div class="h-100 v-center">
                                    <div class="container">
                                        <div class="row gx-5 align-items-center">
                                            <div class="col-lg-6 offset-lg-3 text-center mb-sm-30" style="color:white;">
                                                <h1 class="s3 mb-3 wow fadeInUp" style="color:white;">First Class</h1>
                                                <p class="lead wow fadeInUp" data-wow-delay=".3s">Creating unforgettable
                                                    moments and exceeding your every expectation.</p>
                                                <div class="spacer-10"></div>
                                                <a class="btn-line mb10 wow fadeInUp" data-wow-delay=".6s" href="#"
                                                    style="color:white; border:1px white solid;">Discover</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single item -->
                    <div class="carousel-item jarallax">
                        <img src="images/slider/3.jpg" class="jarallax-img" alt="">
                        <div class="mask">
                            <div class="no-top no-bottom">
                                <div class="h-100 v-center">
                                    <div class="container">
                                        <div class="row gx-5 align-items-center">
                                            <div class="col-lg-6 offset-lg-3 text-center mb-sm-30" style="color:white;">
                                                <h1 class="s3 mb-3 wow fadeInUp" style="color:white;">Save Drivers</h1>
                                                <p class="lead wow fadeInUp" data-wow-delay=".3s">Our experienced
                                                    drivers are ready to accompany your journey.</p>
                                                <div class="spacer-10"></div>
                                                <a class="btn-line mb10 wow fadeInUp" data-wow-delay=".6s" href="#"
                                                    style="color:white; border:1px white solid;">Discover</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Inner -->

                <!-- Controls -->
                <a class="carousel-control-prev" href="#de-carousel" role="button" data-mdb-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#de-carousel" role="button" data-mdb-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                <div class="de-gradient-edge-bottom"></div>
            </section>

            <section id="section-cars">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 offset-lg-3 text-center">
                            <h2>Our Vehicle Fleet</h2>
                            <p>Driving your dreams to reality with an exquisite fleet of versatile vehicles for
                                unforgettable journeys.</p>
                            <div class="spacer-20"></div>
                        </div>

                        <div id="items-carousel" class="owl-carousel wow fadeIn">

                            <?php
                            include("controller/connection.php");
                            $q = "select * from cars limit 0,5";
                            $data = mysqli_query($con, $q);
                            while ($res = mysqli_fetch_array($data)) {
                                ?>
                                <div class="col-lg-12">
                                    <div class="de-item mb30">
                                        <div class="d-img ">
                                            <img src="<?php echo $res['image']; ?>" class="img-fluid object-fit-fill "
                                                alt="">
                                        </div>
                                        <div class="d-info">
                                            <div class="d-text">
                                                <h4>
                                                    <?php echo $res['name']; ?>
                                                </h4>
                                                <div class="d-item_like">
                                                    <i class="fa fa-heart"></i><span>74</span>
                                                </div>
                                                <div class="d-atr-group">
                                                    <span class="d-atr"><img src="images/icons/1-green.svg" alt="">
                                                        <?php echo $res['seat']; ?>
                                                    </span>
                                                    <span class="d-atr"><img src="images/icons/2-green.svg" alt="">
                                                        <?php echo $res['luggage']; ?>
                                                    </span>
                                                    <span class="d-atr"><img src="images/icons/3-green.svg" alt="">
                                                        <?php echo $res['doors']; ?>
                                                    </span>
                                                    <span class="d-atr"><img src="images/icons/4-green.svg" alt="">
                                                        <?php echo $res['body']; ?>
                                                    </span>
                                                </div>
                                                <div class="d-price">
                                                    Daily rate from <span>₹
                                                        <?php echo $res['price']; ?>
                                                    </span>
                                                    <a class="btn-main" href="cars-list.php">Rent Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>

                    </div>
                </div>
            </section>

            <section class="text-light jarallax">
                <img src="images/background/9.jpg" class="jarallax-img" alt="">
                <div class="container">
                    <div class="row g-5">
                        <div class="col-lg-6 wow fadeInRight">
                            <h2>We offer customers a wide range of commercial cars and luxury cars for any occasion.
                            </h2>
                        </div>
                        <div class="col-lg-6 wow fadeInLeft">
                            At our car rental agency, we believe that everyone deserves to experience the pleasure of
                            driving a reliable and comfortable vehicle, regardless of their budget. We have curated a
                            diverse fleet of well-maintained cars, ranging from sleek sedans to spacious SUVs, all at
                            competitive prices. With our streamlined rental process, you can quickly and conveniently
                            reserve your desired vehicle. Whether you need transportation for a business trip, family
                            vacation, or simply want to enjoy a weekend getaway, we have flexible rental options to
                            accommodate your schedule.
                        </div>
                    </div>
                    <div class="spacer-double"></div>
                    <div class="row text-center">
                        <div class="col-md-3 col-sm-6 mb-sm-30">
                            <div class="de_count transparent text-light wow fadeInUp">
                                <h3 class="timer" data-to="15425" data-speed="3000">0</h3>
                                Hours of Work
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-sm-30">
                            <div class="de_count transparent text-light wow fadeInUp">
                                <h3 class="timer" data-to="8745" data-speed="3000">0</h3>
                                Clients Supported
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-sm-30">
                            <div class="de_count transparent text-light wow fadeInUp">
                                <h3 class="timer" data-to="235" data-speed="3000">0</h3>
                                Awards Winning
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 mb-sm-30">
                            <div class="de_count transparent text-light wow fadeInUp">
                                <h3 class="timer" data-to="15" data-speed="3000">0</h3>
                                Years Experience
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section aria-label="section" class="no-bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 offset-lg-3 text-center">
                            <h2>Our Features</h2>
                            <p>Discover a world of convenience, safety, and customization, paving the way for
                                unforgettable adventures and seamless mobility solutions.</p>
                            <div class="spacer-20"></div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-3">
                            <div class="box-icon s2 p-small mb20 wow fadeInRight" data-wow-delay=".5s">
                                <i class="fa bg-color fa-trophy"></i>
                                <div class="d-inner">
                                    <h4>First class services</h4>
                                    Where luxury meets exceptional care, creating unforgettable moments and exceeding
                                    your every expectation.
                                </div>
                            </div>
                            <div class="box-icon s2 p-small mb20 wow fadeInL fadeInRight" data-wow-delay=".75s">
                                <i class="fa bg-color fa-road"></i>
                                <div class="d-inner">
                                    <h4>24/7 road assistance</h4>
                                    Reliable support when you need it most, keeping you on the move with confidence and
                                    peace of mind.
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <img src="images/misc/car-2.png" alt="" class="img-fluid wow fadeInUp">
                        </div>

                        <div class="col-lg-3">
                            <div class="box-icon s2 d-invert p-small mb20 wow fadeInL fadeInLeft" data-wow-delay="1s">
                                <i class="fa bg-color fa-tag"></i>
                                <div class="d-inner">
                                    <h4>Quality at Minimum Expense</h4>
                                    Unlocking affordable brilliance with elevating quality while minimizing costs for
                                    maximum value.
                                </div>
                            </div>
                            <div class="box-icon s2 d-invert p-small mb20 wow fadeInL fadeInLeft"
                                data-wow-delay="1.25s">
                                <i class="fa bg-color fa-map-pin"></i>
                                <div class="d-inner">
                                    <h4>Free Pick-Up & Drop-Off</h4>
                                    Enjoy free pickup and drop-off services, adding an extra layer of ease to your car
                                    rental experience.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="section-testimonials" class="no-top no-bottom">
                <div class="container">
                    <div class="row g-4 align-items-center">

                        <div class="col-md-4">
                            <div class="de-image-text">
                                <div class="d-text">
                                    <div class="d-quote id-color"><i class="fa fa-quote-right"></i></div>
                                    <h4>Excellent Service! Car Rent Service!</h4>
                                    <blockquote>
                                        I have been using Rentaly for my Car Rental needs for over 5 years now. I have
                                        never had any problems with their service. Their customer support is always
                                        responsive and helpful. I would recommend Rentaly to anyone looking for a
                                        reliable Car Rental provider.
                                        <span class="by">Stepanie Hutchkiss</span>
                                    </blockquote>
                                </div>
                                <img src="images/testimonial/1.jpg" class="img-fluid" alt="">
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="spacer-double sm-hide"></div>
                            <div class="spacer-double sm-hide"></div>
                            <div class="de-image-text">
                                <div class="d-text">
                                    <div class="d-quote id-color"><i class="fa fa-quote-right"></i></div>
                                    <h4>Excellent Service! Car Rent Service!</h4>
                                    <blockquote>
                                        We have been using Rentaly for our trips needs for several years now and have
                                        always been happy with their service. Their customer support is Excellent
                                        Service! and they are always available to help with any issues we have. Their
                                        prices are also very competitive.
                                        <span class="by">Jovan Reels</span>
                                    </blockquote>
                                </div>
                                <img src="images/testimonial/2.jpg" class="img-fluid" alt="">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="spacer-double sm-hide"></div>
                            <div class="spacer-double sm-hide"></div>
                            <div class="spacer-double sm-hide"></div>
                            <div class="spacer-double sm-hide"></div>
                            <div class="de-image-text">
                                <div class="d-text">
                                    <div class="d-quote id-color"><i class="fa fa-quote-right"></i></div>
                                    <h4>Excellent Service! Car Rent Service!</h4>
                                    <blockquote>
                                        Endorsed by industry experts, Rentaly is the Car Rental solution you can trust.
                                        With years of experience in the field, we provide fast, reliable and secure Car
                                        Rental services.
                                        <span class="by">Kanesha Keyton</span>
                                    </blockquote>
                                </div>
                                <img src="images/testimonial/3.jpg" class="img-fluid" alt="">
                            </div>
                        </div>

                    </div>
                </div>
            </section>



            <section class="text-light jarallax" aria-label="section">
                <img src="images/background/3.jpg" alt="" class="jarallax-img">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3">
                            <h1>Let's Your Adventure Begin</h1>
                            <div class="spacer-20"></div>
                        </div>
                        <div class="col-md-3">
                            <i class="fa fa-trophy de-icon mb20"></i>
                            <h4>First Class Services</h4>
                            <p>Where luxury meets exceptional care, creating unforgettable moments and exceeding your
                                every expectation.</p>
                        </div>
                        <div class="col-md-3">
                            <i class="fa fa-road de-icon mb20"></i>
                            <h4>24/7 road assistance</h4>
                            <p>Reliable support when you need it most, keeping you on the move with confidence and peace
                                of mind.</p>
                        </div>
                        <div class="col-md-3">
                            <i class="fa fa-map-pin de-icon mb20"></i>
                            <h4>Free Pick-Up & Drop-Off</h4>
                            <p>Enjoy free pickup and drop-off services, adding an extra layer of ease to your car rental
                                experience.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section id="section-faq">
                <div class="container">
                    <div class="row">
                        <div class="col text-center">
                            <h2>Have Any Questions?</h2>
                            <div class="spacer-20"></div>
                        </div>
                    </div>
                    <div class="row g-custom-x">
                        <div class="col-md-6 wow fadeInUp">
                            <div class="accordion secondary">
                                <div class="accordion-section">
                                    <div class="accordion-section-title" data-tab="#accordion-1">
                                        How do I get started with Car Rental?
                                    </div>
                                    <div class="accordion-section-content" id="accordion-1">
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                            praesentium voluptatum deleniti atque corrupti quos dolores et quas
                                            molestias excepturi sint occaecati cupiditate non provident, similique sunt
                                            in culpa qui officia deserunt mollitia animi, id est laborum et dolorum
                                            fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
                                    </div>
                                    <div class="accordion-section-title" data-tab="#accordion-2">
                                        What is difference for each plan?
                                    </div>
                                    <div class="accordion-section-content" id="accordion-2">
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                            praesentium voluptatum deleniti atque corrupti quos dolores et quas
                                            molestias excepturi sint occaecati cupiditate non provident, similique sunt
                                            in culpa qui officia deserunt mollitia animi, id est laborum et dolorum
                                            fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
                                    </div>
                                    <div class="accordion-section-title" data-tab="#accordion-3">
                                        What kind of Car Rental do I need?
                                    </div>
                                    <div class="accordion-section-content" id="accordion-3">
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                            praesentium voluptatum deleniti atque corrupti quos dolores et quas
                                            molestias excepturi sint occaecati cupiditate non provident, similique sunt
                                            in culpa qui officia deserunt mollitia animi, id est laborum et dolorum
                                            fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 wow fadeInUp">
                            <div class="accordion secondary">
                                <div class="accordion-section">
                                    <div class="accordion-section-title" data-tab="#accordion-b-4">
                                        Why do I need domain name?
                                    </div>
                                    <div class="accordion-section-content" id="accordion-b-4">
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                            praesentium voluptatum deleniti atque corrupti quos dolores et quas
                                            molestias excepturi sint occaecati cupiditate non provident, similique sunt
                                            in culpa qui officia deserunt mollitia animi, id est laborum et dolorum
                                            fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
                                    </div>
                                    <div class="accordion-section-title" data-tab="#accordion-b-5">
                                        What my website protected from hackers?
                                    </div>
                                    <div class="accordion-section-content" id="accordion-b-5">
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                            praesentium voluptatum deleniti atque corrupti quos dolores et quas
                                            molestias excepturi sint occaecati cupiditate non provident, similique sunt
                                            in culpa qui officia deserunt mollitia animi, id est laborum et dolorum
                                            fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
                                    </div>
                                    <div class="accordion-section-title" data-tab="#accordion-b-6">
                                        How do I backup my website?
                                    </div>
                                    <div class="accordion-section-content" id="accordion-b-6">
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                            praesentium voluptatum deleniti atque corrupti quos dolores et quas
                                            molestias excepturi sint occaecati cupiditate non provident, similique sunt
                                            in culpa qui officia deserunt mollitia animi, id est laborum et dolorum
                                            fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section aria-label="section" class="pt40 pb40 text-light" data-bgcolor="#111111">
                <div class="wow fadeInRight d-flex">
                    <div class="de-marquee-list">
                        <div class="d-item">
                            <span class="d-item-txt">SUV</span>
                            <span class="d-item-display">
                                <i class="d-item-dot"></i>
                            </span>
                            <span class="d-item-txt">Hatchback</span>
                            <span class="d-item-display">
                                <i class="d-item-dot"></i>
                            </span>
                            <span class="d-item-txt">Crossover</span>
                            <span class="d-item-display">
                                <i class="d-item-dot"></i>
                            </span>
                            <span class="d-item-txt">Convertible</span>
                            <span class="d-item-display">
                                <i class="d-item-dot"></i>
                            </span>
                            <span class="d-item-txt">Sedan</span>
                            <span class="d-item-display">
                                <i class="d-item-dot"></i>
                            </span>
                            <span class="d-item-txt">Sports Car</span>
                            <span class="d-item-display">
                                <i class="d-item-dot"></i>
                            </span>
                            <span class="d-item-txt">Coupe</span>
                            <span class="d-item-display">
                                <i class="d-item-dot"></i>
                            </span>
                            <span class="d-item-txt">Minivan</span>
                            <span class="d-item-display">
                                <i class="d-item-dot"></i>
                            </span>
                            <span class="d-item-txt">Station Wagon</span>
                            <span class="d-item-display">
                                <i class="d-item-dot"></i>
                            </span>
                            <span class="d-item-txt">Pickup Truck</span>
                            <span class="d-item-display">
                                <i class="d-item-dot"></i>
                            </span>
                            <span class="d-item-txt">Minivans</span>
                            <span class="d-item-display">
                                <i class="d-item-dot"></i>
                            </span>
                            <span class="d-item-txt">Exotic Cars</span>
                            <span class="d-item-display">
                                <i class="d-item-dot"></i>
                            </span>
                        </div>
                    </div>

                    <div class="de-marquee-list">
                        <div class="d-item">
                            <span class="d-item-txt">SUV</span>
                            <span class="d-item-display">
                                <i class="d-item-dot"></i>
                            </span>
                            <span class="d-item-txt">Hatchback</span>
                            <span class="d-item-display">
                                <i class="d-item-dot"></i>
                            </span>
                            <span class="d-item-txt">Crossover</span>
                            <span class="d-item-display">
                                <i class="d-item-dot"></i>
                            </span>
                            <span class="d-item-txt">Convertible</span>
                            <span class="d-item-display">
                                <i class="d-item-dot"></i>
                            </span>
                            <span class="d-item-txt">Sedan</span>
                            <span class="d-item-display">
                                <i class="d-item-dot"></i>
                            </span>
                            <span class="d-item-txt">Sports Car</span>
                            <span class="d-item-display">
                                <i class="d-item-dot"></i>
                            </span>
                            <span class="d-item-txt">Coupe</span>
                            <span class="d-item-display">
                                <i class="d-item-dot"></i>
                            </span>
                            <span class="d-item-txt">Minivan</span>
                            <span class="d-item-display">
                                <i class="d-item-dot"></i>
                            </span>
                            <span class="d-item-txt">Station Wagon</span>
                            <span class="d-item-display">
                                <i class="d-item-dot"></i>
                            </span>
                            <span class="d-item-txt">Pickup Truck</span>
                            <span class="d-item-display">
                                <i class="d-item-dot"></i>
                            </span>
                            <span class="d-item-txt">Minivans</span>
                            <span class="d-item-display">
                                <i class="d-item-dot"></i>
                            </span>
                            <span class="d-item-txt">Exotic Cars</span>
                            <span class="d-item-display">
                                <i class="d-item-dot"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </section>

        </div>
        <!-- content close -->
        <a href="#" id="back-to-top"></a>
        <!-- footer begin -->
        <?php include("footer.php"); ?>
        <!-- footer close -->
    </div>

    <!-- Javascript Files
    ================================================== -->
    <script src="js/plugins.js"></script>
    <script src="js/designesia.js"></script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDgiM7ogCAA2Y5pgSk2KXZfxF5S_1jsptA&amp;libraries=places&amp;callback=initPlaces"
        async="" defer=""></script>

</body>




</html>