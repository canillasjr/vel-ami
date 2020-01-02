<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Includes
{
	public function __construct()
	{
		$this->CI =& get_instance();
	}
	public function header($data)
	{
		return $this->CI->load->view('includes/frontend/header',$data);
	}

	public function footer()
	{
		return $this->CI->load->view('includes/frontend/footer');
	}

	
}