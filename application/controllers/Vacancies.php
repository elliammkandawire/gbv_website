<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once (dirname(__FILE__) . "/BaseController.php");

class Vacancies extends BaseController {
	public function index()
	{
		$data["data"]=json_decode($this->data_model->getFromEndpoint(API_URL."vacancy/all"));
		$data["title"]="vacancies";
		$this->addWebsiteHeader("pages/vacancies",$data);
	}

	public function details($slug=null){
		$data["data"]=json_decode($this->data_model->getFromEndpoint(API_URL."vacancy/single/".$slug));
		$data["title"]="vacancy_details";
		$this->addWebsiteHeader("pages/vacancy-details",$data);
	}
}
