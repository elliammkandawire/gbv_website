<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once (dirname(__FILE__) . "/BaseController.php");

class Members extends BaseController {
	public function index()
	{
		$data["data"]=json_decode($this->data_model->getFromEndpoint(API_URL."member/all"));
		$data["title"]="members";
		$this->addWebsiteHeader("pages/members",$data);
	}

	public function details($slug=null){
		$data["data"]=json_decode($this->data_model->getFromEndpoint(API_URL."member/single/".$slug));
		$data["title"]="member_details";
		$this->addWebsiteHeader("pages/member-details",$data);
	}
}
