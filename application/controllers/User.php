<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct() {
         parent::__construct();
		 $this->load->helper('url');
		 $this->load->library('session');
    }
	public function index()
	{
		//$this->load->view('welcome_message');
	}
	//https://code.tutsplus.com/tutorials/how-to-implement-email-verification-for-new-members--net-3824
	public function e_verify()
	{

	}
}
