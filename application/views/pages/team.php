

	<!--Team One Start-->
	<section class="team-one">
		<div class="container">
			<div class="row">

				<?php foreach ($teams as $team): ?>
				<!--Team One Single Start-->
				<div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
					<div class="team-one__single">
						<div class="team-one__img">
							<img src="<?php echo base_url() ?>assets/images/team/<?php  echo $team->picture ?>" alt="">
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

