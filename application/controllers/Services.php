<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once (dirname(__FILE__) . "/BaseController.php");

class Services extends BaseController {
	private $table="services";
	private $admin_url="services_admin";
	private $per_page=8;
	private $pagenation=array('8',"10","20","50","100","all");
	public function index()
	{
		$data["data"]=$this->readData($this->table);
		$data["title"]="services";
		$this->addWebsiteHeader("pages/services",$data);
	}

	public function details($slug=null){
		$data["data"]=$this->readSingle($this->table,"slug",$slug);
		$data["title"]="service_details";
		$this->addWebsiteHeader("pages/service-details",$data);
	}

	public function get_service_details($slug){
		echo json_encode($this->get_details($this->table,"slug", $slug)[0]);
		return json_encode($this->get_details($this->table,"slug", $slug)[0]);
	}

	public function admin_dashboard(){
		$ref=null;
		if(isset($_GET['page'])){
			$ref=$this->input->post("edit_slug");
		}
		if($this->check_if_logged_in()){
			$this->load_page_content($ref);
		}else{
			redirect("login","reflesh");
		}
	}

	public function load_page_content($ref){
		$this->getData($ref);
		$this->data['pagenation']=$this->pagenation;
		$this->load->view('dashboard/dashboard_header',$this->data);
		$this->load->view('dashboard/dashboard_services');
		$this->load->view('dashboard/dashboard_footer');
	}

	public function getData($ref){
		$all_data=$this->readDataWithOrder($this->table,"name","ASC");
		$this->data['data']=array_slice($all_data, 0,$this->per_page);
		$this->data['page']=$this->per_page;
		if($ref!=null && $ref!="all"){
			$this->data['data']=array_slice($all_data, 0,$ref);
			$this->data['page']=$ref;
		}else if($ref=="all"){
			$this->data['data']=$all_data;
			$this->data['page']=$ref;
		}
	}
	public function delete($slug){
		$this->data_model->delete($this->table,"slug",$slug);
		echo true;
	}
	public function addService(){
		$this->load->library('session');
		if(!$this->check_if_logged_in()){
			redirect("login");
		}
		$data=$this->addDefaultData();
		$data['slug']=$this->removeHtmlTags($this->url($this->input->post("name")).date("yyyyMMddHs"));

		//echo json_encode($data);exit;
		$this->insert($this->table,$data);
		$_SESSION['message']="Record Updated successfully";
		redirect($this->admin_url);
	}
	public function addDefaultData(){
		$data=array(
			"name"=>$this->removeHtmlTags($this->input->post("name")),
			"picture"=>$this->removeHtmlTags($this->input->post("current_picture")),
			"description"=>$this->removeHtmlTags(nl2br($this->input->post("content")))
		);

		/*check if picture is empty*/
		if ($_FILES['picture']['error']!=4) {
			$file_name=$this->do_upload("assets/images/services/","picture")['upload_data']['file_name'];
			$data['picture']=$file_name;
		}

		return $data;
	}

	public function updateService(){
		$this->load->library('session');
		if(!$this->check_if_logged_in()){
			redirect("login");
		}
		$data=$this->addDefaultData();
		$data['slug']=$this->removeHtmlTags($this->input->post("slug"));


		//echo json_encode($data);exit;
		$this->update($this->table,$data);
		$_SESSION['message']="Record Updated successfully";
		redirect($this->admin_url);
	}
}
