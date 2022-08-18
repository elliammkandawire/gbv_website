

	<!--Contact Three Start-->
	<section class="contact-three">
		<div class="contact-three-shape" style="background-image: url(assets/images/shapes/contact-three-shape.png);"></div>
		<div class="container">
			<div class="section-title text-center">
				<span class="section-title__tagline">Contact with us</span>
				<h2 class="section-title__title">Feel free to write us <br> anytime</h2>
			</div>
			<div class="contact-page__form-box">
				<form action="assets/inc/sendemail.php" class="contact-page__form contact-form-validated" novalidate="novalidate">
					<div class="row">
						<div class="col-xl-6">
							<div class="contact-form__input-box">
								<input type="text" placeholder="Your name" name="name">
							</div>
						</div>
						<div class="col-xl-6">
							<div class="contact-form__input-box">
								<input type="email" placeholder="Email address" name="email">
							</div>
						</div>
						<div class="col-xl-6">
							<div class="contact-form__input-box">
								<input type="text" placeholder="Phone" name="phone">
							</div>
						</div>
						<div class="col-xl-6">
							<div class="contact-form__input-box">
								<input type="text" placeholder="Subject" name="subject">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xl-12">
							<div class="contact-form__input-box text-message-box">
								<textarea name="message" placeholder="Write a message"></textarea>
							</div>
							<div class="contact-form__btn-box">
								<button type="submit" class="thm-btn contact-form__btn">Send a message</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</section>
	<!--Contact Three End-->

	<!--Contact One Start-->
	<section class="contact-one">
		<div class="container">
			<div class="contact-one__inne">
				<ul class="list-unstyled contact-one__list">
					<li class="contact-one__single">
						<div class="contact-one__icon">
							<span class="icon-phone-call"></span>
						</div>
						<div class="contact-one__content">
							<p class="contact-one__sub-title">Office Line</p>
							<h3 class="contact-one__number"><a href="tel:<?php echo $company_data->phone ?>"><?php echo $company_data->phone ?></a></h3>
						</div>
					</li>
					<li class="contact-one__single">
						<div class="contact-one__icon">
							<span class="icon-message"></span>
						</div>
						<div class="contact-one__content">
							<p class="contact-one__sub-title">Send email</p>
							<h3 class="contact-one__number"><a href="mailto:<?php echo $company_data->email ?>"><?php echo $company_data->email ?></a></h3>
						</div>
					</li>
					<li class="contact-one__single">
						<div class="contact-one__icon">
							<span class="icon-location"></span>
						</div>
						<div class="contact-one__content">
							<p class="contact-one__sub-title"><?php echo $company_data->location ?></p>
							<h3 class="contact-one__number"><?php echo $company_data->postal_address ?></h3>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</section>
	<!--Contact One End-->

	<!--Google Map Start-->
	<section class="google-map google-map-two" style="margin-top: -50px">
		<iframe src="<?php echo $company_data->map_src ?>" width="100%" height="450" style="border:0;" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</section>
	<!--Google Map End-->
