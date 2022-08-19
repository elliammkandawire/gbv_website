<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once (dirname(__FILE__) . "/BaseController.php");
class Email_controller extends BaseController {

	function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('form');
	}

	public function index() {

		$this->load->helper('form');
		$this->load->view('email_form');
	}

	public function send_mail() {
		$from_email = "mkandawireelliam@yahoo.com";
		$to_email = "mkandawireelliam@gmail.com";

		//Load email library
		$this->load->library('email');

		$this->email->from($from_email, 'GBV Website');
		$this->email->to($to_email);
		$this->email->subject('Website Enquiries');
		$this->email->message($this->input->post("message")."<br>".$this->input->post("email"));

		//Send mail
		if($this->email->send())
			$this->session->set_flashdata("email_sent","Email sent successfully.");
		else
			$this->session->set_flashdata("email_sent","Error in sending Email.");
		//$this->addWebsiteHeader("pages/contact",null);
	}
}
