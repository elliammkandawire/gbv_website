<!--Main Slider Start-->
<section class="main-slider-two clearfix">
	<div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
                "effect": "fade",
                "pagination": {
                "el": "#main-slider-pagination",
                "type": "bullets",
                "clickable": true
                },
                "navigation": {
                "nextEl": "#main-slider__swiper-button-next",
                "prevEl": "#main-slider__swiper-button-prev"
                },
                "autoplay": {
                "delay": 5000
                }}'>
		<div class="swiper-wrapper">

			<?php foreach ($sliders as $slider): ?>
			<div class="swiper-slide">
				<div class="image-layer-two" style="background-image: url(<?php echo base_url() ?>assets/images/backgrounds/<?php echo $slider->picture ?>);"></div>
				<!-- /.image-layer -->

<!--				<div class="main-slider-two-shape-1">-->
<!--					<img src="--><?php //echo base_url() ?><!--assets/images/backgrounds/--><?php //echo $slider->picture ?><!--" alt="">-->
<!--				</div>-->
<!--				<div class="main-slider-two-shape-2">-->
<!--					<img src="--><?php //echo base_url() ?><!--assets/images/backgrounds/--><?php //echo $slider->picture ?><!--" alt="">-->
<!--				</div>-->

				<div class="container" style="height: 600px">
					<div class="row">
						<div class="col-xl-12">
							<div class="main-slider-two__content">
								<p class="main-slider-two__sub-title"></p>
								<h2 class="main-slider-two__title"></h2>
								<div class="main-slider-two__btn-box">
<!--									<a href="--><?php //echo base_url() ?><!--aboutus" class="thm-btn main-slider-two__btn">About Us</a>-->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php endforeach; ?>
		</div>

		<!-- If we need navigation buttons -->
		<div class="main-slider-two__nav">
			<div class="swiper-button-prev" id="main-slider__swiper-button-next">
				<i class="icon-left-arrow"></i>
			</div>
			<div class="swiper-button-next" id="main-slider__swiper-button-prev">
				<i class="icon-right-arrow"></i>
			</div>
		</div>

	</div>
</section>
<!--Main Slider End-->



