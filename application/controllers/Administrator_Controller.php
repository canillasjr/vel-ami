<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator_Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array(
			'Crud_Model'
			));
		$this->load->library(array(
			"Includes","session"
			));

	}
	public function get_login()
	{
		if($this->session->userdata('admin_id') != ''){
			redirect(base_url('administrator/home'));
		}
		$this->includes->header("Admin Login");
		$this->load->view('administrator/login');
		$this->includes->footer("includes/footer");
	}
	public function forgot_password_page()
	{
		if($this->session->userdata('admin_id') != ''){
			redirect(base_url('administrator/home'));
		}
		$this->includes->header("Reset Password");
		$this->load->view('administrator/forgot_password');
		$this->includes->footer("includes/footer");
	}
	public function homepage()
	{
		if(empty($this->session->userdata('admin_id'))){
			redirect(base_url('administrator/login'));
		}
		$this->includes->header("Home");
		$this->load->view('administrator/homepage');
		$this->includes->footer("includes/footer");
	}
	public function list_users_page(){
		if(empty($this->session->userdata('admin_id'))){
			redirect(base_url('administrator/login'));
		}
		$this->includes->header("Users");
		$this->load->view('administrator/users_page');
		$this->includes->footer("includes/footer");
	}
	public function admin_account_page(){
		if(empty($this->session->userdata('admin_id'))){
			redirect(base_url('administrator/login'));
		}
		$this->includes->header("Accounts");
		$data['admin_accounts'] = $this->Administrator_Model->display_account();
		$this->load->view('administrator/account_page',$data);
		$this->includes->footer("includes/footer");
	}
	public function category_page(){
		if(empty($this->session->userdata('admin_id'))){
			redirect(base_url('administrator/login'));
		}
		$this->includes->header("Categories");
		$data['categories'] = $this->Administrator_Model->display_categories();
		$this->load->view('administrator/category_page',$data);
		$this->includes->footer("includes/footer");
	}
	public function location_page(){
		if(empty($this->session->userdata('admin_id'))){
			redirect(base_url('administrator/login'));
		}
		$this->includes->header("Locations");
		$data['locations'] = $this->Administrator_Model->display_locations();
		$this->load->view('administrator/location_page',$data);
		$this->includes->footer("includes/footer");
	}
	public function sliders_page(){
		if(empty($this->session->userdata('admin_id'))){
			redirect(base_url('administrator/login'));
		}
		$data = array(
			'get_all' => $this->Administrator_Model->get_all_slider_data()
		);
		$this->includes->header("Sliders");
		$this->load->view('administrator/sliderpage_page',$data);
		$this->includes->footer("includes/footer");
	}
	public function admin_profile_page(){
		if(empty($this->session->userdata('admin_id'))){
			redirect(base_url('administrator/login'));
		}
		$this->includes->header("Profile");
		$this->load->view('administrator/profile_page');
		$this->includes->footer("includes/footer");
	}

	public function process_login(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$access = $this->Administrator_Model->check_access($email,$password);

		if($access->num_rows() >= 1){

			 $this->session->set_userdata(
                array(
                    'admin_id' => $access->result()[0]->id,
                    'admin_email' => $access->result()[0]->email,
                    
                )
                );

			$this->session->set_flashdata('success', 'add successfully.');
			redirect(base_url('administrator/home'));
		}else{
			$this->session->set_flashdata('error', 'add successfully.');
			redirect(base_url('administrator/login'));
		}


	}

	public function create_account(){

		$firstname = $this->input->post('firstname');
		$lastname = $this->input->post('lastname');
		$email = $this->input->post('email');
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$data = array(
			'firstname' => html_escape($firstname),
			'lastname' => html_escape($lastname),
			'email' => html_escape($email),
			'username' => html_escape($username),
			'password' => sha1(md5(html_escape($password)))
		);

		if($this->Administrator_Model->create_account($data)){
			$this->session->set_flashdata('create_account_msg', 'add successfully.');
			redirect(base_url('administrator/admin_accounts'));
		}

	}

	public function update_account(){

		$firstname = $this->input->post('firstname');
		$lastname = $this->input->post('lastname');
		$email = $this->input->post('email');
		$username = $this->input->post('username');
		$id = $this->input->post('account_id');

		$data = array(
			'firstname' => html_escape($firstname),
			'lastname' => html_escape($lastname),
			'email' => html_escape($email),
			'username' => html_escape($username)
		);

		
		if($this->Administrator_Model->update_account($data,$id)){
			$this->session->set_flashdata('update_account_msg', 'update successfully.');
			redirect(base_url('administrator/admin_accounts'));

		}

	}

	public function delete_account(){

		$id = $this->input->post('account_id');

		if($this->Administrator_Model->delete_account($id)){
			$this->session->set_flashdata('delete_account_msg', 'update successfully.');
			redirect(base_url('administrator/admin_accounts'));
		}

	}

	public function create_category(){

		$category = $this->input->post('category');
		$icon = $this->input->post('icon');

		$data = array(
			'category' => html_escape($category),
			'icon' => html_escape($icon),
			
		);

		if($this->Administrator_Model->create_category($data)){
			$this->session->set_flashdata('create_category', 'update successfully.');
			redirect(base_url('administrator/categories'));
		}

	}

	public function update_category(){

		$category = $this->input->post('category');
		$icon = $this->input->post('icon');
		$id = $this->input->post('category_id');

		$data = array(
			'category' => html_escape($category),
			'icon' => html_escape($icon),
		);

		
		if($this->Administrator_Model->update_category($data,$id)){
			$this->session->set_flashdata('update_category', 'update successfully.');
			redirect(base_url('administrator/categories'));

		}

	}

	public function delete_category(){

		$id = $this->input->post('category_id');

		if($this->Administrator_Model->delete_category($id)){
			$this->session->set_flashdata('delete_account_msg', 'update successfully.');
			redirect(base_url('administrator/categories'));
		}

	}

	public function create_location(){

		$location = $this->input->post('location');

		$data = array(
			'location' => html_escape($location)
			
		);

		if($this->Administrator_Model->create_location($data)){
			$this->session->set_flashdata('create_category', 'update successfully.');
			redirect(base_url('administrator/locations'));
		}

	}

	public function update_location(){

		echo $location = $this->input->post('location');
		$id = $this->input->post('location_id');

		$data = array(
			'location' => html_escape($location)
			
		);

		
		if($this->Administrator_Model->update_location($data,$id)){
			$this->session->set_flashdata('update_category', 'update successfully.');
			redirect(base_url('administrator/locations'));

		}
	}

	public function delete_location(){

		$id = $this->input->post('location_id');

		if($this->Administrator_Model->delete_location($id)){
			$this->session->set_flashdata('delete_account_msg', 'update successfully.');
			redirect(base_url('administrator/locations'));
		}

	}

	public function logout(){
		$this->session->sess_destroy();
        redirect(base_url('administrator/login'));
	}
	/**
	*@param upload_slider
	*Upload slider using upload_helper
	*Created By: Felmerald
	*/ 
	public function upload_slider(){
		$admin_id = $this->session->userdata('admin_id');
		$image = do_upload();
		$title = $this->input->post('title');
		$info = $this->input->post('info');
		$this->Administrator_Model->add_upload_slider($admin_id,$image,$title,$info);
		redirect(base_url('administrator/sliders'));
		exit();
	}


}