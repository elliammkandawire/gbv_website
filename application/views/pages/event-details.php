

	<!--Event Details Start-->
	<section class="event-details">
		<div class="container">
			<div class="row">
				<div class="col-xl-8 col-lg-7">
					<div class="event-details__left">
						<div class="event-details__top">
							<div class="event-details__date">
								<p><?php
									$date=date_create($event_details->event_date);
									echo date_format($date,"d M, Y");
									?></p>
							</div>
							<h3 class="event-details__title"><?php  echo $event_details->name ?></h3>
							<p class="event-details__text-1"><?php echo $event_details->details ?></p>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-5">
					<div class="event-details__right">
						<div class="event-details__info">
							<ul class="list-unstyled event-details__info-list">
								<li>
									<span>Time:</span>
									<p><?php echo date_format($date,"H:m");?></p>
								</li>
								<li>
									<span>Date:</span>
									<p><?php echo date_format($date,"d M, Y");?></p>
								</li>
								<li>
									<span>Location:</span>
									<p><?php echo $event_details->location;?></p>
								</li>
							</ul>
							<div class="event-details__social">
								<a href="#"><i class="fab fa-twitter"></i></a>
								<a href="#"><i class="fab fa-facebook"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Event Details End-->

