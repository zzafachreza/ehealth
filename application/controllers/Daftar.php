<?php

class daftar extends CI_Controller{

	function __construct(){

		parent::__construct();
		$this->load->model('Daftar_model');
		$this->load->model('Pasien_model');
	}

	function index(){

		$data['title']='FM | daftar';
		$data['daftar'] = $this->Daftar_model->getData();
		$this->load->view('header',$data);
		$this->load->view('daftar_view');
		$this->load->view('footer');
	}

	function add(){
		$data['title']='FM | daftar - Add';
		$data['daftar'] = $this->Pasien_model->getData();
		$this->load->view('header',$data);
		$this->load->view('daftar_view_add');
		$this->load->view('footer');
	}

	function insert(){
		$poli = $this->input->post('poli');
		$rekam_medis = $this->input->post('rekam_medis');
		$this->Daftar_model->insert($poli,$rekam_medis);
		redirect('daftar');
	}

	function delete(){
		$id = $this->uri->segment(3);
		$this->Daftar_model->delete($id);
		redirect('daftar');
	}

	function edit(){
		$id	= $this->uri->segment(3);
		$data['title']='FM | daftar - Edit';
		$hasil = $this->Daftar_model->getId($id);

		$data['daftar'] = $hasil->row_array();

		$this->load->view('header',$data);
		$this->load->view('daftar_view_edit',$data);
		$this->load->view('footer');
	}

	function detail(){
		$id	= $this->uri->segment(3);
		$data['title']='FM | Product - Detail';
		$hasil = $this->Daftar_model->getId($id);

		$data['daftar'] = $hasil->row_array();

		$this->load->view('header',$data);
		$this->load->view('daftar_view_detail',$data);
		$this->load->view('footer');
	}



	function update(){
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$ktp = $this->input->post('ktp');
		$rekam_medis = $this->input->post('rekam_medis');
		$this->Daftar_model->update($id,$nama,$ktp,$rekam_medis);
		redirect('daftar');
	}
}