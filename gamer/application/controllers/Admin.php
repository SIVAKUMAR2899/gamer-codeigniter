<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

	// public function __construct(){
	// 	parent::__construct();
	// 	$this->load->helper('url');
	// 	$this->load->library('form_validation');
	// 	$this->load->model('user_model');
	// 	$this->load->database();
	// 	$this->load->library('session');
	// }

	public function index()
	{
		$this->load->view('admin');
	}

	function users_page(){
		$data['query'] = $this->get_model->users_page();
		$this->load->view('users',$data);
	}

	function add_user(){
		$this->load->view('adduser');
	}

	function add_process(){
		$data['firstname'] = $this->input->post("firstname");
		$data['lastname'] = $this->input->post("lastname");
		$data['age'] = $this->input->post("age");
		$data['gender'] = $this->input->post("gender");
		$data['contact'] = $this->input->post("contact");
		$data['email'] = $this->input->post("email");
		$data['password'] = md5($this->input->post("password"));

		$this->load->model('add_model');
		$status = $this->add_model->insert($data);

		if($status == true){
			header("location:".'users_page');
		}else{
			header("location:".'add_user');
		}
	}

	function delete_user(){
		$this->load->model('delete_model');
		$result = $this->delete_model->delete($id);
		// redirect(base_url('gamer'));
		if($result == true){
			header("location:".'users_page');
		}else{
			header("location:".'users_page');
		}
	}

	function edit_page(){
		// $data = $this->user_model->edit($edit_id);
		$this->load->view('updateuser');
	}

	function update_process(){
		$data['firstname'] = $this->input->post("firstname");
		$data['lastname'] = $this->input->post("lastname");
		$data['age'] = $this->input->post("age");
		$data['gender'] = $this->input->post("gender");
		$data['contact'] = $this->input->post("contact");
		$data['email'] = $this->input->post("email");

		$this->load->model('update_model');
		$status = $this->update_model->update($id,$data);

		if($status == true){
			header("location:".'users_page');
		}else{
			header("location:".'edit_user');
		}
	}


	public function login(){		
		// if($this->session->has_userdata('id')){
		// 	redirect('admin/home');
		// }
		$this->load->view('login_form');
	}

	public function login_user(){
	
		
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('password','Password','required');

		if($this->form_validation->run()==FALSE){
			$this->load->view('login_form');
		}else{
			$email = $this->input->post('email');
			$password =md5($this->input->post('password'));
			$this->load->database();
			$this->load->model('login_model');
			if($user = $this->login_model->loginuser($email)){
				if($user->password==$password){
					
					$this->load->library('session');
					$this->session->set_userdata('id',$user->id);
					redirect('admin/admin');
					
				}else{
					echo "Login Error!";
				}
			}else{
				echo "No account exists with this email!";
			}
		}

	
	}

	public function admin(){
		
		$this->load->view('admin');
	}

	public function logout(){
		
		$this->load->library('session');
		$this->session->unset_userdata('id');
		redirect('admin');
	}
	

}
