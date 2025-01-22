<?php 
    session_start();
?>
<section class="bg-section" style="background-image:url(images/background/2.jpg);">
    <!-- <img src="images/background/2.jpg" class="jarallax-img" alt="" /> -->
    <div class="container ">
        <div class="row align-items-center">
            <div class="row">
                <div class="spacer-single sm-hide"></div>
                <div class="col-lg-12 text-light">
                    <h1 class="mb-2">
                        Looking for a <span class="id-color">vehicle</span>? You're at the
                        right place.
                    </h1>
                    <div class="spacer-single"></div>
                </div>

                <div class="col-lg-12 bg-white">
                    <div class="spacer-single sm-hide"></div>
                    <div class="p-4 rounded-3 shadow-soft" data-bgcolor="#ffffff">
                        <form name="contactForm" id="find" method="post">
                            <div id="step-1" class="row justify-content-center">
                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <h5>Pick Up Location</h5>
                                            <input type="text" name="PickupLocation"
                                                placeholder="Enter your pickup location" autocomplete="off"
                                                class="form-control"
                                                value="<?php if(isset($_SESSION['pickupLocation'])) echo $_SESSION['pickupLocation']; ?>" />
                                            <p class="py-1 pt-2" name="valid" id="valid">Please Enter Pick Up Location
                                            </p>
                                            <div class="jls-address-preview jls-address-preview--hidden">
                                                <div class="jls-address-preview__header"></div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 mb20">
                                            <h5>Drop Off Location</h5>
                                            <input type="text" name="DropLocation"
                                                placeholder="Enter your dropoff location" autocomplete="off"
                                                class="form-control"
                                                value="<?php if(isset($_SESSION['dropLocation'])) echo $_SESSION['dropLocation']; ?>" />
                                            <p class="py-1 pt-2" name="valid" id="valid">Please Enter Pick Up Location
                                            </p>
                                            <div class="jls-address-preview jls-address-preview--hidden">
                                                <div class="jls-address-preview__header"></div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 mb20">
                                            <h5>Pick Up Date & Time</h5>

                                            <div class="date-time-field " style="width:25rem;">
                                                <input class="rounded-2" type="text" name="PickUpDate" id="pickup"
                                                    placeholder="Pickup Date" readonly
                                                    value="<?php if(isset($_SESSION['pickupDate'])) echo $_SESSION['pickupDate']; ?>" />
                                                <input type="date" id="date1" hidden />

                                            </div>
                                            <p class="py-1 pt-2" name="valid" id="valid">Please Enter Pick Up Location
                                            </p>
                                        </div>

                                        <div class="col-lg-6 mb20">
                                            <h5>Return Date & Time</h5>
                                            <div class="date-time-field" style="width:25rem;">
                                                <input class="rounded-2" type="text" id="returndate" name="DropDate"
                                                    placeholder="Return Date" readonly
                                                    value="<?php if(isset($_SESSION['dropDate'])) echo $_SESSION['dropDate']; ?>" />

                                            </div>
                                            <p class="py-1 pt-2" name="valid" id="valid">Please Enter Pick Up Location
                                            </p>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-12">

                                    <input type="submit" id="send_message" value="Find a Vehicle"
                                        class="btn-main pull-right" />
                                </div>
                                <div class="d-flex justify-content-end">
                                    <p class="px-4 h6 text-danger py-2  d-none" id="invalid-date">Invalid Dates</p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>