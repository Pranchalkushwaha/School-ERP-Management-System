<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teacher extends CI_Controller {
	
	public function __construct()
	{
		parent :: __construct();
		$this->load->model('Model_Teacher');
		$this->load->model('Login_model');
		$this->load->library('form_validation');	
	}

	
	
	
	public function index()
	{
		if($this->session->userdata('loggedin')){
			$data['title'] = 'Teacher';
			$this->load->view('header',$data);
			$this->load->view('teacher', array('error' => ' ' ));
		}
		else{
			$this->load->view('login');
		}
	}

	public function create()
	{
		# code...
		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 100;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('teacher_image'))
		{
				$error = array('error' => $this->upload->display_errors());
				$data['title'] = 'Teacher';				
				$this->load->view('header',$data);
				$this->load->view('teacher',$error);
		}
		else
		{
				$data = array('upload_data' => $this->upload->data());

				$teacherimg_name = $data['upload_data']['file_name'];
				$validator = array('success'=> false, 'message' => array());
				$validate_data = array(
					array(
						'field' => 'teacher_name',
						'lable' => 'Name',
						'rules' => 'required',
					),
					array(
						'field' => 'teacher_age',
						'lable' => 'Age',
						'rules' => 'required',
					),
					array(
						'field' => 'teacher_email',
						'lable' => 'E-Mail',
						'rules' => 'required',
					),
					array(
						'field' => 'teacher_contact',
						'lable' => 'Contact',
						'rules' => 'required',
					)
				);
				$this->form_validation->set_rules($validate_data);
				$this->form_validation->set_error_delimiters('<p>','</p>');
				if($this->form_validation->run() === true){
					$create = $this->Model_Teacher->create($teacherimg_name);
					if($create == true){
						$validator['success'] = true;
						$validator['message'] = "Successfully Added";
						$data['title'] = 'Teacher';
						$this->load->view('header',$data);
						$this->load->view('teacher', array('error' => ' ' ));
					}
					else{
						$validator['success'] = false;
						$validator['message'] = "Error while inserting the information into the database.";
					}
				}
				else{
					$validator['success'] = false;
					foreach($_POST as $key => $value){
						$validator['message'][$key] = form_error($key);
					}
				}
		}

		
		

	}

	public function fetchTeacherData($teacherId = null){
		if($teacherId){
			$result = $this->Model_Teacher->fetchTeacherData($teacherId);
		}
		else{
			$teacherData = $this->Model_Teacher->fetchTeacherData();
			$result = array("data" => array());

			foreach($teacherData as $key => $value){
				$button = "<button>Button</button>";
				$photo = '<img id = "teacher_img" style = "width:50px; height:50px; border-radius:10px" src = "'.base_url().'uploads/'.$value['teacher_image'].'" alt = "Photo">';

				$result['data'][$key] = array(
					$photo,
					$value['teacher_name'],
					$value['teacher_age'],
					$value['teacher_email'],
					$value['teacher_contact'],
					$button
				);
			}//foreach
		}
		echo json_encode($result);
	}
}
