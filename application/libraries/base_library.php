<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Base_library {

	 protected $CI;
     public $user_id;

		public function __construct()
        {
               $this->CI =& get_instance();
               $this->CI->load->library('session');
               $this->CI->load->model('Administrator_Model');
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


        public function getOTPStatus(){
            return $this->CI->base_library_model->getOTPStatus($this->user_id);
        }
}