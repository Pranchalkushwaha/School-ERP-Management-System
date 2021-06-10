<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
	public function __construct() {
		parent :: __construct();
		$this->load->model('Login_model');
	}

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
	public function login()
	{
		$this->load->view('login');
	}
	public function check_user()
	{
		$email =  $this->input->post('email');
		$password =  $this->input->post('password');
		$user_data = array('email'=>$email);
		$users = $this->Login_model->check_user($email,$password);
		if($users == true){
			$this->session->set_userdata('loggedin',$user_data);
			$data['title'] = 'Dashboard';
			$this->load->view('header',$data);
			$this->load->view('dashboard');
		}
		else{
			echo "Something went wrong.";
		}
	}
	public function dashboard()
	{
		if($this->session->userdata('loggedin')){
			$data['title'] = 'Dashboard';
			$this->load->view('header',$data);
			$this->load->view('dashboard');
		}
		else{
			$this->load->view('login');
		}
	}

	public function logout()
	{
		unset($_SESSION['loggedin']);
		$this->load->view('login');
	}
}
