<body class="sign-inup" id="body">
<div class="container d-flex align-items-center justify-content-center form-height-login pt-24px pb-24px">
	<div class="row justify-content-center">
		<div class="col-lg-6 col-md-10">
			<div class="card">
				<div class="card-header bg-primary">
					<div class="ec-brand">
						<a href="<?php echo base_url() ?>" title="<?php echo $company_data->fullname ?>">
							<img style="object-fit: cover; height: 80px" src="<?php echo base_url() ?>assets/images/logo.png" alt="">
						</a>
					</div>
				</div>
				<div class="card-body p-5">
					<h4 class="text-dark mb-5">Sign In</h4>

					<?php  echo form_open('auth', array('role'=>'form')); ?>
						<div class="row">
							<input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
							<div class="form-group col-md-12 mb-4">
								<input type="email" class="form-control" name="email" placeholder="Username">
							</div>

							<div class="form-group col-md-12 ">
								<input type="password" class="form-control" name="password" placeholder="Password">
							</div>

							<div class="col-md-12">
								<div class="d-flex my-2 justify-content-between">
									<div class="d-inline-block mr-3">
										<div class="control control-checkbox">Remember me
											<input type="checkbox">
											<div class="control-indicator"></div>
										</div>
									</div>

									<p><a class="text-blue" href="#">Forgot Password?</a></p>
								</div>

								<button type="submit" class="btn btn-primary btn-block mb-4">Sign In</button>

								<p class="sign-upp">
									<?php
									    if($this->session->flashdata('error')){ ?>
								        <div class="alert alert-danger text-center" style="margin-top:20px;">
									     <?php echo $this->session->flashdata('error'); ?>
								        </div>
								   <?php }  ?>
								</p>
							</div>
						</div>
					<?php echo form_close(); ?>
				</div>
			</div>
		</div>
	</div>
</div>




</body>
