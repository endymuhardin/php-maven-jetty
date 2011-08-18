<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Halo extends CI_Controller {

	public function index()
	{
		$this->load->view("halo_message");
	}
}

/* End of file halo.php */
/* Location: ./application/controllers/halo.php */