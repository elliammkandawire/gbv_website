<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once (dirname(__FILE__) . "/BaseController.php");

class Gallery extends BaseController {
	private $table="gallary";
	private $admin_url="gallery";
	public function index()
	{
		$data["data"]=$this->readDataWithOrder($this->table,"date","DESC");
		$data["title"]="data";
		$this->addDashboardHeaderAndFooterAndMenu("dashboard/dashboard_gallery",$data);
	}

	public function get_gallery_details($slug){
		echo json_encode($this->get_details($this->table,"slug", $slug)[0]);
		return json_encode($this->get_details($this->table,"slug", $slug)[0]);
	}

	public function add_gallery(){
		$this->checkIfLoggedIn();
		$data=array(
			"slug"=>$this->removeHtmlTags($this->url($this->input->post("name")).date("yyyyMMddHs")),
			"name"=>$this->removeHtmlTags($this->input->post("name")),
			"caption"=>nl2br($this->input->post("caption"))
		);

		/*check if picture is empty*/
		if ($_FILES['picture']['error']!=4) {
			$file_name=$this->do_upload("./assets/images/gallery","picture")['upload_data']['file_name'];
			$data['picture']=$file_name;
		}
		$this->insert($this->table,$data);
		$_SESSION['message']="Record Added successfully";
		redirect($this->admin_url);
	}

	public function update_gallery(){
		$this->load->library('session');
		if(!$this->check_if_logged_in()){
			redirect("login");
		}
		$data=array(
			"slug"=>$this->removeHtmlTags($this->input->post("slug")),
			"name"=>$this->removeHtmlTags($this->input->post("name")),
			"caption"=>nl2br($this->input->post("caption")),
			"picture"=>$this->removeHtmlTags($this->input->post("current_picture"))
		);

		/*check if picture is empty*/
		if ($_FILES['picture']['error']!=4) {
			$file_name=$this->do_upload("./assets/images/gallery","picture")['upload_data']['file_name'];
			$data['picture']=$file_name;
		}

		//echo json_encode($data);exit;
		$this->update($this->table,$data);
		$_SESSION['message']="Record Updated successfully";
		redirect($this->admin_url);
	}
}
