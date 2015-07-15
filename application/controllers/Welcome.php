<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	//public function index()
	//{
	/*	public function index ( $page = 'home')
	{
		if(!file_exists('application/views/pages/'.$page.'php')){
			show_404();
		}
		$this->load->view('pages/'.$page.'php');
	}*/
		//$this->load->view('pages/home.php');
//	}
		

	function __construct(){
			parent::__construct();
			$this->load->helper('url');
			$this->load->model('press_model');

		}

		public function index ()
	{
	//	if(!file_exists('application/views/pages/'.$page.'php')){
	//		show_404();
	//	}
		
		$data['title'] = "Mash Project";
		$data['size'] = 6;
		$this->load->helper('url');
		$data['results'] = $this->press_model->get_press(2);

		$this->load->view('templates/header.php',$data);
		$this->load->view('templates/nav.php',$data);
		$this->load->view('pages/home.php',$data);
		$this->load->view('templates/press.php',$data ,$size);
		$this->load->view('templates/footer.php',$data);
		//$this->load->view('pages/Contributors.php');
	}
}
