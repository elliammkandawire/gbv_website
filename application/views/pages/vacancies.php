

	<!--Feature Four Start-->
	<section class="feature-four">
		<div class="container">
			<div class="feature-four__inner">
				<div class="row">

					<?php foreach ($vacancies as $vacancy): ?>
					<!--Feature Four Single Start-->
					<div class="col-xl-4 col-lg-4">
						<div class="feature-four__single">
							<div class="feature-four__icon">
								<span class="icon-bonus"></span>
							</div>
							<div class="feature-four__content">
								<a href="<?php echo base_url() ?>vacancy-details/<?php echo $vacancy->slug ?>"><h3 class="feature-four__title"><?php echo $vacancy->name ?></h3></a>
							</div>
						</div>
					</div>
					<?php endforeach; ?>
					<!--Feature Four Single End-->
				</div>
			</div>
		</div>
	</section>
	<!--Feature Four End-->
