<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once (dirname(__FILE__) . "/BaseController.php");

class Publications extends BaseController {
	public function index()
	{
		$page=$this->input->get("page");
		if($this->input->get("page")==null){
			$page=0;
		}
		$data["data"]=$this->paginated($page, "publication/", 10);
		$data["title"]="publications";
		$this->addWebsiteHeader("pages/publications",$data);
	}

	public function details($slug=null){
		$data["data"]=json_decode($this->data_model->getFromEndpoint(API_URL."news/single/".$slug));
		$data["title"]="news_details";
		$this->addWebsiteHeader("pages/news-details",$data);
	}
}
