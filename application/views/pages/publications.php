
	<!--Page Header Start-->
	<section class="page-header">
		<div class="page-header-bg" style="background-image: url(<?php echo base_url() ?>assets/images/backgrounds/<?php echo $company_data->header?>)">
		</div>
		<div class="container">
			<div class="page-header__inner">
				<ul class="thm-breadcrumb list-unstyled">
					<li><a href="<?php echo base_url() ?>">Home</a></li>
					<li><span>/</span></li>
					<li class="active">Publications</li>
				</ul>
				<h2>Publications</h2>
			</div>
		</div>
	</section>
	<!--Page Header End-->

	<!--Events Page Start-->
	<section class="events-page">
		<div class="container">
			<div class="row">

				<?php foreach ($publications->content as $publication): ?>
				<div class="col-xl-4 col-lg-6 col-md-6">
					<!--Events One Single Start-->
					<div class="events-one__single">
						<div class="events-one__img">
							<img src="<?php echo base_url() ?>assets/images/publications/<?php echo $publication->picture ?>" alt="">
							<div class="events-one__date">
								<p>23 May, 2022</p>
							</div>
							<div class="events-one__content">
								<h3 class="events-one__title"><a target="_blank" href="<?php echo PDF_VIEWER.'?file='.$publication->pdfLink  ?>"><?php echo $publication->name ?></a></h3>
							</div>
						</div>
					</div>
					<!--Events One Single End-->
				</div>
				<?php endforeach; ?>
			</div>
		</div>
		<nav aria-label="Page navigation example">
			<ul class="pagination">
				<li class="page-item">
					<a class="page-link" href="#" aria-label="Previous">
						<span aria-hidden="true">&laquo;</span>
						<span class="sr-only">Previous</span>
					</a>
				</li>
				<?php for($i=0; $i<$publications->totalPages; $i++){ ?>
					<li class="page-item"><a class="page-link" href="<?php echo base_url() ?>publications?page=<?php echo $i ?>"><?php echo $i+1 ?></a></li>
				<?php } ?>
				<li class="page-item">
					<a class="page-link" href="#" aria-label="Next">
						<span aria-hidden="true">&raquo;</span>
						<span class="sr-only">Next</span>
					</a>
				</li>
			</ul>
		</nav>
	</section>
	<!--Events Page End-->


