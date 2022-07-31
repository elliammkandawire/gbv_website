<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> <?php echo $company_data->shortname  ?> || <?php echo $company_data->motto  ?></title>
	<!-- favicons Icons -->
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url()?>assets/images/favicons/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url()?>assets/images/favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url()?>assets/images/favicons/favicon-16x16.png">
	<link rel="manifest" href="<?php echo base_url()?>assets/images/favicons/site.webmanifest">
	<meta name="description" content="<?php echo $company_data->fullname  ?>">

	<!-- fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">

	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">

	<link href="../../css2.css?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

	<link href="../../css2-1.css?family=Manrope:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">

	<link href="../../css2-2.css?family=Caveat:wght@400;500;600;700&display=swap" rel="stylesheet">


	<link rel="stylesheet" href="<?php echo base_url()?>assets/vendors/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/vendors/animate/animate.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/vendors/animate/custom-animate.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/vendors/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/vendors/jarallax/jarallax.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/vendors/nouislider/nouislider.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/vendors/nouislider/nouislider.pips.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/vendors/odometer/odometer.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/vendors/swiper/swiper.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/vendors/oxpins-icons/style.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/vendors/tiny-slider/tiny-slider.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/vendors/reey-font/stylesheet.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/vendors/owl-carousel/owl.theme.default.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/vendors/bxslider/jquery.bxslider.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/vendors/bootstrap-select/css/bootstrap-select.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/vendors/vegas/vegas.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/vendors/jquery-ui/jquery-ui.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/vendors/timepicker/timePicker.css">

	<!-- template styles -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/oxpins.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/oxpins-responsive.css">
	<!--	style="margin-left: 18%; margin-right: 18%; b"-->
	<style>
		@media screen and (min-width: 768px) {
		 body {
			margin-left: 18%;
			margin-right: 18%;
		  }
		}
	</style>
</head>

<body class="custom-cursor">

<div class="custom-cursor__cursor"></div>
<div class="custom-cursor__cursor-two"></div>


<div class="preloader">
	<div class="preloader__image"></div>
</div>
<!-- /.preloader -->


<div class="page-wrapper">
	<header class="main-header">
		<nav class="main-menu">
			<div class="main-menu__wrapper">
				<div class="main-menu__wrapper-inner">
					<div class="main-menu__left">
						<div class="main-menu__logo">
							<a href="<?php echo  base_url() ?>"><img style="object-fit: cover; height: 200px;" src="<?php echo base_url() ?>assets/images/resources/<?php echo $company_data->logo  ?>" alt=""></a>
						</div>
					</div>
					<div class="main-menu__right">
						<div class="main-menu__right-top">
							<div class="main-menu__right-top-right">
								<div class="main-menu__right-top-address">
									<ul class="list-unstyled main-menu__right-top-address-list">
										<li>
											<div class="icon">
												<span class="icon-phone-call"></span>
											</div>
											<div class="content">
												<p>Helpline</p>
												<h5><a href="tel:<?php echo $company_data->phone ?>"><?php echo $company_data->phone ?></a></h5>
											</div>
										</li>
										<li>
											<div class="icon">
												<span class="icon-message"></span>
											</div>
											<div class="content">
												<p>Send email</p>
												<h5><a href="mailto:<?php echo $company_data->email ?>"><?php echo $company_data->email ?></a>
												</h5>
											</div>
										</li>
										<li>
											<div class="icon">
												<span class="icon-location"></span>
											</div>
											<div class="content">
												<p>Our Office</p>
												<h5><?php echo $company_data->location ?></h5>
											</div>
										</li>
									</ul>
								</div>
								<div class="main-menu__right-top-social">
									<a target="_blank" href="<?php echo $company_data->twitter ?>"><i class="fab fa-twitter"></i></a>
									<a target="_blank" href="<?php echo $company_data->facebook ?>"><i class="fab fa-facebook"></i></a>
								</div>
							</div>
						</div>
						<div class="main-menu__right-bottom">
							<div class="main-menu__main-menu-box">
								<a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
								<ul class="main-menu__list">
									<li class="dropdown current megamenu">
										<a href="<?php echo  base_url() ?>">Home </a>
									</li>
									<li class="dropdown">
										<a href="#">About</a>
										<ul>
											<li><a href="<?php echo base_url()?>aboutus">History</a></li>
											<li><a href="<?php echo base_url()?>team">Who we are</a></li>
<!--											<li><a href="--><?php //echo base_url() ?><!--strategic_plan">Strategic Plans</a></li>-->
											<li><a href="<?php echo base_url()?>members">Member Organisations</a></li>
											<li><a href="<?php echo base_url() ?>vacancies">Vacancies</a></li>
										</ul>
									</li>
									<li class="dropdown">
										<a href="<?php echo  base_url()?>events">Events</a>
									</li>
									<li class="dropdown">
										<a href="<?php echo base_url() ?>services">What we do</a>
										<ul>
											<?php foreach ($services as $service): ?>
											<li><a href="<?php echo base_url()?>service-details/<?php echo $service->slug ?>"><?php echo $service->name ?></a></li>
											<?php endforeach;?>
										</ul>
									</li>
									<li class="dropdown">
										<a href="#">News</a>
										<ul>
											<li><a href="<?php echo base_url() ?>news">Articles</a></li>
											<li><a href="<?php echo base_url()?>publications">Publications</a></li>
<!--											<li><a href="#">Webinars</a></li>-->
										</ul>
									</li>
									<li>
										<a href="<?php echo base_url() ?>contact">Contact</a>
									</li>
								</ul>
							</div>
							<div class="main-menu__main-menu-content-box">
								<div class="main-menu__search-cat-btn-box">
									<div class="main-menu__btn-box">
										<a href="<?php echo base_url() ?>donate" class="main-menu__btn"> <span class="fa fa-heart"></span> Donate
											now</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</nav>
	</header>
	<div class="stricky-header stricked-menu main-menu">
		<div class="sticky-header__content"></div><!-- /.sticky-header__content -->
	</div><!-- /.stricky-header -->
