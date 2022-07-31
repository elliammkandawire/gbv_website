

<!--Page Header Start-->
<section class="page-header">
	<div class="page-header-bg" style="background-image: url(<?php echo base_url() ?>assets/images/backgrounds/<?php echo $company_data->header?>)">
	</div>
	<div class="container">
		<div class="page-header__inner">
			<ul class="thm-breadcrumb list-unstyled">
				<li><a href="<?php echo base_url() ?>">Home</a></li>
				<li><span>/</span></li>
				<li class="active">Member details</li>
			</ul>
			<h2>Member Organisation</h2>
		</div>
	</div>
</section>
<!--Page Header End-->

<!--Donation Details Start-->
<section class="donation-details">
	<div class="container">
		<div class="row">
			<div class="col-xl-8 col-lg-7">
				<div class="donation-details__left">
					<div class="donation-details__top">
						<div class="donation-details__img">
							<div class="donation-details__date">
								<p><?php echo $member_details->name ?></p>
							</div>
						</div>
						<div class="donation-details__content">
							<h3 class="donation-details__title"><?php echo $member_details->name ?></h3>
							<p class="donation-details__text"><?php echo $member_details->description ?></p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-5">
				<div class="donation-details__sidebar">
					<div class="sidebar__post">
						<div class="sidebar-shape-1" style="background-image: url(assets/images/shapes/sidebar-shape-1.png);"></div>
						<h3 class="sidebar__title">Latest posts</h3>
						<ul class="sidebar__post-list list-unstyled">
							<?php foreach ($latest_news as $latest): ?>
								<li>
									<div class="sidebar__post-image">
										<img src="<?php echo base_url() ?>assets/images/blog/<?php echo $latest->picture ?>" alt="">
									</div>
									<div class="sidebar__post-content">
										<h3>
											<span class="sidebar__post-content-meta"><i class="fas fa-user-circle"></i> By admin</span>
											<a href="<?php echo base_url() ?>news-details/<?php echo $latest->slug ?>"><?php  echo $latest->name ?></a>
										</h3>
									</div>
								</li>
							<?php endforeach; ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--Donation Details End-->
