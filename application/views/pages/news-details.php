<!--Page Header Start-->
	<section class="page-header">
		<div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
		</div>
		<div class="container">
			<div class="page-header__inner">
				<ul class="thm-breadcrumb list-unstyled">
					<li><a href="<?php echo base_url() ?>">Home</a></li>
					<li><span>/</span></li>
					<li class="active">News details</li>
				</ul>
				<h2>News details</h2>
			</div>
		</div>
	</section>
	<!--Page Header End-->

	<!--News details Start-->
	<section class="news-details">
		<div class="container">
			<div class="row">
				<div class="col-xl-8 col-lg-7">
					<div class="news-details__left">
						<div class="news-details__img">
							<img class="standard-image" src="<?php echo base_url()?>assets/images/blog/<?php echo $news_details->picture?>" alt="">
							<div class="news-details__date">
								<p><?php
									$date=date_create($news_details->date);
									echo date_format($date,"d M, Y");
									?></p>
							</div>
						</div>
						<div class="news-details__content">
							<h3 class="news-details__title"><?php  echo $news_details->name ?></h3>
							<p class="news-details__text-1"><?php echo $news_details->details ?></p>
						</div>
						<div class="comment-form">
							<h3 class="comment-form__title">Leave a comment</h3>
							<form action="assets/inc/sendemail.php" class="comment-one__form contact-form-validated" novalidate="novalidate">
								<div class="row">
									<div class="col-xl-6">
										<div class="comment-form__input-box">
											<input type="text" placeholder="Your name" name="name">
										</div>
									</div>
									<div class="col-xl-6">
										<div class="comment-form__input-box">
											<input type="email" placeholder="Email address" name="email">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xl-12">
										<div class="comment-form__input-box text-message-box">
											<textarea name="message" placeholder="Write a message"></textarea>
										</div>
										<div class="comment-form__btn-box">
											<button type="submit" class="thm-btn comment-form__btn">Submit
												comment</button>
										</div>
									</div>
								</div>
							</form>
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
						<div class="sidebar__single sidebar__category">
							<div class="sidebar-shape-1" style="background-image: url(assets/images/shapes/sidebar-shape-1.png);"></div>
							<h3 class="sidebar__title">Categories</h3>
							<ul class="sidebar__category-list list-unstyled">
								<li><a href="news-details.html">Donations <span class="icon-right-arrow"></span></a>
								</li>
								<li class="active"><a href="news-details.html">Charity <span class="icon-right-arrow"></span></a></li>
								<li><a href="news-details.html">Fundraising <span class="icon-right-arrow"></span></a>
								</li>
								<li><a href="news-details.html">Food & Water <span class="icon-right-arrow"></span></a></li>
								<li><a href="news-details.html">Kids Education <span class="icon-right-arrow"></span></a>
								</li>
							</ul>
						</div>
						<div class="sidebar__single sidebar__tags">
							<div class="sidebar-shape-1" style="background-image: url(assets/images/shapes/sidebar-shape-1.png);"></div>
							<h3 class="sidebar__title">Tags</h3>
							<div class="sidebar__tags-list">
								<a href="#">fundraising</a>
								<a href="#">charity</a>
								<a href="#">donation</a>
								<a href="#">water</a>
								<a href="#">kids</a>
								<a href="#">Education</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--News details End-->
