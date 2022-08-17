
	<!--FAQ One Start-->
	<section class="faq-one faq-two">
		<div class="faq-one-shape-1" style="background-image: url(assets/images/shapes/faq-one-shape-1.png);"></div>
		<div class="faq-one-bg" style="background-image: url(assets/images/backgrounds/faq-one-bg.png);"></div>
		<div class="container">
			<div class="row">
				<div class="col-xl-12 col-lg-12">
					<div class="faq-one__left">
						<div class="section-title text-left">

							<h6 class="section-title__title">About <?php echo $company_data->fullname  ?>
							</h6>
						</div>
						<p class="faq-one__text-1">
							<?php echo $company_data->background ?>
						</p>
<!--						<a href="faq.html" class="thm-btn faq-one__btn">Learn how to get help</a>-->
					</div>
				</div>
				<div class="col-xl-12 col-lg-12">
					<div class="faq-one__right">
						<div class="accrodion-grp" data-grp-name="faq-one-accrodion">
							<div class="accrodion active">
								<div class="accrodion-title">
									<h4>Objective</h4>
								</div>
								<div class="accrodion-content">
									<div class="inner">
										<p><?php echo $company_data->objective ?></p>
									</div><!-- /.inner -->
								</div>
							</div>
							<div class="accrodion">
								<div class="accrodion-title">
									<h4>Specific objectives</h4>
								</div>
								<div class="accrodion-content">
									<div class="inner">
										<p><?php echo $company_data->core_values ?></p>
									</div><!-- /.inner -->
								</div>
							</div>
							<div class="accrodion">
								<div class="accrodion-title">
									<h4>Motto</h4>
								</div>
								<div class="accrodion-content">
									<div class="inner">
										<p><?php echo $company_data->motto ?></p>
									</div><!-- /.inner -->
								</div>
							</div>
							<div class="accrodion last-chiled">
								<div class="accrodion-title">
									<h4>Mission</h4>
								</div>
								<div class="accrodion-content">
									<div class="inner">
										<p><?php echo $company_data->mission ?></p>
									</div><!-- /.inner -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--FAQ One End-->


	<!--Gallery Page Start-->
	<section class="gallery-page">
		<div class="container">
			<div class="section-title text-center">
				<span class="section-title__tagline">Gallery</span>
				<h5>Our Recent Activities</h5>
			</div>
			<div class="row">
				<?php foreach ($gallery as $picture): ?>
				<!--Gallery Page Single Start-->
				<div class="col-xl-4 col-lg-6 col-md-6">
					<div class="gallery-page__single">
						<div class="gallery-page__img">
							<img style="object-fit: cover; height: 250px;" src="<?php echo  base_url()?>assets/images/gallery/<?php echo $picture->picture ?>" alt="">
							<a href="<?php echo  base_url()?>assets/images/gallery/<?php echo $picture->picture ?>" class="img-popup"></a>
							<!-- /.img-popup -->
							<div class="gallery-page__content">
								<p class="gallery-page__sub-title"><?php  echo $picture->caption ?></p>
								<h5 class="gallery-page__title"><a href="#"><?php echo $picture->name ?></a></h5>
							</div>
						</div>
					</div>
				</div>
				<!--Gallery Page Single End-->
				<?php endforeach; ?>
			</div>
		</div>
	</section>
	<!--Gallery Page End-->
