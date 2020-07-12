<?php

class Home extends CI_Controller{

	function __construct(){
		parent::__construct();
	}

	function index(){

		if (!isset($_SESSION['username'])) {
			redirect('login');
		}else{
			$data['title']='Fachreza Maulana | Home';
			$this->load->view('header',$data);
			$this->load->view('home_view');
			$this->load->view('footer');
		}
	}
}