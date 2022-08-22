
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
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--FAQ One End-->