<!--Feature One Start-->
<!--<section class="feature-one">-->
<!--	<div class="container">-->
<!--		<div class="row">-->
<!--			<div class="col-xl-6 col-lg-6  wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">-->
<!--				<div class="feature-one__single">-->
<!--					<div class="feature-one__single-bg" style="background-image: url(assets/images/shapes/feature-one-shape-1.png);"></div>-->
<!--					<div class="feature-one__top">-->
<!--						<div class="feature-one__top-inner">-->
<!--							<div class="feature-one__top-icon">-->
<!--								<span class="icon-help"></span>-->
<!--							</div>-->
<!--							<div class="feature-one__top-title-box">-->
<!--								<h3 class="feature-one__top-title"><a href="become-volunteer.html">Join us &-->
<!--										become <br> a-->
<!--										volunteer</a></h3>-->
<!--							</div>-->
<!--						</div>-->
<!--					</div>-->
<!--					<p class="feature-one__text">Mauris feugiat at orci ac congue. mauris ut <br> lacus quis-->
<!--						proin-->
<!--						diam.</p>-->
<!--					<ul class="list-unstyled feature-one__point">-->
<!--						<li>-->
<!--							<div class="icon">-->
<!--								<span class="fa fa-check"></span>-->
<!--							</div>-->
<!--							<div class="text">-->
<!--								<p>Sed et nulla a nunc finibus eleifend.</p>-->
<!--							</div>-->
<!--						</li>-->
<!--						<li>-->
<!--							<div class="icon">-->
<!--								<span class="fa fa-check"></span>-->
<!--							</div>-->
<!--							<div class="text">-->
<!--								<p>Mauris nulla nisl, pellentesque vetae.</p>-->
<!--							</div>-->
<!--						</li>-->
<!--						<li>-->
<!--							<div class="icon">-->
<!--								<span class="fa fa-check"></span>-->
<!--							</div>-->
<!--							<div class="text">-->
<!--								<p>Proin quis aliquam nisi.</p>-->
<!--							</div>-->
<!--						</li>-->
<!--					</ul>-->
<!--					<a href="become-volunteer.html" class="thm-btn feature-one__btn">View details</a>-->
<!--				</div>-->
<!--			</div>-->
<!---->
<!---->
<!--			<div class="col-xl-6 col-lg-6  wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">-->
<!--				<div class="feature-one__single feature-one__single--two">-->
<!--					<div class="feature-one__single-bg" style="background-image: url(assets/images/shapes/feature-one-shape-1.png);"></div>-->
<!--					<div class="feature-one__top">-->
<!--						<div class="feature-one__top-inner">-->
<!--							<div class="feature-one__top-icon feature-one__top-icon--two">-->
<!--								<span class="icon-gift-box"></span>-->
<!--							</div>-->
<!--							<div class="feature-one__top-title-box">-->
<!--								<h3 class="feature-one__top-title"><a href="about.html">Send-->
<!--										a gift for <br>-->
<!--										childrens</a></h3>-->
<!--							</div>-->
<!--						</div>-->
<!--					</div>-->
<!--					<p class="feature-one__text">Mauris feugiat at orci ac congue. mauris ut <br> lacus quis-->
<!--						proin-->
<!--						diam.</p>-->
<!--					<ul class="list-unstyled feature-one__point">-->
<!--						<li>-->
<!--							<div class="icon">-->
<!--								<span class="fa fa-check"></span>-->
<!--							</div>-->
<!--							<div class="text">-->
<!--								<p>Sed et nulla a nunc finibus eleifend.</p>-->
<!--							</div>-->
<!--						</li>-->
<!--						<li>-->
<!--							<div class="icon">-->
<!--								<span class="fa fa-check"></span>-->
<!--							</div>-->
<!--							<div class="text">-->
<!--								<p>Mauris nulla nisl, pellentesque vetae.</p>-->
<!--							</div>-->
<!--						</li>-->
<!--						<li>-->
<!--							<div class="icon">-->
<!--								<span class="fa fa-check"></span>-->
<!--							</div>-->
<!--							<div class="text">-->
<!--								<p>Proin quis aliquam nisi.</p>-->
<!--							</div>-->
<!--						</li>-->
<!--					</ul>-->
<!--					<a href="about.html" class="thm-btn feature-one__btn">View details</a>-->
<!--				</div>-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->
<!--</section>-->
<!--Feature One End-->

<!--About One Start-->
<section class="about-one" style="margin-top: -100px;">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<div class="about-one__right">
					<div class="section-title text-left">
						<h6 class="section-title__title" style="font-size: 25px; text-align: center"><?php echo $company_data->fullname ?></h6>
<!--						<span class="section-title__tagline">--><?php //echo $company_data->motto ?><!--</span>-->
					</div>
					<p style="padding-left: 10px; text-align: justify;">
						<?php echo $company_data->brief_background ?>
						<br><a href="<?php echo base_url() ?>/about-us">Read More...</a>
					</p>
					<!--					<div class="about-one__fund">-->
					<!--						<p class="about-one__fund-text">Helped fund <span>24,537</span> Projects in-->
					<!--							<span>24</span> Countries, Benefiting over <br> <span>8.2</span> Million people.</p>-->
					<!--					</div>-->
					<ul class="list-unstyled about-one__points">
						<li>
							<div class="icon">
								<span class="icon-solidarity"></span>
							</div>
							<div class="text">
								<h5><a href="<?php echo base_url() ?>about-us">What we believe in</a></h5>
								<p><?php echo $company_data->motto; ?></p>
							</div>
						</li>
					</ul>
					<a href="<?php echo base_url() ?>aboutus" class="thm-btn about-one__btn">Discover More</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!--About One End-->

