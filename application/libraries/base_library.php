<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Base_library {

	 protected $CI;
     public $user_id;

		public function __construct()
        {
               $this->CI =& get_instance();
               $this->CI->load->library('session');
               $this->CI->load->model('base_library_model');
               $this->user_id = $this->CI->session->userdata('user_id');
        }

        public function islogin()
        {

        	 if(!empty($this->user_id)){
        	 	$STATUS = true;
        	 }else{
        	 	$STATUS = false;
        	 }
        	 return $STATUS;
        }

        public function getFirstName(){
            return  $this->CI->base_library_model->getFieldData('first_name',$this->user_id);
        }

        public function getLastName(){
            return  $this->CI->base_library_model->getFieldData('last_name',$this->user_id);
        }

        public function getAllLocations(){
            return  $this->CI->base_library_model->getAllLocations();
        }

        public function getAllCategories(){
            return $this->CI->base_library_model->categories();
        }

        public function getBuyersStatus(){
            return $this->CI->base_library_model->getBuyersStatus($this->user_id);
        }

        public function getOTPStatus(){
            return $this->CI->base_library_model->getOTPStatus($this->user_id);
        }
}