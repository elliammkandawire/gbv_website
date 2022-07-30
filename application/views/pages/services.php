    <!--Page Header Start-->
	<section class="page-header">
		<div class="page-header-bg" style="background-image: url(<?php echo base_url() ?>assets/images/backgrounds/<?php echo $company_data->header?>)">
		</div>
		<div class="container">
			<div class="page-header__inner">
				<ul class="thm-breadcrumb list-unstyled">
					<li><a href="<?php echo base_url() ?>">Home</a></li>
					<li><span>/</span></li>
					<li class="active">Services</li>
				</ul>
				<h2>Donations</h2>
			</div>
		</div>
	</section>
	<!--Page Header End-->

	<!--Donation Start-->
	<section class="donation">
		<div class="container">
			<div class="row">

				<?php foreach ($services as $service): ?>
				<!--Causes One Single Start-->
				<div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
					<div class="causes-one__single">
						<div class="causes-one__img">
							<img class="standard-image" src="<?php echo base_url() ?>assets/images/resources/<?php echo $service->picture ?>" alt="">
							<div class="causes-one__cat">
								<p><?php echo $service->name ?></p>
							</div>
						</div>
						<div class="causes-one__content">
							<h3 class="causes-one__title"><a href="<?php echo base_url() ?>service-details/<?php echo $service->slug ?>"><?php echo $service->name ?></a>
							</h3>
							<p class="causes-one__text"><?php echo substr($service->description,0,100) ?>...</p>
							<div class="causes-one__progress">
								<div class="causes-one__progress-shape" style="background-image: url(assets/images/shapes/causes-one-progress-shape-1.png);">
								</div>
								<div>
									<a href="<?php echo base_url() ?>service-details/<?php echo $service->slug ?>"> <span class="icon-right-arrow"></span> Read
										More</a>
								</div>
								<div class="causes-one__goals">
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--Causes One Single End-->
				<?php endforeach; ?>


			</div>
		</div>
	</section>
	<!--Donation End-->
