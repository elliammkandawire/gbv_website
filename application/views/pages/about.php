

<!--Page Header Start-->
	<section class="page-header">
		<div class="page-header-bg" style="background-image: url(<?php echo base_url() ?>assets/images/backgrounds/<?php echo $company_data->header?>)">
		</div>
		<div class="container">
			<div class="page-header__inner">
				<ul class="thm-breadcrumb list-unstyled">
					<li><a href="<?php echo base_url() ?>">Home</a></li>
					<li><span>/</span></li>
					<li class="active">Pages</li>
				</ul>
				<h2>About us</h2>
			</div>
		</div>
	</section>
	<!--Page Header End-->

	<!--FAQ One Start-->
	<section class="faq-one faq-two">
		<div class="faq-one-shape-1" style="background-image: url(assets/images/shapes/faq-one-shape-1.png);"></div>
		<div class="faq-one-bg" style="background-image: url(assets/images/backgrounds/faq-one-bg.png);"></div>
		<div class="container">
			<div class="row">
				<div class="col-xl-7 col-lg-7">
					<div class="faq-one__left">
						<div class="section-title text-left">
							<span class="section-title__tagline">About <?php echo $company_data->fullname ?></span>
							<h2 class="section-title__title"><?php echo $company_data->motto  ?>
							</h2>
						</div>
						<p class="faq-one__text-1">
							<?php echo $company_data->background ?>
						</p>
<!--						<a href="faq.html" class="thm-btn faq-one__btn">Learn how to get help</a>-->
					</div>
				</div>
				<div class="col-xl-5 col-lg-5">
					<div class="faq-one__right">
						<div class="accrodion-grp" data-grp-name="faq-one-accrodion">
							<div class="accrodion active">
								<div class="accrodion-title">
									<h4>Core Values</h4>
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
							<div class="accrodion">
								<div class="accrodion-title">
									<h4>Objective</h4>
								</div>
								<div class="accrodion-content">
									<div class="inner">
										<p><?php echo $company_data->objective ?></p>
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
