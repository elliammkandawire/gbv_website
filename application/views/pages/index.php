
<!--Events Page Start-->
<section class="events-page">
	<div class="container">
		<div class="row">
			<div class="col-xl-4 col-lg-6 col-md-6">
				<!--Events One Single Start-->
				<div class="events-one__single">
					<div class="events-one__img">
						<img class="standard-image" src="<?php echo base_url()?>assets/images/backgrounds/<?php echo $company_data->header ?>" alt="">
						<div class="events-one__date">
							<p>Who we are</p>
						</div>
						<div class="events-one__content">
							<h3 class="events-one__title"><a href="event-details.html">Who we are</a></h3>
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
							<a class="twitter-timeline" href="<?php echo $company_data->twitter ?>">Tweets by <?php echo $company_data->shortname ?></a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
						</div>
					</div>
				</div>
				<!--Events One Single End-->
			</div>
			<?php foreach ($services as $service): ?>
			<div class="col-xl-4 col-lg-6 col-md-6">
				<!--Events One Single Start-->
				<div class="events-one__single">
					<div class="events-one__img">
						<img class="standard-image" src="<?php echo base_url()?>assets/images/resources/<?php echo $service->picture ?>" alt="">
						<div class="events-one__date">
							<p><?php echo $service->name?></p>
						</div>
						<div class="events-one__content">
							<h3 class="events-one__title"><a href="<?php echo base_url() ?>service-details/<?php echo $service->slug ?>"><?php echo $service->name ?></a></h3>
						</div>
					</div>
				</div>
				<!--Events One Single End-->
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
<!--Events Page End-->

<!--About One Start-->
<section class="about-one">
	<div class="about-one__shape-box-1">
		<div class="about-one__shape-1" style="background-image: url(assets/images/shapes/about-one-shape-1.png);"></div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-xl-6">
				<div class="about-one__left">
					<div class="about-one__img-box wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
						<div class="about-one__img">
							<img src="assets/images/resources/about-one-img-1.jpg" alt="">
						</div>
						<div class="about-one__img-border"></div>
						<div class="about-one__curved-circle-box">
							<div class="curved-circle">
                                        <span class="curved-circle--item">
                                            <?php echo $company_data->fullname ?>
                                        </span>
							</div><!-- /.curved-circle -->
							<div class="about-one__curved-circle-icon">
								<img style="object-fit: cover; height: 150px;" src="<?php echo base_url() ?>assets/images/resources/<?php echo $company_data->mobile_logo  ?>" alt="">
							</div>
						</div>
<!--						<div class="about-one__shape-2 zoom-fade">-->
<!--							<img src="assets/images/shapes/about-one-shape-2.png" alt="">-->
<!--						</div>-->
<!--						<div class="about-one__shape-3 float-bob-y">-->
<!--							<img src="assets/images/shapes/about-one-shape-3.png" alt="">-->
<!--						</div>-->
<!--						<div class="about-one__shape-4 zoominout">-->
<!--							<img src="assets/images/shapes/about-one-shape-4.png" alt="">-->
<!--						</div>-->
					</div>
				</div>
			</div>
			<div class="col-xl-6">
				<div class="about-one__right">
					<div class="section-title text-left">
						<span class="section-title__tagline"><?php echo $company_data->fullname ?></span>
						<h3 class="section-title__title"><?php echo $company_data->motto ?></h3>
					</div>
					<p class="about-one__text" style="padding-left: 10px">
						<?php echo substr($company_data->background,0,223) ?>
					  <br><a href="<?php echo base_url() ?>/aboutus">Read More...</a>
					</p>
<!--					<div class="about-one__fund">-->
<!--						<p class="about-one__fund-text">Helped fund <span>24,537</span> Projects in-->
<!--							<span>24</span> Countries, Benefiting over <br> <span>8.2</span> Million people.</p>-->
<!--					</div>-->
					<ul class="list-unstyled about-one__points">
						<li>
							<div class="icon">
								<span class="icon-volunteer"></span>
							</div>
							<div class="text">
								<h5><a href="become-volunteer.html">Join our team</a></h5>
								<p>Join in fight against GBV.</p>
							</div>
						</li>
						<li>
							<div class="icon">
								<span class="icon-solidarity"></span>
							</div>
							<div class="text">
								<h5><a href="donate-now.html">Start donating</a></h5>
								<p>Lorem ipsum dolor sit amet not quis mis notted.</p>
							</div>
						</li>
					</ul>
					<a href="<?php echo base_url() ?>/aboutus" class="thm-btn about-one__btn">Discover More</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!--About One End-->

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


