<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Education LMS template by Dreambuzz">
    <meta name="keywords" content="Eduhash,education,lms,seo,course,online,learning,caoch,training,tutor">
    <meta name="author" content="themeturn.com">

    <title>Eduhash - Education LMS template</title>

    <!-- Mobile Specific Meta-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="assets/vendors/bootstrap/bootstrap.css">
    <!-- Iconfont Css -->
    <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.css">
    <link rel="stylesheet" href="assets/vendors/flaticon/flaticon.css">
    <!-- animate.css -->
    <link rel="stylesheet" href="assets/vendors/animate-css/animate.css">
    <link rel="stylesheet" href="assets/vendors/owl/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendors/owl/assets/owl.theme.default.min.css">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">

</head>

<body id="top-header">

    <!-- Header -->
    <?php include('apart/header.php'); ?>
    <!-- // Header Ends -->

    <section class="page-header">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xl-8">
                    <div class="title-block">
                        <h1>Contact Us</h1>
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="list-inline-item">/</li>
                            <li class="list-inline-item">
                                Contact
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map section start -->
    <section class="map">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div id="map"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Map section End -->

    <!-- Contact section start -->
    <section class="contact section-padding">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-7 col-xl-7">
                    <div class="section-heading center-heading">
                        <span class="subheading">contact</span>
                        <h3>For more information about our courses, get in touch</h3>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-lg-12 col-md-6">
                            <div class="contact-item">
                                <p>Email Us</p>
                                <h4>support@email.com</h4>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6">
                            <div class="contact-item">
                                <p>Make a Call</p>
                                <h4>+45 234 345467</h4>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6">
                            <div class="contact-item">
                                <p>Corporate Office</p>
                                <h4>Moon Street Light Avenue, 14/05
                                    Jupiter, JP 80630 </h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <form class="contact__form form-row " method="post" action="mail.php" id="contactForm">
                        <div class="row">
                            <div class="col-12">
                                <div class="alert alert-success contact__msg" style="display: none" role="alert">
                                    Your message was sent successfully.
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Your Name">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="email" id="email" class="form-control" placeholder="Email Address">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <textarea id="message" name="message" cols="30" rows="6" class="form-control" placeholder="Your Message"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="mt-4 ">
                                <button class="btn btn-main" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact section End -->




    <!-- Footer section start -->
    <?php include('apart/footer.php'); ?>
    <!-- Footer section End -->

    <div class="fixed-btm-top">
        <a href="#top-header" class="js-scroll-trigger scroll-to-top"><i class="fa fa-angle-up"></i></a>
    </div>




    <!-- 
    Essential Scripts
    =====================================-->

    <!-- Main jQuery -->
    <script src="assets/vendors/jquery/jquery.js"></script>
    <!-- Bootstrap 4.5 -->
    <script src="assets/vendors/bootstrap/bootstrap.js"></script>
    <!-- Counterup -->
    <script src="assets/vendors/counterup/waypoint.js"></script>
    <script src="assets/vendors/counterup/jquery.counterup.min.js"></script>
    <script src="assets/vendors/jquery.isotope.js"></script>
    <script src="assets/vendors/imagesloaded.js"></script>
    <script src="assets/vendors/owl/owl.carousel.min.js"></script>
    <script src="assets/vendors/google-map/map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>
    <script src="assets/js/script.js"></script>


</body>

</html>
