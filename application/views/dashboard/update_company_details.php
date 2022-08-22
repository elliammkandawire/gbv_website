<?php $data=$company_data; echo form_open_multipart('update_company');?>
	<div class="row">
		<div class="col-lg-9">
			<input type="text" name="slug" value="<?php echo $data->slug ?>" style="display: none">
			<div class="form-group">
				<label for="recipient-name" class="col-form-label">Company Short Name:</label>
				<input type="text" class="form-control" value="<?php echo $data->shortname ?>" name="shortname" required="" placeholder="Company Short Name">
			</div>

			<div class="form-group">
				<label for="recipient-name" class="col-form-label">Company Name:</label>
				<input type="text" class="form-control" value="<?php echo $data->fullname ?>" name="fullname" required="" placeholder="Company Full Name">
			</div>

			<div class="form-group">
				<label for="recipient-name" class="col-form-label">Company Motto:</label>
				<input type="text" class="form-control" value="<?php echo $data->motto ?>" name="motto" required="" placeholder="Company Motto">
			</div>

			<div class="form-group">
				<label for="recipient-name" class="col-form-label">You Tube:</label>
				<input type="text" class="form-control" value="<?php echo $data->youtube ?>" name="youtube" required="" placeholder="Youtube Link">
			</div>

			<div class="form-group">
				<label for="message-text" class="col-form-label">Physical Location</label>
				<input type="text" class="form-control" value="<?php echo $data->location ?>" name="location" placeholder="Company Location" required="">
			</div>
			<div class="form-group">
				<label for="message-text" class="col-form-label">Company Email</label>
				<input type="email" class="form-control" value="<?php echo $data->email ?>" name="email" placeholder="Company Email" required="">
			</div>

			<div class="form-group">
				<label for="message-text" class="col-form-label">Company Phone</label>
				<input type="tel" class="form-control" value="<?php echo $data->phone ?>" name="phone" placeholder="Ground Phone Number" required="">
			</div>


			<div class="form-group">
				<label for="message-text" class="col-form-label">Facebook</label>
				<input type="text" class="form-control" value="<?php echo $data->facebook ?>" name="facebook" placeholder="Example: https://www.facebook.com/">
			</div>
			<div class="form-group">
				<label for="message-text" class="col-form-label">Instagram</label>
				<input type="text" class="form-control" value="<?php echo $data->instagram ?>" name="instagram" placeholder="Example: https://www.instagram.com/"">
			</div>

			<div class="form-group">
				<label for="message-text" class="col-form-label">Linkedin</label>
				<input type="text" class="form-control" value="<?php echo $data->linkedin ?>" name="linkedin" placeholder="Example: https://www.linkedin.com/">
			</div>
			<div class="form-group">
				<label for="message-text" class="col-form-label">Twitter</label>
				<input type="text" class="form-control" value="<?php echo $data->twitter ?>" name="twitter" placeholder="example: https://www.twitter.com/">
			</div>
			<div class="form-group">
				<label for="message-text" class="col-form-label">Company Address:</label>
				<textarea class="form-control summernote"  name="postal_address" required="" style="white-space: pre-wrap;" rows="7"><?php echo $data->postal_address ?></textarea>
			</div>
			<div class="form-group">
				<label for="message-text" class="col-form-label">Company Objective:</label>
				<textarea class="form-control summernote" name="objective" style="white-space: pre-wrap;" rows="5"><?php echo $data->objective ?></textarea>
			</div>

			<div class="form-group">
				<label for="message-text" class="col-form-label">Specific Objectives</label>
				<textarea class="form-control summernote" name="core_values" required="" style="white-space: pre-wrap;" rows="5"><?php echo $data->core_values ?></textarea>
			</div>

			<div class="form-group">
				<label for="message-text" class="col-form-label">Company Logo:</label>
				<input type="file" class="form-control" id="logo" name="logo" accept=".jpg, .png, .jpeg, .gif" onchange="readURL(this,'company_logo')">
				<input type="hidden" value="<?php echo $data->logo ?>" name="current_logo">
				<input type="hidden" value="<?php echo $data->mobile_logo ?>" name="mobile_logo">
				<input type="hidden" value="<?php echo $data->about_picture ?>" name="about_picture">
				<input type="hidden" value="<?php echo $data->header ?>" name="header">
				<input type="hidden" value="<?php echo $data->footer_logo ?>" name="footer_logo">
				<br>
				<div>
					<img src="<?php echo base_url() ?>assets/images/resources/<?php echo $data->logo ?>" alt="" style="object-fit: cover; height: 200px; width: 100%;" id="company_logo">
				</div>
			</div>


			<div class="form-group">
				<label for="message-text" class="col-form-label">Website Header:</label>
				<input type="file" class="form-control" id="header" name="header" accept=".jpg, .png, .jpeg, .gif" onchange="readURL(this,'company_header')">
				<input type="hidden" value="<?php echo $data->header ?>" name="current_header">
				<br>
				<div>
					<img src="<?php echo base_url() ?>assets/images/backgrounds/<?php echo $data->header ?>" alt="" style="object-fit: cover; height: 200px; width: 100%;" id="company_header">
				</div>
			</div>
		</div>
		<div class="col-lg-2">
		</div>
		<div class="col-lg-9">
			<div class="form-group">
				<label for="message-text" class="col-form-label">Company Brief History</label>
				<textarea class="form-control summernote" name="brief_background" required="" style="white-space: pre-wrap;" rows="5"><?php echo $data->brief_background ?></textarea>
			</div>
			<div class="form-group">
				<label for="message-text" class="col-form-label">Company Background</label>
				<textarea class="form-control summernote" name="background" required="" style="white-space: pre-wrap;" rows="5"><?php echo $data->background ?></textarea>
			</div>
		</div>
	</div>
	</div>
	<div class="modal-footer">
		<button type="submit" class="btn btn-primary">Save</button>
	</div>
<?php echo form_close(); ?>