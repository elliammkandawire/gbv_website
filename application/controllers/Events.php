<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once (dirname(__FILE__) . "/BaseController.php");

class Events extends BaseController {
	private $table="events";
	public function index()
	{
		$page=$this->input->get("page");
		if($this->input->get("page")==null){
			$page=0;
		}
		$data["data"]=array("content"=>$this->new_paginated($this->table,$page,10), "totalPages"=>$this->no_of_pages($this->table,10));
		$data["title"]="events";
		$this->addWebsiteHeader("pages/events",$data);
	}

	public function details($slug=null){
		$data["data"]=$this->readSingle($this->table,"slug",$slug);
		$data["title"]="event_details";
		$this->addWebsiteHeader("pages/event-details",$data);
	}
}
