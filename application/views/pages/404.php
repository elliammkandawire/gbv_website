
	<!--Page Header Start-->
	<section class="page-header">
		<div class="page-header-bg" style="background-image: url(<?php echo base_url() ?>assets/images/backgrounds/<?php echo $company_data->header?>)">
		</div>
		<div class="container">
			<div class="page-header__inner">
				<ul class="thm-breadcrumb list-unstyled">
					<li><a href="<?php echo base_url() ?>">Home</a></li>
					<li><span>/</span></li>
					<li class="active">404</li>
				</ul>
				<h2>404 error</h2>
			</div>
		</div>
	</section>
	<!--Page Header End-->

	<!--Error Page Start-->
	<section class="error-page">
		<div class="error-page-shape" style="background-image: url(assets/images/shapes/error-page-shape.png);">
		</div>
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="error-page__inner">
						<div class="error-page__title-box">
							<h2 class="error-page__title">404</h2>
							<h2 class="error-page__title-2">404</h2>
						</div>
						<h3 class="error-page__tagline">Sorry we can't find that page <br>
							you’re looking for.</h3>
						<form class="error-page__form">
							<div class="error-page__form-input">
								<input type="search" placeholder="Search here">
								<button type="submit"><i class="icon-magnifying-glass"></i></button>
							</div>
						</form>
						<a href="<?php echo base_url() ?>" class="thm-btn error-page__btn">back to home</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Error Page End-->
