<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BaseController extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('data_model');
	}
	public function addWebsiteHeader($page)
	{
		$data["company_data"]=json_decode($this->data_model->getFromEndpoint(COMPANY_DETAILS))[0];
		$data["member_organisation"]=json_decode($this->data_model->getFromEndpoint(ALL_MEMBERS));
		$this->load->view('pages/website_header',$data);
		$this->load->view($page);
		$this->load->view('pages/website_footer');
	}
}
