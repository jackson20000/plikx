<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct() {
         parent::__construct();
         $this->load->helper('url');
         $this->load->library('session');
         $this->load->model('admin_login');
    }

	public function index()
	{   
        $data = array(
            'error' => true
        );
        if(!$this->session->userdata('logged_in')){
		$this->load->view('dashboard/login',$data);
        }
        else{
            redirect(dashboard);
        }
    }
    public function verify(){
        if(isset($_POST['username'])){
        $username = $this->input->post("username");
        $password = $this->input->post("password");
        }
        $result_login = $this->admin_login->login($username,$password);
		    
		if($result_login>0){
        //session Data
        $newdata = array(
            'username'  => $username,
            'logged_in' => TRUE
        );
        $this->session->set_userdata($newdata);
        redirect('dashboard','refresh');
        }
        else{
            $data = array(
                'error' => false
            );
            $this->load->view('dashboard/login',$data);
        }
    }
    public function logout()
	{   
		unset(
            $_SESSION['username'],
            $_SESSION['logged_in']
        );
        $data = array(
            'error' => true
        );
        $this->load->view('dashboard/login',$data);
    }
}
