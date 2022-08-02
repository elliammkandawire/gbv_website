


	<!--Events Page Start-->
	<section class="events-page">
		<div class="container">
			<div class="row">

				<?php foreach ($events["content"] as $event): ?>
				<div class="col-xl-4 col-lg-6 col-md-6">
					<!--Events One Single Start-->
					<div class="events-one__single">
						<div class="events-one__img">
							<img src="<?php echo base_url()?>assets/images/events/<?php echo $event->picture ?>" alt="">
							<div class="events-one__date">
								<p><?php
									$date=date_create($event->event_date);
									echo date_format($date,"d M, Y");
									?></p>
							</div>
							<div class="events-one__content">
								<ul class="list-unstyled events-one__meta">
									<li><i class="fas fa-clock"></i><?php echo date_format($date,"H:m"); ?></li>
									<li><i class="fas fa-map-marker-alt"></i><?php echo $event->location ?></li>
								</ul>
								<h3 class="events-one__title"><a href="<?php echo base_url() ?>event-details/<?php echo $event->slug ?>"><?php echo $event->name ?></a></h3>
							</div>
						</div>
					</div>
					<!--Events One Single End-->
				</div>
				<?php  endforeach; ?>
				<nav aria-label="Page navigation example">
					<ul class="pagination">
						<li class="page-item">
							<a class="page-link" href="#" aria-label="Previous">
								<span aria-hidden="true">&laquo;</span>
								<span class="sr-only">Previous</span>
							</a>
						</li>
						<?php for($i=0; $i<json_decode($events["totalPages"])[0]->pages; $i++){ ?>
							<li class="page-item"><a class="page-link" href="<?php echo base_url() ?>events?page=<?php echo $i ?>"><?php echo $i+1 ?></a></li>
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
		</div>
	</section>
	<!--Events Page End-->


