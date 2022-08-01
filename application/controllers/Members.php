<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once (dirname(__FILE__) . "/BaseController.php");

class Members extends BaseController {
	private $table="member";
	public function index()
	{
		$data["data"]=$this->readData($this->table);
		$data["title"]="members";
		$this->addWebsiteHeader("pages/members",$data);
	}

	public function details($slug=null){
		$data["data"]=$this->readSingle($this->table,"slug",$slug);
		$data["title"]="member_details";
		$this->addWebsiteHeader("pages/member-details",$data);
	}
}
