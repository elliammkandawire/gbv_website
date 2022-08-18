

        <!--Site Footer Start-->
        <footer class="site-footer">
            <div class="site-footer-bg" style="background-image: url(assets/images/backgrounds/site-footer-bg.jpg);">
            </div>
            <div class="site-footer__top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="footer-widget__column footer-widget__about">
                                <div class="footer-widget__about-logo">
                                    <a href="<?php echo base_url() ?>"><img style="object-fit: cover; height: 100px;" src="<?php echo base_url() ?>assets/images/resources/<?php echo $company_data->footer_logo ?>" alt=""></a>
                                </div>
                                <div class="footer-widget__about-text-box">
                                    <p class="footer-widget__about-text">
										<?php echo $company_data->motto ?>
									</p>
                                </div>
                                <div class="footer-widget__btn">
                                    <a target="_blank" href="<?php echo $company_data->facebook ?>"> <span class="fab fa-facebook"></span>Follow Us</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="footer-widget__column footer-widget__links clearfix">
                                <h3 class="footer-widget__title">Links</h3>
                                <ul class="footer-widget__links-list list-unstyled clearfix">
                                    <li><a href="<?php echo base_url() ?>">Home</a></li>
                                    <li><a href="<?php echo base_url() ?>aboutus">About us</a></li>
                                    <li><a href="<?php echo base_url() ?>services">What we do</a></li>
                                    <li><a href="<?php  echo base_url() ?>events">Events</a></li>
                                    <li><a href="<?php echo base_url() ?>news">News</a></li>
                                    <li><a href="<?php echo base_url() ?>contact">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                            <div class="footer-widget__column footer-widget__non-profit clearfix">
                                <h3 class="footer-widget__title">Member Organisations</h3>
                                <ul class="footer-widget__non-profit-list list-unstyled clearfix">
									<?php foreach($member_organisation as $member): ?>
                                    <li><a target="_blank" href="<?php echo $member->website ?>"><?php echo $member->name ?></a></li>
									<?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                            <div class="footer-widget__column footer-widget__contact">
                                <h3 class="footer-widget__title">Contact</h3>
                                <p class="footer-widget__contact-text"><?php echo $company_data->location ?>
                                </p>
                                <ul class="list-unstyled footer-widget__contact-list">
                                    <li>
                                        <div class="icon">
                                            <i class="fa fa-envelope"></i>
                                        </div>
                                        <div class="text">
                                            <p><a href="mailto:<?php echo $company_data->email ?>"><?php echo $company_data->email ?></a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-phone-alt"></i>
                                        </div>
                                        <div class="text">
                                            <p><a href="tel:<?php echo $company_data->phone ?>"><?php echo $company_data->phone ?></a></p>
                                        </div>
                                    </li>
                                </ul>
                                <div class="site-footer__social">
                                    <a target="_blank" href="<?php echo $company_data->twitter ?>"><i class="fab fa-twitter"></i></a>
                                    <a target="_blank" href="<?php echo $company_data->facebook ?>"><i class="fab fa-facebook"></i></a>
									<a target="_blank" href="<?php echo $company_data->linkedin  ?>"><i class="fab fa-linkedin-in"></i></a>
									<a target="_blank" href="<?php echo $company_data->instagram ?>"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-footer__bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="site-footer__bottom-inner">
                                <p class="site-footer__bottom-text">© All Copyright 2022 by <a href="<?php echo base_url() ?>"><?php echo $company_data->fullname ?></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--Site Footer End-->


    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="<?php echo base_url() ?>" aria-label="logo image"><img style="object-fit: cover; height: 150px; margin-top: 5px" src="<?php echo base_url() ?>assets/images/resources/<?php echo $company_data->mobile_logo ?>" width="143" alt=""></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:<?php echo $company_data->email ?>"><?php echo $company_data->email ?></a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:<?php  echo $company_data->phone ?>"><?php echo $company_data->phone ?></a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
					<a target="_blank" href="<?php echo $company_data->twitter ?>"><i class="fab fa-twitter"></i></a>
					<a target="_blank" href="<?php echo $company_data->facebook ?>"><i class="fab fa-facebook"></i></a>
					<a target="_blank" href="<?php echo $company_data->linkedin  ?>"><i class="fab fa-linkedin-in"></i></a>
					<a target="_blank" href="<?php echo $company_data->instagram ?>"><i class="fab fa-instagram"></i></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here...">
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="icon-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="icon-up-arrow"></i></a>


    <script src="<?php echo base_url()?>assets/vendors/jquery/jquery-3.6.0.min.js"></script>
    <script src="<?php echo base_url()?>assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url()?>assets/vendors/jarallax/jarallax.min.js"></script>
    <script src="<?php echo base_url()?>assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="<?php echo base_url()?>assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="<?php echo base_url()?>assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="<?php echo base_url()?>assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo base_url()?>assets/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="<?php echo base_url()?>assets/vendors/nouislider/nouislider.min.js"></script>
    <script src="<?php echo base_url()?>assets/vendors/odometer/odometer.min.js"></script>
    <script src="<?php echo base_url()?>assets/vendors/swiper/swiper.min.js"></script>
    <script src="<?php echo base_url()?>assets/vendors/tiny-slider/tiny-slider.min.js"></script>
    <script src="<?php echo base_url()?>assets/vendors/wnumb/wNumb.min.js"></script>
    <script src="<?php echo base_url()?>assets/vendors/wow/wow.js"></script>
    <script src="<?php echo base_url()?>assets/vendors/isotope/isotope.js"></script>
    <script src="<?php echo base_url()?>assets/vendors/countdown/countdown.min.js"></script>
    <script src="<?php echo base_url()?>assets/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="<?php echo base_url()?>assets/vendors/bxslider/jquery.bxslider.min.js"></script>
    <script src="<?php echo base_url()?>assets/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="<?php echo base_url()?>assets/vendors/vegas/vegas.min.js"></script>
    <script src="<?php echo base_url()?>assets/vendors/jquery-ui/jquery-ui.js"></script>
    <script src="<?php echo base_url()?>assets/vendors/timepicker/timePicker.js"></script>
    <script src="<?php echo base_url()?>assets/vendors/circleType/jquery.circleType.js"></script>
    <script src="<?php echo base_url()?>assets/vendors/circleType/jquery.lettering.min.js"></script>




    <!-- template js -->
    <script src="<?php echo base_url()?>assets/js/oxpins.js"></script>
</body>

</html>