<!--Help Start-->
<section class="help">
	<div class="help-bg jarallax" data-jarallax="" data-speed="0.2" data-imgposition="50% 0%"></div>
	<div class="help-shape-1"></div>
	<div class="container">
		<div class="row">
			<!--Help Single Start-->
			<div class="col-xl-12 col-lg-12 wow fadeInUp" data-wow-delay="200ms">
				<div class="help__single">
					<div class="help__single-inner">
						<div class="help__icon">
							<span class="icon-generous"></span>
						</div>
						<div class="help__content">
							<h4 class="help__title"><a href="<?php echo base_url() ?>aboutus">Objective</a></h4>
							<p class="help__text" style="text-align: justify;"><?php echo $company_data->objective ?></p>
						</div>
					</div>
				</div>
			</div>
			<!--Help Single End-->
			<!--Help Single Start-->
			<div class="col-xl-12 col-lg-12 wow fadeInUp" data-wow-delay="100ms">
				<div class="help__single">
					<div class="help__single-inner">
						<div class="help__icon">
							<span class="icon-charity"></span>
						</div>
						<div class="help__content">
							<h4 class="help__title"><a href="<?php echo base_url() ?>aboutus">Specific Objective</a></h4>
							<p class="help__text" style="color: whitesmoke;text-align: justify;"><?php echo substr($company_data->core_values,0,200) ?>
<!--								<br><a href="--><?php //echo base_url() ?><!--about-us">Read More...</a></p>-->
						</div>
					</div>
				</div>
			</div>
			<!--Help Single End-->
		</div>
	</div>
</section>
<!--Help End-->


<!--Events Page Start-->
<section class="events-page">
	<div class="container">
		<div class="row">
			<?php foreach ($services as $service): ?>
				<div class="col-xl-4 col-lg-6 col-md-6">
					<!--Events One Single Start-->
					<div class="events-one__single">
						<div class="events-one__img">
							<img class="standard-image" src="<?php echo base_url()?>assets/images/services/<?php echo $service->picture ?>" alt="">
							<div class="events-one__content">
								<h3 class="events-one__title"><a href="<?php echo base_url() ?>service-details/<?php echo $service->slug ?>"><?php echo $service->name ?></a></h3>
							</div>
						</div>
					</div>
					<!--Events One Single End-->
				</div>
			<?php endforeach; ?>
			<div class="col-xl-4 col-lg-6 col-md-6">
				<!--Events One Single Start-->
				<div class="events-one__single">
					<div class="footer_box__block">
						<!--						<h4>Twitter Feeds</h4>-->
						<div class="container" style="height: 300px; width: 100%; overflow: scroll;">
							<a class="twitter-timeline" href="<?php echo $company_data->twitter ?>">Tweets by <?php echo $company_data->shortname ?></a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
						</div>
					</div>
				</div>
				<!--Events One Single End-->
			</div>


			<div class="col-xl-4 col-lg-6 col-md-6">
				<!--Events One Single Start-->
				<div class="events-one__single">
					<div class="footer_box__block">
						<!--						<h4>Twitter Feeds</h4>-->
						<div class="container" style="height: 300px; width: 100%; overflow: scroll;">
							<iframe src="https://www.facebook.com/plugins/page.php?href=<?php echo $company_data->facebook ?>&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="500"
									style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
						</div>
					</div>
				</div>
				<!--Events One Single End-->
			</div>

		</div>
	</div>
</section>
<!--Events Page End-->

<!--Brand One Start-->
<section class="brand-one">
	<div class="container">
		<div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 10, "autoplay": { "delay": 5000 }, "breakpoints": {
                            "0": {
                                "spaceBetween": 30,
                                "slidesPerView": 2
                            },
                            "375": {
                                "spaceBetween": 30,
                                "slidesPerView": 2
                            },
                            "575": {
                                "spaceBetween": 30,
                                "slidesPerView": 3
                            },
                            "767": {
                                "spaceBetween": 50,
                                "slidesPerView": 4
                            },
                            "991": {
                                "spaceBetween": 50,
                                "slidesPerView": 5
                            },
                            "1199": {
                                "spaceBetween": 100,
                                "slidesPerView": 6
                            }
                        }}'>
			<div class="swiper-wrapper">
				<?php foreach($member_organisation as $member): ?>
					<div class="swiper-slide">
						<a target="_blank" href="<?php echo $member->website?>"><img src="<?php echo base_url()?>assets/images/members/<?php echo $member->picture ?>" alt=""></a>
					</div><!-- /.swiper-slide -->
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>
<!--Brand One End-->
