
		<!--Donation Start-->
		<section class="donation">
			<div class="container">
				<div class="row">

					<?php foreach ($members as $member): ?>
					<!--Causes One Single Start-->
					<div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
						<div class="causes-one__single">
							<div class="causes-one__img">
								<img style="min-height: 150px;" src="<?php echo base_url() ?>assets/images/members/<?php echo $member->picture ?>" alt="">
<!--								<div class="causes-one__cat">-->
<!--									<p>--><?php //echo $member->name ?><!--</p>-->
<!--								</div>-->
							</div>
							<div class="causes-one__content">
								<h3 class="causes-one__title"><a target="_blank" href="<?php echo $member->website ?>"><?php echo $member->name ?></a>
								</h3>
<!--								<p class="causes-one__text">--><?php //echo substr($member->description,0,100) ?><!--...</p>-->
<!--								<div class="causes-one__progress">-->
<!--									<div class="news-one__read-more">-->
<!--										<a href="--><?php //echo base_url() ?><!--member-details/--><?php //echo $member->slug ?><!--"> <span class="icon-right-arrow"></span> Read-->
<!--											More</a>-->
<!--									</div>-->
<!--								</div>-->
							</div>
						</div>
					</div>
					<!--Causes One Single End-->
					<?php endforeach; ?>
				</div>
			</div>
		</section>
		<!--Donation End-->
