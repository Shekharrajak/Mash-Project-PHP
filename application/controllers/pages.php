<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function view ( $page= 'home')
	{
		if(!file_exists('application/views/pages/'.$page.'.php')){
			show_404();
		}
		$this->load->view('pages/'.$page.'.php');
	}

	/*public function index()
	{
		$this->load->view('welcome_message');
	}*/
}
?>

