<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?php echo $title ?></title>
    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- master stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/css/style.css">
    <!-- responsive stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/css/responsive.css">
</head>

<body>
    <section class="top-bar">
        <div class="container">

            <div class="left-text pull-left">
                <p><span></span></p>
            </div> <!-- /.left-text -->

            <div class="social-icons pull-right">
                <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                </ul>
            </div> <!-- /.social-icons -->
        </div>
    </section> <!-- /.top-bar -->

    <nav class="mainmenu-area stricky">
        <div class="container">
            <div class="navigation pull-left">
                <div class="nav-header">
                    <ul>
                        <li class="dropdown">
                            <a href="#">Home</a>
                            <ul class="submenu">
                                <li><a href="index.html">Home One</a></li>
                                <li><a href="index2.html">Home Two</a></li>
                            </ul>
                        </li>
                        <li><a href="about.html">About</a></li>
                        <li class="dropdown">
                            <a href="#">Causes</a>
                            <ul class="submenu">
                                <li><a href="causes-grid.html">Causes Grid</a></li>
                                <li><a href="causes-list.html">Causes List</a></li>
                                <li><a href="causes-single.html">Single Cause</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#">Events</a>
                            <ul class="submenu">
                                <li><a href="events-grid.html">Events Grid</a></li>
                                <li><a href="events-list.html">Events List</a></li>
                                <li><a href="events-single.html">Event Single</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#">Volunteer</a>
                            <ul class="submenu">
                                <li><a href="volunteer-style-one.html">Volunteer Style One</a></li>
                                <li><a href="volunteer-style-two.html">Volunteer Style Two</a></li>
                                <li><a href="volunteer-profile.html">Volunteer Profile</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#">Gallery</a>
                            <ul class="submenu">
                                <li><a href="gallery-style-one.html">Gallery Style One</a></li>
                                <li><a href="gallery-style-two.html">Gallery Style Two</a></li>
                                <li><a href="gallery-style-three.html">Gallery Style Three</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#">Pages</a>
                            <ul class="submenu">
                                <li><a href="donations.html">Donation</a></li>
                                <li><a href="faq.html">FAQ</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#">Blog</a>
                            <ul class="submenu">
                                <li><a href="blog-style-one.html">Blog Style One</a></li>
                                <li><a href="blog-style-two.html">Blog Style Two</a></li>
                                <li><a href="blog-details.html">Blog Details</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
                <div class="nav-footer">
                    <button><i class="fa fa-bars"></i></button>
                </div>
            </div>
        </div>
    </nav> <!-- /.mainmenu-area -->
    <?php $this->load->view($page) ?>
    <footer class="footer sec-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-widget about-widget">
                        <a href="#">
                            <img src="<?php echo base_url() ?>assets/frontend/img/resources/poltekk.png" width="90" alt="" />
                        </a>
                        <p></p>
                        <ul class="contact">
                            <li><i class="fa fa-map-marker"></i> <span>Jalan Mataram No 9 (belakang terminal) Pesurungan Lor Kota Tegal</span></li>
                            <li><i class="fa fa-phone"></i> <span>(880) 1723801729</span></li>
                            <li><i class="fa fa-envelope-o"></i> <span>d3teknikkomputer@gmail.com</span></li>
                        </ul>
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6">
                    <div class="footer-widget quick-links">
                        <h3 class="title">Pages</h3>
                        <ul>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="causes-grid.html">Causes</a></li>
                            <li><a href="events-grid.html">Events</a></li>
                            <li><a href="faq.html">Faq</a></li>
                            <li><a href="blog-style-two.html">Archives</a></li>
                            <li><a href="blog-style-one.html">News</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 latest-post col-sm-6">
                    <div class="footer-widget latest-post">
                        <h3 class="title">Latest News</h3>
                        <ul>
                            <li>
                                <span class="border"></span>
                                <div class="content">
                                    <a href="blog-details.html">Materi Seminar Computer Engineering Festival </a>
                                    <span>July 2, 2014</span>
                                </div>
                            </li>
                            <li>
                                <span class="border"></span>
                                <div class="content">
                                    <a href="blog-details.html">WEBINAR "AIoT and Robot </a>
                                    <span>July 2, 2014</span>
                                </div>
                            </li>
                            <li>
                                <span class="border"></span>
                                <div class="content">
                                    <a href="blog-details.html">SERTIFIKAT AKREDITASI PRODI DIII TEKNIK KOMPUTER </a>
                                    <span>July 2, 2014</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="footer-widget contact-widget">
                        <h3 class="title">Contact Form</h3>
                        <form action="inc/sendemail.php" class="contact-form" id="footer-cf">
                            <input type="text" name="name" placeholder="Full Name">
                            <input type="text" name="email" placeholder="Email Address">
                            <textarea name="message" placeholder="Your Message"></textarea>
                            <button type="submit">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <section class="footer-bottom">
        <div class="container text-center">
            <p>Theme Created By <a href="#"></a> RAB</p>
        </div>
    </section>


    <!-- main jQuery -->
    <script src="<?php echo base_url() ?>assets/frontend/js/jquery-1.11.1.min.js"></script>
    <!-- bootstrap -->
    <script src="<?php echo base_url() ?>assets/frontend/js/bootstrap.min.js"></script>
    <!-- bx slider -->
    <script src="<?php echo base_url() ?>assets/frontend/js/jquery.bxslider.min.js"></script>
    <!-- owl carousel -->
    <script src="<?php echo base_url() ?>assets/frontend/js/owl.carousel.min.js"></script>
    <!-- validate -->
    <script src="<?php echo base_url() ?>assets/frontend/js/jquery-parallax.js"></script>
    <!-- validate -->
    <script src="<?php echo base_url() ?>assets/frontend/js/validate.js"></script>
    <!-- mixit up -->
    <script src="<?php echo base_url() ?>assets/frontend/js/jquery.mixitup.min.js"></script>
    <!-- fancybox -->
    <script src="<?php echo base_url() ?>assets/frontend/js/jquery.fancybox.pack.js"></script>
    <!-- easing -->
    <script src="<?php echo base_url() ?>assets/frontend/js/jquery.easing.min.js"></script>
    <!-- circle progress -->
    <script src="<?php echo base_url() ?>assets/frontend/js/circle-progress.js"></script>
    <!-- appear js -->
    <script src="<?php echo base_url() ?>assets/frontend/js/jquery.appear.js"></script>
    <!-- count to -->
    <script src="<?php echo base_url() ?>assets/frontend/js/jquery.countTo.js"></script>
    <!-- gmap helper -->
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <!-- gmap main script -->
    <script src="j<?php echo base_url() ?>assets/frontend/s/gmap.js"></script>
    <!-- isotope script -->
    <script src="<?php echo base_url() ?>assets/frontend/js/isotope.pkgd.min.js"></script>
    <!-- jQuery ui js -->
    <script src="<?php echo base_url() ?>assets/frontend/js/jquery-ui-1.11.4/jquery-ui.js"></script>

    <!-- revolution scripts -->
    <script src="<?php echo base_url() ?>assets/frontend/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="<?php echo base_url() ?>assets/frontend/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/frontend/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/frontend/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/frontend/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/frontend/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/frontend/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/frontend/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/frontend/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/frontend/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <!-- thm custom script -->
    <script src="<?php echo base_url() ?>assets/frontend/js/custom.js"></script>
</body>

</html>