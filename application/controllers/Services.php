<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once (dirname(__FILE__) . "/BaseController.php");

class Services extends BaseController {
	private $table="services";
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
}
