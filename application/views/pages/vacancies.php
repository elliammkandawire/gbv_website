
    <!--Page Header Start-->
	<section class="page-header">
		<div class="page-header-bg" style="background-image: url(<?php echo base_url() ?>assets/images/backgrounds/<?php echo $company_data->header?>)">
		</div>
		<div class="container">
			<div class="page-header__inner">
				<ul class="thm-breadcrumb list-unstyled">
					<li><a href="<?php  echo  base_url()?>">Home</a></li>
					<li><span>/</span></li>
					<li class="active">Vacancies</li>
				</ul>
				<h2>Vacancies</h2>
			</div>
		</div>
	</section>
	<!--Page Header End-->

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
