

	<!--Team One Start-->
	<section class="team-one">
		<div class="container">
			<div class="section-title text-center">
				<span class="section-title__tagline">Our Management Team</span>
				<h5>Our memebership is diverse, representing humanitarian,<br> development, human rights, advocacy, and gender focused organizations. </h5>
			</div>
			<div class="row">
				<?php foreach ($teams as $team): ?>
				<!--Team One Single Start-->
				<div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
					<div class="team-one__single">
						<div class="team-one__img">
							<img style="object-fit: cover; height: 350px;" src="<?php echo base_url() ?>assets/images/team/<?php  echo $team->picture ?>" alt="">
							<div class="team-one__social">
								<a target="_blank" href="<?php echo $team->facebook_url ?>"><i class="fab fa-facebook"></i></a>
								<a target="_blank" href="<?php echo $team->twitter_url ?>"><i class="fab fa-twitter"></i></a>
							</div>
						</div>
						<div class="team-one__content">
							<h3 class="team-one__name"><a href="#"><?php echo $team->name ?></a></h3>
							<p class="team-one__sub-title"><?php echo $team->position ?></p>
						</div>
					</div>
				</div>
				<!--Team One Single End-->
				<?php endforeach; ?>
			</div>
		</div>
	</section>
	<!--Team One End-->

	<!--Become Volunteer One Start-->
	<section class="become-volunteer-one">
		<div class="become-volunteer-one__bg-box">
			<div class="become-volunteer-one__bg jarallax" data-jarallax="" data-speed="0.2" data-imgposition="50% 0%"></div>
		</div>
		<div class="become-volunteer-one__shape-1"></div>
		<div class="container">
			<div class="become-volunteer-one__inner">
				<p class="become-volunteer-one__sub-title">Membership</p>
				<p class="help__text">The Irish Consortium on Gender Based Violence (ICGBV) was born from an Irish based alliance of international human rights, humanitarian and development organisations who are leaders in the sector in terms of GBV prevention and response. Members include Action Aid Ireland, Concern Worldwide, Plan Ireland, World Vision Ireland, Trócaire, GOAL, Irish Red Cross, Christian Aid Ireland, Oxfam Ireland, Self Help Africa, Irish Aid and Irish Defence Forces.</p>
				<div class="become-volunteer-one__btn-box">
					<a href="<?php echo base_url() ?>members" class="thm-btn become-volunteer-one__btn">Our Members</a>
				</div>
			</div>
		</div>
	</section>
	<!--Become Volunteer One End-->

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

