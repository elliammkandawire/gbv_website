<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once (dirname(__FILE__) . "/BaseController.php");

class Home extends BaseController {
	private $table="company";
	public function index()
	{
		$this->addWebsiteHeader("pages/index",null);
	}

	public function aboutUs(){
		$this->addWebsiteHeader("pages/about",null);
    }

	public function update_company_details(){
		$this->checkIfLoggedIn();
		$this->addDashboardHeaderAndFooterAndMenu('dashboard/update_company_details', null);
	}

	public function dashboard(){
		$this->checkIfLoggedIn();
		$this->addDashboardHeaderAndFooterAndMenu('dashboard/dashboard', null);
	}

	public function update_company(){
		$this->checkIfLoggedIn();
		$data=array(
			"slug"=>$this->input->post("slug"),
			"shortname"=>$this->input->post("shortname"),
			"fullname"=>$this->input->post("fullname"),
			"location"=>$this->input->post("location"),
			"background"=>nl2br($this->input->post("background")),
			"brief_background"=>nl2br($this->input->post("brief_background")),
			"instagram"=>nl2br($this->input->post("instagram")),
			"linkedin"=>nl2br($this->input->post("linkedin")),
			"email"=>$this->input->post("email"),
			"phone"=>$this->input->post("phone"),
			"facebook"=>$this->input->post("facebook"),
			"twitter"=>$this->input->post("twitter"),
			"youtube"=>$this->input->post("youtube"),
			"postal_address"=>nl2br($this->input->post("postal_address")),
			"motto"=>nl2br($this->input->post("motto")),
			"objective"=>nl2br($this->input->post("objective")),
			"mobile_logo"=>$this->input->post("mobile_logo"),
			"map_src"=>$this->input->post("map_src"),
			"about_picture"=>$this->input->post("about_picture"),
			"header"=>$this->input->post("header"),
			"footer_logo"=>$this->input->post("footer_logo"),
			"logo"=>$this->input->post("current_logo"),
			"header"=>$this->input->post("current_header"),
			"events_header"=>$this->input->post("current_events_header"),
			"programs_header"=>$this->input->post("current_programs_header"),
			"contact_header"=>$this->input->post("current_contacts_header"),
			"core_values"=>nl2br($this->input->post("core_values"))
		);
		/*check if logo is empty*/
		if ($_FILES['logo']['error']!=4) {
			$file_name=$this->do_upload("./assets/images/resources","logo")['upload_data']['file_name'];
			$data['logo']=$file_name;
		}

		/*check if logo is empty*/
		if ($_FILES['header']['error']!=4) {
			$file_name=$this->do_upload("./assets/images/backgrounds","header")['upload_data']['file_name'];
			$data['header']=$file_name;
		}


		/*check if Program  is empty*/
		if ($_FILES['programs_header']['error']!=4) {
			$file_name=$this->do_upload("./assets/images/backgrounds","programs_header")['upload_data']['file_name'];
			$data['programs_header']=$file_name;
		}


		/*check if Events  is empty*/
		if ($_FILES['events_header']['error']!=4) {
			$file_name=$this->do_upload("./assets/images/backgrounds","events_header")['upload_data']['file_name'];
			$data['events_header']=$file_name;
		}


		/*check if Contact  is empty*/
		if ($_FILES['contact_header']['error']!=4) {
			$file_name=$this->do_upload("./assets/images/backgrounds","contact_header")['upload_data']['file_name'];
			$data['contact_header']=$file_name;
		}

		$this->update($this->table,$data);
		$_SESSION['message']="Record inserted successfully";
		redirect("dashboard");
	}
}
