

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
