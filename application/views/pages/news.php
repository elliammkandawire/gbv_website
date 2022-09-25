
	<!--News Page Start-->
	<section class="news-page">
		<div class="container">
			<div class="row">

				<?php foreach ($news["news"]["content"] as $article): ?>
				<!--News One Single Start-->
				<div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
					<div class="news-one__single">
						<div class="news-one__img">
							<img style="object-fit: cover; height: 200px;" src="<?php echo base_url()?>assets/images/blog/<?php echo $article->picture?>" alt="">
						</div>
						<div class="news-one__content-box">
							<div class="news-one__content-inner">
								<div class="news-one__content">
									<h3 class="news-one__title"><a href="<?php echo base_url()  ?>news-details/<?php echo $article->slug?>"><?php echo $article->name ?></a></h3>
								</div>
								<div class="news-one__bottom">
									<div class="news-one__read-more">
										<a href="<?php echo base_url() ?>news-details/<?php echo $article->slug ?>"> <span class="icon-right-arrow"></span> Read
											More</a>
									</div>
									<div class="news-one__share">
										<a href="#"><i class="fas fa-share-alt"></i></a>
									</div>
								</div>
								<div class="news-one__social-box">
									<ul class="list-unstyled news-one__social">
										<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="#"><i class="fab fa-twitter"></i></a></li>
										<li><a href="#"><i class="fab fa-dribbble"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="news-one__date">
								<p><?php
									$date=date_create($article->date);
									echo date_format($date,"d M, Y");
									?></p>
							</div>
						</div>
					</div>
				</div>
				<!--News One Single End-->
				<?php endforeach; ?>


				<?php foreach ($news["publications"]["content"] as $publication): ?>
					<!--News One Single Start-->
					<div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
						<div class="news-one__single">
							<div class="news-one__img">
								<img style="object-fit: cover; height: 200px;" src="<?php echo base_url() ?>assets/images/publications/<?php echo $publication->picture ?>" alt="">
							</div>
							<div class="news-one__content-box">
								<div class="news-one__content-inner">
									<div class="news-one__content">
										<h3 class="news-one__title"><a href="<?php echo PDF_VIEWER.'?file='.$publication->pdf_link  ?>"><?php echo $publication->name ?></a></h3>
									</div>
									<div class="news-one__bottom">
										<div class="news-one__read-more">
											<a href="<?php echo PDF_VIEWER.'?file='.$publication->pdf_link  ?>"> <span class="icon-right-arrow"></span> Read
												More</a>
										</div>
										<div class="news-one__share">
											<a href="#"><i class="fas fa-share-alt"></i></a>
										</div>
									</div>
									<div class="news-one__social-box">
										<ul class="list-unstyled news-one__social">
											<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
											<li><a href="#"><i class="fab fa-twitter"></i></a></li>
											<li><a href="#"><i class="fab fa-dribbble"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="news-one__date">
									<p><?php
										$date=date_create($article->date);
										echo date_format($date,"d M, Y");
										?></p>
								</div>
							</div>
						</div>
					</div>
					<!--News One Single End-->
				<?php endforeach; ?>

			</div>

			<nav aria-label="Page navigation example">
				<ul class="pagination">
					<li class="page-item">
						<a class="page-link" href="#" aria-label="Previous">
							<span aria-hidden="true">&laquo;</span>
							<span class="sr-only">Previous</span>
						</a>
					</li>
					<?php for($i=0; $i<json_decode($news["news"]["totalPages"])[0]->pages; $i++){ ?>
					  <li class="page-item"><a class="page-link" href="<?php echo base_url() ?>news?page=<?php echo $i ?>"><?php echo $i+1 ?></a></li>
					<?php } ?>
					<li class="page-item">
						<a class="page-link" href="#" aria-label="Next">
							<span aria-hidden="true">&raquo;</span>
							<span class="sr-only">Next</span>
						</a>
					</li>
				</ul>
			</nav>
		</div>
	</section>
	<!--News Page End-->
