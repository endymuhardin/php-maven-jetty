<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends CI_Controller {

	public function index()
	{
		$this->load->view("config/product/list.php");
	}
	
	public function all(){
		
	}
}

/* End of file halo.php */
/* Location: ./application/controllers/halo.php */