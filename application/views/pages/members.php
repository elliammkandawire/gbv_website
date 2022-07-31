

	<!--Page Header Start-->
	<section class="page-header">
		<div class="page-header-bg" style="background-image: url(<?php echo base_url() ?>assets/images/backgrounds/<?php echo $company_data->header?>)">
		</div>
		<div class="container">
			<div class="page-header__inner">
				<ul class="thm-breadcrumb list-unstyled">
					<li><a href="<?php echo base_url() ?>">Home</a></li>
					<li><span>/</span></li>
					<li class="active">Members</li>
				</ul>
				<h2>Member Organisations</h2>
			</div>
		</div>
	</section>
	<!--Page Header End-->

	<!--Donations List Start-->
	<section class="donations-list">
		<div class="container">
			<div class="donations-list__inner">

				<?php foreach ($members as $member): ?>
				<!--Donations List Single Start-->
				<div class="donations-list__single">
					<div class="row">
						<div class="col-xl-6 col-lg-6">
							<div class="donations-list__img">
								<img src="<?php echo base_url() ?>assets/images/members/<?php echo $member->picture ?>" alt="">
							</div>
						</div>
						<div class="col-xl-6 col-lg-6">
							<div class="donations-list__right">
								<div class="donations-list__content">
									<div class="donations-list__category">
										<p><?php echo $member->name ?></p>
									</div>
									<h3 class="donations-list__title"><a href="<?php echo base_url() ?>member-details/<?php echo $member->slug ?>"><?php  echo $member->name ?></a></h3>
									<p class="donations-list__text"><?php echo substr($member->description,0,100) ?>...</p>
									<div class="donations-list__progress">
										<div class="news-one__read-more">
											<a href="<?php echo base_url() ?>member-details/<?php echo $member->slug ?>"> <span class="icon-right-arrow"></span> Read
												More</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--Donations List Single End-->
				<?php endforeach; ?>
			</div>
		</div>
	</section>
	<!--Donations List End-->
