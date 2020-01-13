<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend_Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library(array(
			"Includes","Session"
			));
		$this->load->model(array(
				'Crud_Model'
		));
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
	public function index()
	{
		$data['title'] = "Vil ami";
		$data['profile'] = $this->Administrator_Model->get_profile($this->session->userdata('user_id'));
		$data['product_list'] = $this->Administrator_Model->all_product();
		$data['categories'] = $this->Administrator_Model->display_categories();
		$data['locations'] = $this->Administrator_Model->display_locations();
		$data['get_all'] = $this->Administrator_Model->get_all_slider_data();
		$this->includes->header($data);
		$this->load->view('index',$data);
		$this->includes->footer("includes/footer",$data);
	}
	public function search_result_by_location(){
		$this->includes->header("Search result by location");
		$this->load->view('search_result');
		$this->includes->footer("includes/footer");
	}
	public function getshopname(){
		if(empty($this->session->userdata('user_id'))){
			redirect('/');
		}
		$data['title'] = "Shop Page";
		$data['profile'] = $this->Administrator_Model->get_profile($this->session->userdata('user_id'));
		$data['product_list'] = $this->Administrator_Model->all_product();
		$data['categories'] = $this->Administrator_Model->display_categories();
		$data['locations'] = $this->Administrator_Model->display_locations();
		$this->includes->header($data);
		$this->load->view('shop_page',$data);
		$this->includes->footer("includes/footer");
	}
	public function product_permalink(){
		if(empty($this->session->userdata('user_id'))){
			redirect('/');
		}
		$data['title'] = "Product Page";
		$data['profile'] = $this->Administrator_Model->get_profile($this->session->userdata('user_id'));
		$data['product_list'] = $this->Administrator_Model->all_product();
		$data['categories'] = $this->Administrator_Model->display_categories();
		$data['locations'] = $this->Administrator_Model->display_locations();
		$this->includes->header($data);
		$this->load->view('registered_user/product_permalink_page',$data);
		$this->includes->footer("includes/footer");
	}
	public function get_message(){
		if(empty($this->session->userdata('user_id'))){
			redirect('/');
		}
		$data['title'] = "Messenger";
		$data['profile'] = $this->Administrator_Model->get_profile($this->session->userdata('user_id'));
		$data['product_list'] = $this->Administrator_Model->all_product();
		$data['categories'] = $this->Administrator_Model->display_categories();
		$data['locations'] = $this->Administrator_Model->display_locations();
		$this->includes->header($data);
		$this->load->view('registered_user/messager_page',$data);
		$this->includes->footer("includes/footer");
	}
	public function get_myshop()
	{	
		if(empty($this->session->userdata('user_id'))){
			redirect('/');
		}
		$data['title'] = "Vil ami";
		$user_id = $this->session->userdata('user_id');
		$data['profile'] = $this->Administrator_Model->get_profile($user_id);

		$shop = $this->Administrator_Model->get_shopname($user_id);
		$data['shopname'] = $shop->result();
		$data['categories'] = $this->Administrator_Model->display_categories();
		$data['locations'] = $this->Administrator_Model->display_locations();
		$data['product_list'] = $this->Administrator_Model->product_list($user_id);
	
		$this->includes->header($data);
		$this->load->view('registered_user/myshop_page',$data);
		// $this->load->view('registered_user/modal/product-images-modal');
		// $this->load->view('registered_user/modal/product-modal');
		$this->includes->footer("includes/footer");
	}

	public function get_add_products()
	{	
		if(empty($this->session->userdata('user_id'))){
			redirect('/');
		}
		$data['title'] = "Vil ami";
		$user_id = $this->session->userdata('user_id');
		$data['profile'] = $this->Administrator_Model->get_profile($user_id);
		$shop = $this->Administrator_Model->get_shopname($user_id);
		$data['shopname'] = $shop->result();
		$data['categories'] = $this->Administrator_Model->display_categories();
		$data['locations'] = $this->Administrator_Model->display_locations();
	
		$this->includes->header($data);
		$this->load->view('registered_user/add_products',$data);
		// $this->load->view('registered_user/modal/product-images-modal');
		// $this->load->view('registered_user/modal/product-modal');
		$this->includes->footer("includes/footer");
	}
	public function get_profile(){
		if(empty($this->session->userdata('user_id'))){
			redirect('/');
		}
		$data['title'] = "Vil ami";
		$user_id = $this->session->userdata('user_id');
		$data['profile'] = $this->Administrator_Model->get_profile($user_id);
		$data['categories'] = $this->Administrator_Model->display_categories();
		$data['locations'] = $this->Administrator_Model->display_locations();
		$this->includes->header($data);
		$this->load->view('registered_user/profile_page');
		$this->includes->footer("includes/footer");
	}

	public function register_user(){
		$firstname = $this->input->post('firstname');
		$lastname = $this->input->post('lastname');
		$mobile_number = $this->input->post('mobile_number');
		$email_address = $this->input->post('email_address');
		$password = $this->input->post('password');

		$data = array(
			'firstname' => html_escape($firstname),
			'lastname' => html_escape($lastname),
			'mobile' => html_escape($mobile_number),
			'email' => html_escape($email_address),
			'password' => sha1(md5(html_escape($password)))
		);

		if ($this->Administrator_Model->register_user($data)) {
			$this->session->set_flashdata('create_account_msg', 'add successfully.');
			redirect(base_url('/'));
		}
	}

	public function login_user(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$data = $this->Administrator_Model->login_user($email,$password);

		if($data->num_rows() > 0){
			 $this->session->set_userdata(
                array(
                    'user_id' => $data->result()[0]->id,
                    'user_email' => $data->result()[0]->email,  
                )
                );

			$this->session->set_flashdata('success', 'add successfully.');
			redirect(base_url('/dashboard/profile'));
		}else{
			redirect(base_url('/'));
		}
	}

	public function create_shop(){
		$user_id = $this->session->userdata('user_id');
		$shop_name = $this->input->post('shopname');

		$data = array(
			'user_id' => html_escape($user_id),
			'shop_name' => html_escape($shop_name)
		);

		if ($this->Administrator_Model->create_shop($data)) {
			$this->session->set_flashdata('create_account_msg', 'add successfully.');
			redirect(base_url('dashboard/myshop'));
		}

	}

	public function logout(){
		$this->session->sess_destroy();
        redirect(base_url());
	}

	public function upload_shop_image(){
        $user_id = $this->session->userdata('user_id');

        $new_folder = $user_id."_".sha1(md5($user_id));
        
        $config['upload_path']   = './uploads/'.$new_folder; 
        $config['allowed_types'] = 'gif|jpg|png|jpeg|JPG|PNG|JPEG'; 
        $config['max_size']      = 2048;

        $this->load->library('upload', $config);

        if (!is_dir('uploads'))
        {
            mkdir('./uploads', 0777, true);
        }
        $dir_exist = true; // flag for checking the directory exist or not
        if (!is_dir('uploads/' . $new_folder))
        {
            mkdir('./uploads/' . $new_folder, 0777, true);
            $dir_exist = false; // dir not exist
            
        }
        else{
        	
        }

        if (!$this->upload->do_upload('file'))
        {
        	
            // upload failed
            //delete dir if not exist before upload
            if(!$dir_exist)
              rmdir('./uploads/' . $new_folder);

            return array('error' => $this->upload->display_errors('<span>', '</span>'));
            
        } else
        {
            // upload success
            $upload_data = $this->upload->data();
            
            $data = array(
                'image' => $upload_data['file_name']
            );

            if($this->Administrator_Model->shop_image($data,$user_id)){
               redirect(base_url('dashboard/myshop'));
           }else{
           		redirect(base_url('dashboard/myshop'));
           }
           
        }
	}

	public function add_product_process(){
		$user_id = $this->session->userdata('user_id');
		$category = $this->input->post('category');
		$location = $this->input->post('location');
		$product_name = $this->input->post('product_name');
		$price = $this->input->post('price');
		$description = $this->input->post('description');


		$data = array(
			'product_name' => html_escape($product_name),
			'category' => html_escape($category),
			'location' => html_escape($location),
			'price' => html_escape($price),
			'description' => html_escape($description),
			'user_id' => $user_id,
			'created_date' => date("d-m-Y / H:i:s")
		);

		if($this->Administrator_Model->add_products($data)){
			redirect(base_url('dashboard/myshop/add_products'));
		}

	}

	public function display_product_image_form(){
		echo "ddd";
	}

	public function ajax_file_upload_handler(){
		$category = $this->input->post('category');

		echo $category;
	}

}
