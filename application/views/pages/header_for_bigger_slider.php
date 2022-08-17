<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> <?php echo $company_data->shortname  ?> || <?php echo $company_data->motto  ?></title>
	<!-- favicons Icons -->
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url()?>assets/images/loader.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url()?>assets/images/loader.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url()?>assets/images/loader.png">
	<link rel="manifest" href="<?php echo base_url()?>assets/images/favicons/site.webmanifest">
	<meta name="description" content="<?php echo $company_data->fullname  ?>">

	<!-- fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">

	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">

	<link href="../../css2.css?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

	<link href="../../css2-1.css?family=Manrope:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">

	<link href="../../css2-2.css?family=Caveat:wght@400;500;600;700&display=swap" rel="stylesheet">


	<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/animate/animate.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/animate/custom-animate.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/jarallax/jarallax.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/nouislider/nouislider.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/nouislider/nouislider.pips.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/odometer/odometer.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/swiper/swiper.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/oxpins-icons/style.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/tiny-slider/tiny-slider.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/reey-font/stylesheet.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/owl-carousel/owl.theme.default.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/bxslider/jquery.bxslider.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/bootstrap-select/css/bootstrap-select.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/vegas/vegas.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>/vendors/jquery-ui/jquery-ui.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/timepicker/timePicker.css">

	<!-- template styles -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/oxpins.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/oxpins-responsive.css">
</head>

<body class="custom-cursor">

<div class="custom-cursor__cursor"></div>
<div class="custom-cursor__cursor-two"></div>

<div class="preloader">
	<div class="preloader__image"></div>
</div>
<!-- /.preloader -->


<div class="page-wrapper">
	<header class="main-header-two">
		<nav class="main-menu main-menu-two">
			<div class="main-menu-two__wrapper">
				<div class="main-menu-two__wrapper-inner">
					<div class="main-menu-two__left">
						<div class="main-menu-two__logo">
							<a href="<?php echo  base_url() ?>"><img style="object-fit: cover; height: 150px;" src="<?php echo base_url() ?>assets/images/resources/<?php echo $company_data->logo  ?>" alt=""></a>
						</div>
					</div>
					<div class="main-menu-two__right">
						<div class="main-menu-two__right-top">
							<div class="main-menu-two__right-top-right">
								<div class="main-menu-two__right-top-address">
									<ul class="list-unstyled main-menu-two__right-top-address-list">
										<li>
											<div class="icon">
												<span class="icon-phone-call"></span>
											</div>
											<div class="content">
												<p>Office Line</p>
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
												<h5><?php echo $company_data->location ?></h5>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="main-menu-two__right-bottom">
							<div class="main-menu-two__main-menu-box">
								<a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
								<ul class="main-menu__list">
									<li>
										<a href="<?php echo base_url() ?>">Home </a>
									</li>
									<li class="dropdown">
										<a href="<?php echo base_url() ?>aboutus">About Us</a>
										<ul>
											<li><a href="<?php echo base_url() ?>aboutus">History</a></li>
											<li><a href="<?php echo base_url() ?>team">WHo we are</a></li>
											<li><a href="<?php echo base_url() ?>members">Members</a></li>
										</ul>
									</li>
									<li class="dropdown">
										<a href="<?php echo base_url() ?>services">What we do</a>
										<ul>
											<?php foreach ($services as $service): ?>
												<li><a href="<?php echo base_url()?>service-details/<?php echo $service->slug ?>"><?php echo $service->name ?></a></li>
											<?php endforeach;?>
										</ul>
									</li>
									<li>
										<a href="<?php echo base_url() ?>events">Events</a>
									</li>
									<li class="dropdown">
										<a href="<?php echo base_url() ?>news">News</a>
										<ul>
											<li><a href="<?php echo base_url() ?>news">Articles</a></li>
											<li><a href="<?php echo base_url() ?>publications">Resources</a></li>
										</ul>
									</li>
									<li>
										<a href="<?php echo base_url() ?>contact">Contact</a>
									</li>
								</ul>
							</div>
							<div class="main-menu-two__main-menu-content-box">
								<div class="main-menu-two__search-cat-btn-box">
<!--									<div class="main-menu-two__search-box">-->
<!--										<a href="#" class="main-menu-two__search search-toggler icon-magnifying-glass"></a>-->
<!--									</div>-->
<!--									<div class="main-menu-two__cat-box">-->
<!--										<a href="#" class="main-menu-two__cart icon-avatar"></a>-->
<!--									</div>-->
									<div class="main-menu-two__btn-box">
										<a target="_blank" href="<?php echo $company_data->facebook ?>" class="main-menu-two__btn"> <span class="fab fa-facebook"></span>
											Follow Us</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</nav>
	</header>

	<div class="stricky-header stricked-menu main-menu main-menu-two">
		<div class="sticky-header__content"></div><!-- /.sticky-header__content -->
	</div><!-- /.stricky-header -->


	<?php
	   if ($this->uri->segment(1)) {
	?>
	<!--Page Header Start-->
	<section class="page-header">
		<div class="page-header-bg" style="background-image: url(<?php echo base_url() ?>assets/images/backgrounds/<?php echo $company_data->header ?>)">
		</div>
		<div class="container">
			<div class="page-header__inner">
				<ul class="thm-breadcrumb list-unstyled">
					<li><a href="<?php echo base_url() ?>">Home</a></li>
					<li><span>/</span></li>
					<li class="active">Pages</li>
				</ul>
				<h2><?php echo ucwords(str_replace("-"," ",$this->uri->segment(1))) ?></h2>
			</div>
		</div>
	</section>
	<!--Page Header End-->
	<?php } ?>
