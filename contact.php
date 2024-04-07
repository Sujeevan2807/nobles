<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>The Nobles - Contact</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.svg in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/logo.png">
    <!-- CSS here -->
    <link rel="stylesheet" href="assets/app/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/app/css/meanmenu.min.css">
    <link rel="stylesheet" href="assets/app/css/nice-select.css">
    <link rel="stylesheet" href="assets/app/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/app/css/slick.css">
    <link rel="stylesheet" href="assets/app/css/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/app/css/backtotop.css">
    <link rel="stylesheet" href="assets/app/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/app/css/flaticon_musicly.css">
    <link rel="stylesheet" href="assets/app/css/fontawesome-pro.css">
    <link rel="stylesheet" href="assets/app/css/spacing.css">
    <link rel="stylesheet" href="assets/app/css/main.css">
</head>

<body>

    <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->

    <?php
    include 'header.php';
    ?>

    <div class="ms-all-content ms-all-content-space">
        <main>
            <!-- page title area start  -->
            <section class="page-title-area page-title-spacing p-relative zindex-1 "
                data-background="assets/img/bg/work-bg.jpg">
                <div class="ms-overlay ms-overlay9 p-absolute zindex--1"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xxl-11">
                            <h3 class="ms-page-title text-center">Contact us - More Information - Book Band</h3>
                        </div>
                    </div>
                </div>
            </section>
            <!-- page title area end  -->

            <!-- Contact Area Start Here  -->
            <section class="ms-contact-area pb-60 pt-130">
                <div class="container">
                    <div class="row">

                        <div class="col-xl-4 mb-50">
                            <div class="title">
                                <h3 class="text-center mb-20 text-white">Contact Us</h3>
                            </div>
                            <div class="ms-contact-wrap ms-contact-space mb-70 ms-bg-2">
                                <form id="contact-form" action="send-email.php" method="post">
                                    <input type="hidden" name="form_id" value="Contact Form">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="ms-input2-box mb-30">
                                                <input type="text" name="name" placeholder="Name" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="ms-input2-box mb-30">
                                                <input type="email" name="email" placeholder="Email" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="ms-input2-box mb-30">
                                                <input type="text" name="phone" placeholder="Phone Number" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="ms-input2-box mb-30">
                                                <input type="text" name="subject" placeholder="Subject">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="ms-input2-box mb-30">
                                                <textarea name="message" cols="30" rows="10"
                                                    placeholder="Question or Info Requested"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12 text-center">
                                            <div class="ms-submit-btn">
                                                <button class="unfill__btn" id="contact-us-btn" type="submit">Send
                                                    Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>



                        <div class="col-xl-4 mb-50">
                            <div class="title">
                                <h3 class="text-center mb-20 text-white">More Info</h3>
                            </div>
                            <div class="ms-contact-wrap ms-contact-space mb-70 ms-bg-2">
                                <form id="more-info-form" action="send-email.php" method="post">
                                    <input type="hidden" name="form_id" value="More Info Form">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="ms-input2-box mb-30">
                                                <input type="text" name="name" placeholder="Name" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="ms-input2-box mb-30">
                                                <input type="email" name="email" placeholder="Email" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="ms-input2-box mb-30">
                                                <input type="text" name="phone" placeholder="Phone Number" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="ms-input2-box mb-30">
                                                <input type="text" name="subject" placeholder="Subject">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="ms-input2-box mb-30">
                                                <textarea name="message" cols="30" rows="10"
                                                    placeholder="I need information about . . ."></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12 text-center">
                                            <div class="ms-submit-btn">
                                                <button class="unfill__btn" id="more-info-btn" type="submit">Send
                                                    Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>


                        <div class="col-xl-4">
                            <div class="title">
                                <h3 class="text-center mb-20 text-white">Book Band</h3>
                            </div>
                            <div class="ms-contact-wrap ms-contact-space mb-70 ms-bg-2">
                                <form id="book-band-form" action="send-email.php" method="post">
                                    <input type="hidden" name="form_id" value="Book Band Form">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="ms-input2-box mb-30">
                                                <input type="text" name="name" placeholder="Name" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="ms-input2-box mb-30">
                                                <input type="email" name="email" placeholder="Email" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="ms-input2-box mb-30">
                                                <input type="text" name="phone" placeholder="Phone Number" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="ms-input2-box mb-30">
                                                <input type="text" name="subject" placeholder="Subject">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="ms-input2-box mb-30">
                                                <input type="text" name="venue_name" placeholder="Name of Venue">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="ms-input2-box mb-30">
                                                <input type="text" name="event_date" placeholder="Date of Event">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="ms-input2-box mb-30">
                                                <input type="text" name="event_type" placeholder="Type of Event">
                                            </div>
                                        </div>
                                        <div class="col-md-12 text-center">
                                            <div class="ms-submit-btn">
                                                <button class="unfill__btn" id="book-band-btn" type="submit">Send
                                                    Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>


                    </div>
                </div>
            </section>
            <!-- Contact Area End Here  -->


            <!-- Contact Map Area Start Here  -->
            <section class="ms-contact-map-area">
                <div class="ms-contact-img w-img">
                    <img class="mh-200" src="assets/img/map.png" alt="contact bg">
                </div>
                <div class="ms-bg-2 ms-contact-map-space">
                    <div class="container">
                        <div class="row justify-content-center"> <!-- Added justify-content-center class -->
                            <div class="col-lg-6"> <!-- Adjust the column size as needed -->
                                <div class="ms-contact-map-grid">
                                    <div class="ms-contact-map-item-wrapper">
                                        <div class="ms-contact-map-item ms-bg-6">
                                            <div class="ms-contact-flag mb-5">
                                                <img src="assets/img/contact/flag-01.jpg" alt="flag image">
                                            </div>
                                            <h3 class="ms-title3 white-text mb-40">United States of America</h3>
                                            <div class="ms-contact-map-content ms-footer2-contact border-0">
                                                <ul>
                                                    <li><i class="flaticon-pin"></i><a href="#">936 Kuhl Avenue,
                                                            Norcross,
                                                            Georgia
                                                            GA 5983, United States</a></li>
                                                    <li><i class="flaticon-phone-call"></i><a
                                                            href="tel:03332920560">0333
                                                            292
                                                            0560</a></li>
                                                    <li><i class="flaticon-mail"></i><a
                                                            href="mailto:info@musiclycontact.com">info@musiclycontact.com</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Contact Map Area End Here  -->


            <!-- Partner Area Start Here  -->
            <!-- <div class="ms-partner-area fix pt-130 pb-130">
                <div class="container">
                    <div class="swiper-container ms-partner-active">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="assets/img/partner/partner-01.png" alt="partner image">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/partner/partner-02.png" alt="partner image">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/partner/partner-03.png" alt="partner image">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/partner/partner-04.png" alt="partner image">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/partner/partner-05.png" alt="partner image">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/partner/partner-04.png" alt="partner image">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/partner/partner-01.png" alt="partner image">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/partner/partner-02.png" alt="partner image">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/partner/partner-03.png" alt="partner image">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/partner/partner-04.png" alt="partner image">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/partner/partner-05.png" alt="partner image">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/partner/partner-04.png" alt="partner image">
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- Partner Area End Here  -->

        </main>
        <!-- Footer Area Start Here  -->
        <footer>
            <div class="ms-footer3-wrap include__bg zindex-1 p-relative"
                data-background="assets/img/about/about-footer-bg.webp">
                <div class="ms-overlay ms-overlay5 p-absolute zindex--1"></div>
                <div class="ms-footer3-top pt-130">
                    <div class="container">
                        <div class="ms-border2">
                            <div class="ms-footer2-logo mb-80 mx-auto">
                                <a href="index.php"><img src="assets/img/logo/logo.png" width="150px"
                                        alt="footer logo"></a>
                            </div>
                            <div class=" ms-footer2-top-inner ms-border1 ms-br-100 ms-bg-4 mb-65" id="footer-subscribe">
                                <div class="row align-items-center">

                                    <div class="col-lg-12">
                                        <div class="ms-subscribe2-form p-relative mb-10 d-none d-sm-block">
                                            <i class="flaticon-mail"></i>
                                            <input type="text" placeholder="Enter your mail">
                                            <button type="submit" class="ms-subscribe2-btn">Subscribe Now <i
                                                    class="fa-sharp fa-solid fa-paper-plane"></i></button>
                                        </div>

                                        <div class="ms-subscribe2-mobile p-relative mb-10 d-sm-none">
                                            <i class="flaticon-mail"></i>
                                            <input type="text" placeholder="Enter your mail">
                                            <button type="submit" class="ms-subscribe2-m-btn">Subscribe Now <i
                                                    class="fa-sharp fa-solid fa-paper-plane"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-15 mt-60">
                                <div class="col-xxl-6 col-lg-6 col-md-6">
                                    <div class="ms-footer2-widget mb-50 pr-20">
                                        <h3 class="ms-footer2-title"><a href="contact.php"> Get in touch </a></h3>
                                        <div class="ms-footer2-contact border-0 pb-40">
                                            <ul>
                                                <li><i class="flaticon-pin"></i><a href="#">936 Kuhl Avenue,
                                                        Norcross,
                                                        Georgia
                                                        GA 5983, United State</a></li>
                                                <li><i class="flaticon-phone-call"></i><a href="tel:03332920560">0333
                                                        292
                                                        0560</a></li>
                                                <li><i class="flaticon-mail"></i><a
                                                        href="mailto:info@musiclycontact.com">info@musiclycontact.com</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="ms-footer-social mb-15">
                                            <a href="https://www.instagram.com/" title="Instagram"
                                                target="_blank">IN</a>
                                            <a href="https://twitter.com/" title="Twitter" target="_blank">TW</a>
                                            <a href="https://www.facebook.com/" title="Facebook" target="_blank">FB</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-lg-6 col-md-6">
                                    <div class="ms-footer2-widget ms-footer2-widget2 mb-50">
                                        <h3 class="ms-footer2-title">Company</h3>
                                        <ul>
                                            <li><a href="about.php">About us</a></li>
                                            <li><a href="contact.php">Contact us</a></li>
                                            <li><a href="">Terms & Policy</a></li>
                                            <li><a href="contact.php">Help & Support</a></li>
                                            <li><a href="#">Press</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- <div class="col-xxl-2 col-lg-3 col-md-6">
                                    <div class="ms-footer2-widget mb-50">
                                        <h3 class="ms-footer2-title">Local Band Group</h3>
                                        <ul>
                                            <li><a href="#">The Tricks</a></li>
                                            <li><a href="#">Sound City</a></li>
                                            <li><a href="#">Big Teaser</a></li>
                                            <li><a href="#">The New Tones</a></li>
                                            <li><a href="#">Halos Music</a></li>
                                            <li><a href="#">Soho Soul</a></li>
                                            <li><a href="#">Atlantic</a></li>
                                            <li><a href="#">The Fiction</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xxl-2 col-lg-3 col-md-6">
                                    <div class="ms-footer2-widget mb-50">
                                        <h3 class="ms-footer2-title">Trending Genres</h3>
                                        <ul>
                                            <li><a href="genres-details.html">Wedding Bands</a></li>
                                            <li><a href="genres-details.html">Jazz & Swing</a></li>
                                            <li><a href="genres-details.html">Musician</a></li>
                                            <li><a href="genres-details.html">Classical Musician</a></li>
                                            <li><a href="genres-details.html">Corporate Party</a></li>
                                            <li><a href="genres-details.html">Premiere Party Band</a></li>
                                            <li><a href="genres-details.html">DJ Songs</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xxl-2 col-lg-3 col-md-6">
                                    <div class="ms-footer2-widget mb-50">
                                        <h3 class="ms-footer2-title">Country We Serve</h3>
                                        <ul>
                                            <li><a href="#">United State</a></li>
                                            <li><a href="#">Canada</a></li>
                                            <li><a href="#">Australia</a></li>
                                            <li><a href="#">China</a></li>
                                            <li><a href="#">South Korea</a></li>
                                            <li><a href="#">Japan</a></li>
                                            <li><a href="#">Singapore</a></li>
                                            <li><a href="#">Hong Kong</a></li>
                                        </ul>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ms-footer-bottom">
                    <div class="container">
                        <div class="ms-footer-bottom-wrap text-center pt-35 pb-20">
                            <div class="ms-footer-copy">
                                <p><a href="https://lazerwebsites.com/" target="_blank" rel="nofollow">© lazerwebsites.com</a> 2024, All Rights Reserved</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Area End Here  -->
    </div>

    <!-- Back to top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- Back to top end -->

    <!-- JS here -->
    <script src="assets/app/js/jquery-3.6.0.min.js"></script>
    <script src="assets/app/js/waypoints.min.js"></script>
    <script src="assets/app/js/bootstrap.bundle.min.js"></script>
    <script src="assets/app/js/nice-select.min.js"></script>
    <script src="assets/app/js/meanmenu.min.js"></script>
    <script src="assets/app/js/swiper-bundle.min.js"></script>
    <script src="assets/app/js/slick.min.js"></script>
    <script src="assets/app/js/magnific-popup.min.js"></script>
    <script src="assets/app/js/backtotop.js"></script>
    <script src="assets/app/js/ajax-form.js"></script>
    <script src="assets/app/js/jquery-ui.min.js"></script>
    <script src="assets/app/js/gsap.min.js"></script>
    <script src="assets/app/js/ScrollToPlugin.min.js"></script>
    <script src="assets/app/js/SplitText.min.js"></script>
    <script src="assets/app/js/ScrollTrigger.min.js"></script>
    <script src="assets/app/js/jquery.jplayer.min.js"></script>
    <script src="assets/app/js/jplayer.playlist.js"></script>
    <script src="assets/app/js/settings.js"></script>
    <script src="assets/app/js/main.js"></script>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function () {
        $('form').submit(function (event) {
            event.preventDefault(); // Prevent the default form submission

            var formData = $(this).serialize(); // Serialize form data
            var formId = $(this).attr('id'); // Get the ID of the form

            $.ajax({
                type: 'POST',
                url: 'send-email.php',
                data: formData,
                success: function (response) {
                    // Redirect to thankyou.php after form submission
                    window.location.href = 'thankyou.php';
                },
                error: function (xhr, status, error) {
                    console.error(xhr.responseText);
                    alert('An error occurred while sending your message. Please try again later.');
                }
            });
        });
    });
</script>
</body>

</html>