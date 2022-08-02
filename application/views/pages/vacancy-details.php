

<!--News details Start-->
<section class="news-details">
	<div class="container">
		<div class="row">
			<div class="col-xl-8 col-lg-7">
				<div class="news-details__left">
					<div class="news-details__content">
						<h3 class="news-details__title"><?php  echo $vacancy_details->name ?></h3>
						<p class="news-details__text-1"><?php echo $vacancy_details->details ?></p>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-lg-5">
				<div class="sidebar">
					<div class="sidebar__single sidebar__search">
						<form action="#" class="sidebar__search-form">
							<input type="search" placeholder="Search here">
							<button type="submit"><i class="icon-magnifying-glass"></i></button>
						</form>
					</div>
					<div class="sidebar__single sidebar__post">
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
<!--News details End-->
