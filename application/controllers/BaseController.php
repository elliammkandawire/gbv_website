<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BaseController extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('data_model');
	}
	public function addWebsiteHeader($page, $additional_data)
	{
		$data["company_data"]=json_decode($this->data_model->getFromEndpoint(COMPANY_DETAILS))[0];
		$data["member_organisation"]=json_decode($this->data_model->getFromEndpoint(ALL_MEMBERS));
		$data["latest_news"]=json_decode($this->data_model->getFromEndpoint(API_URL."news/latest"));
		$data["services"]=json_decode($this->data_model->getFromEndpoint(API_URL."services/all"));
		$data[$additional_data["title"]]=$additional_data["data"];
		$this->load->view('pages/website_header',$data);
		$this->load->view($page);
		$this->load->view('pages/website_footer');
	}
	public function paginated($page, $url, $size){
		return json_decode($this->data_model->getPagenated(API_URL.$url, $page, $size));
    }
}
