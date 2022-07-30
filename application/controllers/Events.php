<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once (dirname(__FILE__) . "/BaseController.php");

class Events extends BaseController {
	public function index()
	{
		$page=$this->input->get("page");
		if($this->input->get("page")==null){
			$page=0;
		}
		$data["data"]=$this->paginated($page, "events/", 10);
		$data["title"]="events";
		$this->addWebsiteHeader("pages/events",$data);
	}

	public function details($slug=null){
		$data["data"]=json_decode($this->data_model->getFromEndpoint(API_URL."events/single/".$slug));
		$data["title"]="event_details";
		$this->addWebsiteHeader("pages/event-details",$data);
	}
}
