<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once (dirname(__FILE__) . "/BaseController.php");

class Team extends BaseController {
	public function index()
	{
		$data["data"]=json_decode($this->data_model->getFromEndpoint(API_URL."team/all"));
		$data["title"]="teams";
		$this->addWebsiteHeader("pages/team",$data);
	}
}
