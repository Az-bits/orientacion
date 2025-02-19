<?php $plantilla = 'assets/plantilla-test/' ?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from jthemes.net/themes/html/quizo/version-9/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Apr 2024 22:55:52 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quizo HTML Template - V.9</title>
    <!-- FontAwesome-cdn include -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Google fonts include -->
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700;800&amp;family=Lato&amp;display=swap" rel="stylesheet">
    <!-- Bootstrap-css include -->
    <link rel="stylesheet" href="<?= base_url($plantilla) ?>assets/css/bootstrap.min.css">
    <!-- Animate-css include -->
    <link rel="stylesheet" href="<?= base_url($plantilla) ?>assets/css/animate.min.css">
    <!-- Main-StyleSheet include -->
    <link rel="stylesheet" href="<?= base_url($plantilla) ?>assets/css/style.css">
</head>

<body>
    <div class="wrapper position-relative overflow-hidden">
        <div class="container-md-fluid p-3 p-lg-0 me-5">
            <div class="row">
                <div class="col-xl-4">
                    <div class="form_logo position-absolute">
                        <a href="index-2.html">
                            <img src="<?= base_url($plantilla) ?>assets/images/logo/logo.png" alt="image-not-found">
                        </a>
                    </div>
                    <div class="steps_area step_area_fixed d-none d-xl-block">
                        <div class="image_holder">
                            <img class="overflow-hidden" src="<?= base_url($plantilla) ?>assets/images/background/bg_0.png" alt="image-not-found">
                        </div>
                        <div class="progress_bar step_items position-absolute">
                            <div class="step d-block text-center bg-white position-relative active current">1</div>
                            <div class="step d-block text-center bg-white position-relative">2
                            </div>
                            <div class="step d-block text-center bg-white position-relative">3
                            </div>
                            <div class="step d-block text-center bg-white position-relative last">4
                            </div>
                            <div class="step d-block text-center bg-white position-relative active current">1</div>
                            <div class="step d-block text-center bg-white position-relative">2
                            </div>
                            <div class="step d-block text-center bg-white position-relative">3
                            </div>
                            <div class="step d-block text-center bg-white position-relative last">4
                            </div>
                        </div>
                        <div class="count_box d-flex flex-row mt-5 rounded-pill position-absolute">
                            <div class="count_clock ps-3">
                                <img src="<?= base_url($plantilla) ?>assets/images/clock/clock.png" alt="image-not-found">
                            </div>
                            <div class="count_title px-2">
                                <h4 class="text-white pe-5">Quiz</h4>
                                <span class="text-white">Time start</span>
                            </div>
                            <div class="count_number p-3 d-flex justify-content-around align-items-center position-relative overflow-hidden bg-white rounded-pill countdown_timer" data-countdown="2022/10/24">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 ps-5 pt-5">
                    <form class="multisteps_form" id="wizard" method="POST" action="https://jthemes.net/themes/html/quizo/mail.php">
                        <!------------------- Step-1 -------------------->
                        <div class="multisteps_form_panel active">
                            <!-- form-content -->
                            <div class="form_content">
                                <div class="step_content d-flex justify-content-between pt-5 pb-2">
                                    <h4>QUIZ</h4>
                                    <span class="text-end text-uppercase">question 1 to 4</span>
                                </div>
                                <div class="step_progress_bar">
                                    <div class="progress rounded-pill">
                                        <div class="progress-bar" style="width:25%"></div>
                                    </div>
                                </div>
                                <div class="question_title py-5">
                                    <h1 class="text-capitalize">What Option Best Describes Clyde’s Activity Level ?</h1>
                                </div>
                                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 form_items radio-list">
                                    <div class="col">
                                        <label id="opt_1" class="step_1 d-flex flex-column bg-white text-center animate__animated animate__fadeInRight animate_25ms">
                                            <div class="step_box_icon">
                                                <img src="<?= base_url($plantilla) ?>assets/images/item-img/item_0.png" alt="image-not-found">
                                            </div>
                                            <span class="step_box_text pt-2">
                                                None
                                            </span>
                                            <p class="step_box_desc">
                                                My horse likes to relax
                                            </p>
                                            <input for="opt_1" type="radio" class="required" name="stp_1_select_option" value="None">
                                        </label>
                                    </div>
                                    <div class="col">
                                        <label id="opt_2" class="step_1 d-flex flex-column bg-white text-center animate__animated animate__fadeInRight animate_50ms">
                                            <div class="step_box_icon"><img src="<?= base_url($plantilla) ?>assets/images/item-img/item_1.png" alt="image-not-found">
                                            </div>
                                            <span class="step_box_text pt-2">Light</span>
                                            <p class="step_box_desc">My horse likes to relax</p>
                                            <input for="opt_2" type="radio" name="stp_1_select_option" value="Light">
                                        </label>
                                    </div>
                                </div>
                                <div class="row col-md-10 mt-lg-5 mt-4 conditional" data-condition="#condition1 && stp_1_select_option == 'Moderate'">
                                    <div class="form-inner-area">
                                        <label for="field">
                                            <h6>Which Sector</h6>
                                        </label>
                                        <input type="text" name="field" class="form-control required" minlength="2" placeholder="Write Here">
                                    </div>
                                </div>
                            </div>
                            <!-- Form-btn -->
                            <div class="form_btn pt-5 d-flex justify-content-between">
                                <button type="button" class="js-btn-next next_btn text-uppercase text-white" id="nextBtn">Next
                                    Question <span><i class="fas fa-arrow-right"></i></span></button>
                            </div>
                        </div>
                        <!------------------- Step-2 -------------------->
                        <div class="multisteps_form_panel">
                            <!-- form-content -->
                            <div class="form_content">
                                <div class="step_content d-flex justify-content-between pt-5 pb-2">
                                    <h4>QUIZ</h4>
                                    <span class="text-end text-uppercase">question 2 to 4</span>
                                </div>
                                <div class="step_progress_bar">
                                    <div class="progress rounded-pill">
                                        <div class="progress-bar" style="width:50%"></div>
                                    </div>
                                </div>
                                <div class="question_title py-5">
                                    <h1 class="text-capitalize">The islands with coral covered surfaces in Bay of Bengal are</h1>
                                </div>
                                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-4 form_items check-list">
                                    <div class="col">
                                        <label id="opt_5" class="step_2 d-flex flex-column bg-white text-center animate__animated animate__fadeInRight animate_25ms">
                                            <div class="step_box_icon">
                                                <img src="<?= base_url($plantilla) ?>assets/images/item-img/item_0.png" alt="image-not-found">
                                            </div>
                                            <span class="step_box_text pt-2">
                                                Andaman islands
                                            </span>

                                            <input for="opt_5" type="checkbox" class="required" name="stp_2_select_option" value="Andaman islands">
                                        </label>
                                    </div>
                                    <div class="col">
                                        <label id="opt_6" class="step_2 d-flex flex-column bg-white text-center animate__animated animate__fadeInRight animate_50ms">
                                            <div class="step_box_icon">
                                                <img src="<?= base_url($plantilla) ?>assets/images/item-img/item_1.png" alt="image-not-found">
                                            </div>
                                            <span class="step_box_text pt-2">
                                                Nicobar islands
                                            </span>

                                            <input for="opt_6" type="checkbox" name="stp_2_select_option" value="Nicobar islands">
                                        </label>
                                    </div>
                                    <div class="col">
                                        <label id="opt_7" class="step_2 d-flex flex-column bg-white text-center animate__animated animate__fadeInRight animate_100ms">
                                            <div class="step_box_icon">
                                                <img src="assets/images/item-img/item_2.png" alt="image-not-found">
                                            </div>
                                            <span class="step_box_text pt-2">
                                                both (a) and (b)
                                            </span>

                                            <input for="opt_7" type="checkbox" name="stp_2_select_option" value="both (a) and (b)">
                                        </label>
                                    </div>
                                    <div class="col">
                                        <label id="opt_8" class="step_2 d-flex flex-column bg-white text-center animate__animated animate__fadeInRight animate_150ms">
                                            <div class="step_box_icon">
                                                <img src="<?= base_url($plantilla) ?>assets/images/item-img/item_3.png" alt="image-not-found">
                                            </div>
                                            <span class="step_box_text pt-2">
                                                None of the above
                                            </span>

                                            <input for="opt_8" type="checkbox" name="stp_2_select_option" value="None of the above">
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!-- Form-btn -->
                            <div class="form_btn pt-5 d-flex justify-content-between">
                                <button type="button" class="js-btn-prev prev_btn text-uppercase bg-white" id="prevBtn"><span><i class="fas fa-arrow-left"></i></span> Last
                                    Question</button>
                                <button type="button" class="js-btn-next next_btn text-uppercase text-white" id="nextBtn">Next
                                    Question <span><i class="fas fa-arrow-right"></i></span></button>
                            </div>
                        </div>
                        <!------------------- Step-3 -------------------->
                        <div class="multisteps_form_panel">
                            <!-- form-content -->
                            <div class="form_content">
                                <div class="step_content d-flex justify-content-between pt-5 pb-2">
                                    <h4>QUIZ</h4>
                                    <span class="text-end text-uppercase">question 3 to 4</span>
                                </div>
                                <div class="step_progress_bar">
                                    <div class="progress rounded-pill">
                                        <div class="progress-bar" style="width:75%"></div>
                                    </div>
                                </div>
                                <div class="question_title py-5">
                                    <h1 class="text-capitalize">The length of the day is determined in</h1>
                                </div>
                                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 form_items radio-list">
                                    <div class="col">
                                        <label id="opt_9" class="step_3 d-flex flex-column bg-white text-center animate__animated animate__fadeInRight animate_25ms">
                                            <div class="step_box_icon">
                                                <img src="<?= base_url($plantilla) ?>assets/images/item-img/item_0.png" alt="image-not-found">
                                            </div>
                                            <span class="step_box_text pt-2">
                                                solar terms
                                            </span>
                                            <p class="step_box_desc">
                                                My horse likes to relax
                                            </p>
                                            <input for="opt_9" type="radio" class="required" name="stp_3_select_option" value="solar terms">
                                        </label>
                                    </div>
                                    <div class="col">
                                        <label id="opt_10" class="step_3 d-flex flex-column bg-white text-center animate__animated animate__fadeInRight animate_50ms">
                                            <div class="step_box_icon">
                                                <img src="<?= base_url($plantilla) ?>assets/images/item-img/item_1.png" alt="image-not-found">
                                            </div>
                                            <span class="step_box_text pt-2">
                                                astronomical units
                                            </span>
                                            <p class="step_box_desc">
                                                My horse likes to relax
                                            </p>
                                            <input for="opt_10" type="radio" name="stp_3_select_option" value="astronomical
                                    units">
                                        </label>
                                    </div>
                                    <div class="col">
                                        <label id="opt_11" class="step_3 d-flex flex-column bg-white text-center animate__animated animate__fadeInRight animate_100ms">
                                            <div class="step_box_icon">
                                                <img src="<?= base_url($plantilla) ?>assets/images/item-img/item_2.png" alt="image-not-found">
                                            </div>
                                            <span class="step_box_text pt-2">
                                                length of the hours
                                            </span>
                                            <p class="step_box_desc">
                                                My horse likes to relax
                                            </p>
                                            <input for="opt_11" type="radio" name="stp_3_select_option" value="length of
                                    the hours">
                                        </label>
                                    </div>
                                    <div class="col">
                                        <label id="opt_12" class="step_3 d-flex flex-column bg-white text-center animate__animated animate__fadeInRight animate_150ms">
                                            <div class="step_box_icon">
                                                <img src="<?= base_url($plantilla) ?>assets/images/item-img/item_3.png" alt="image-not-found">
                                            </div>
                                            <span class="step_box_text pt-2">
                                                None of the above
                                            </span>
                                            <p class="step_box_desc">
                                                My horse likes to relax
                                            </p>
                                            <input for="opt_12" type="radio" name="stp_3_select_option" value="None of
                                    the above">
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!-- Form-btn -->
                            <div class="form_btn pt-5 d-flex justify-content-between">
                                <button type="button" class="js-btn-prev prev_btn text-uppercase bg-white" id="prevBtn"><span><i class="fas fa-arrow-left"></i></span> Last
                                    Question</button>
                                <button type="button" class="js-btn-next next_btn text-uppercase text-white" id="nextBtn">Next
                                    Question <span><i class="fas fa-arrow-right"></i></span></button>
                            </div>
                        </div>
                        <div class="multisteps_form_panel">
                            <!-- form-content -->
                            <div class="form_content">
                                <div class="step_content d-flex justify-content-between pt-5 pb-2">
                                    <h4>QUIZ</h4>
                                    <span class="text-end text-uppercase">question 3 to 4</span>
                                </div>
                                <div class="step_progress_bar">
                                    <div class="progress rounded-pill">
                                        <div class="progress-bar" style="width:75%"></div>
                                    </div>
                                </div>
                                <div class="question_title py-5">
                                    <h1 class="text-capitalize">The length of the day is determined in 11</h1>
                                </div>
                                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 form_items radio-list">
                                    <div class="col">
                                        <label id="opt_9" class="step_3 d-flex flex-column bg-white text-center animate__animated animate__fadeInRight animate_25ms">
                                            <div class="step_box_icon">
                                                <img src="<?= base_url($plantilla) ?>assets/images/item-img/item_0.png" alt="image-not-found">
                                            </div>
                                            <span class="step_box_text pt-2">
                                                solar terms
                                            </span>
                                            <p class="step_box_desc">
                                                My horse likes to relax
                                            </p>
                                            <input for="opt_9" type="radio" class="required" name="stp_3_select_option" value="solar terms">
                                        </label>
                                    </div>
                                    <div class="col">
                                        <label id="opt_10" class="step_3 d-flex flex-column bg-white text-center animate__animated animate__fadeInRight animate_50ms">
                                            <div class="step_box_icon">
                                                <img src="<?= base_url($plantilla) ?>assets/images/item-img/item_1.png" alt="image-not-found">
                                            </div>
                                            <span class="step_box_text pt-2">
                                                astronomical units
                                            </span>
                                            <p class="step_box_desc">
                                                My horse likes to relax
                                            </p>
                                            <input for="opt_10" type="radio" name="stp_3_select_option" value="astronomical
                                    units">
                                        </label>
                                    </div>
                                    <div class="col">
                                        <label id="opt_11" class="step_3 d-flex flex-column bg-white text-center animate__animated animate__fadeInRight animate_100ms">
                                            <div class="step_box_icon">
                                                <img src="<?= base_url($plantilla) ?>assets/images/item-img/item_2.png" alt="image-not-found">
                                            </div>
                                            <span class="step_box_text pt-2">
                                                length of the hours
                                            </span>
                                            <p class="step_box_desc">
                                                My horse likes to relax
                                            </p>
                                            <input for="opt_11" type="radio" name="stp_3_select_option" value="length of
                                    the hours">
                                        </label>
                                    </div>
                                    <div class="col">
                                        <label id="opt_12" class="step_3 d-flex flex-column bg-white text-center animate__animated animate__fadeInRight animate_150ms">
                                            <div class="step_box_icon">
                                                <img src="<?= base_url($plantilla) ?>assets/images/item-img/item_3.png" alt="image-not-found">
                                            </div>
                                            <span class="step_box_text pt-2">
                                                None of the above
                                            </span>
                                            <p class="step_box_desc">
                                                My horse likes to relax
                                            </p>
                                            <input for="opt_12" type="radio" name="stp_3_select_option" value="None of
                                    the above">
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!-- Form-btn -->
                            <div class="form_btn pt-5 d-flex justify-content-between">
                                <button type="button" class="js-btn-prev prev_btn text-uppercase bg-white" id="prevBtn"><span><i class="fas fa-arrow-left"></i></span> Last
                                    Question</button>
                                <button type="button" class="js-btn-next next_btn text-uppercase text-white" id="nextBtn">Next
                                    Question <span><i class="fas fa-arrow-right"></i></span></button>
                            </div>
                        </div>
                        <!------------------ Step-4 -------------------->
                        <div class="multisteps_form_panel">
                            <!-- form-content -->
                            <div class="form_content">
                                <div class="step_content d-flex justify-content-between pt-5 pb-2">
                                    <h4>QUIZ</h4>
                                    <span class="text-end text-uppercase">question 4 to 4</span>
                                </div>
                                <div class="step_progress_bar">
                                    <div class="progress rounded-pill">
                                        <div class="progress-bar" style="width: 100%"></div>
                                    </div>
                                </div>
                                <div class="question_title py-5">
                                    <h1 class="text-capitalize">The greatest variety of animal and plant species is fund in</h1>
                                </div>
                                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 form_items check-list">
                                    <div class="col">
                                        <label id="opt_13" class="step_4 checkbox d-flex flex-column bg-white text-center animate__animated animate__fadeInRight animate_25ms">
                                            <div class="step_box_icon">
                                                <img src="<?= base_url($plantilla) ?>assets/images/item-img/item_0.png" alt="image-not-found">
                                            </div>
                                            <span class="step_box_text pt-2">
                                                temperate grasslands
                                            </span>
                                            <input for="opt_13" type="checkbox" class="required" name="stp_4_select_option" value="temperate
                                       grasslands">
                                        </label>
                                    </div>
                                    <div class="col">
                                        <label id="opt_14" class="step_4 checkbox d-flex flex-column bg-white text-center animate__animated animate__fadeInRight animate_50ms">
                                            <div class="step_box_icon">
                                                <img src="<?= base_url($plantilla) ?>assets/images/item-img/item_1.png" alt="image-not-found">
                                            </div>
                                            <span class="step_box_text pt-2">
                                                tropical moist forests
                                            </span>
                                            <input for="opt_14" type="checkbox" name="stp_4_select_option" value="tropical
                                       moist forests">
                                        </label>
                                    </div>
                                    <div class="col">
                                        <label id="opt_15" class="step_4 checkbox d-flex flex-column bg-white text-center animate__animated animate__fadeInRight animate_100ms">
                                            <div class="step_box_icon">
                                                <img src="<?= base_url($plantilla) ?>assets/images/item-img/item_2.png" alt="image-not-found">
                                            </div>
                                            <span class="step_box_text pt-2">
                                                tundra regions
                                            </span>
                                            <input for="opt_15" type="checkbox" name="stp_4_select_option" value="tundra
                                       regions">
                                        </label>
                                    </div>
                                    <div class="col">
                                        <label id="opt_16" class="step_4 checkbox d-flex flex-column bg-white text-center animate__animated animate__fadeInRight animate_150ms">
                                            <div class="step_box_icon">
                                                <img src="<?= base_url($plantilla) ?>assets/images/item-img/item_3.png" alt="image-not-found">
                                            </div>
                                            <span class="step_box_text pt-2">in hot deserts</span>
                                            <input for="opt_16" type="checkbox" name="stp_4_select_option" value="in hot deserts">
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!-- Form-btn -->
                            <div class="form_btn pt-5 d-flex justify-content-between">
                                <button type="button" class="js-btn-prev prev_btn text-uppercase bg-white" id="prevBtn"><span><i class="fas fa-arrow-left"></i></span> Last
                                    Question</button>
                                <button type="submit" class="next_btn text-uppercase text-white" id="nextBtn">Submit</button>
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery-js include -->
    <script src="<?= base_url($plantilla) ?>assets/js/jquery-3.6.0.min.js"></script>
    <!-- Countdown-js include -->
    <script src="<?= base_url($plantilla) ?>assets/js/countdown.js"></script>
    <!-- Bootstrap-js include -->
    <script src="<?= base_url($plantilla) ?>assets/js/bootstrap.min.js"></script>
    <!-- jQuery-validate-js include -->
    <script src="<?= base_url($plantilla) ?>assets/js/jquery.validate.min.js"></script>
    <!-- jQuery-validate-js include -->
    <script src="<?= base_url($plantilla) ?>assets/js/conditionize.flexible.jquery.min.js"></script>
    <!-- Custom-js include -->
    <script src="<?= base_url($plantilla) ?>assets/js/script.js"></script>
</body>


<!-- Mirrored from jthemes.net/themes/html/quizo/version-9/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Apr 2024 22:56:09 GMT -->

</html>