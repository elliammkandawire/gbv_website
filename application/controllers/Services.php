<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once (dirname(__FILE__) . "/BaseController.php");

class Services extends BaseController {
	public function index()
	{
		$data["data"]=json_decode($this->data_model->getFromEndpoint(API_URL."services/all/"));
		$data["title"]="services";
		$this->addWebsiteHeader("pages/services",$data);
	}

	public function details($slug=null){
		$data["data"]=json_decode($this->data_model->getFromEndpoint(API_URL."services/single/".$slug));
		$data["title"]="service_details";
		$this->addWebsiteHeader("pages/service-details",$data);
	}
}
