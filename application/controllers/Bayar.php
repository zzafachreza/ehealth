<?php

class Bayar extends CI_Controller{

	function __construct(){

		parent::__construct();
		$this->load->model('Bayar_model');
	}

	function index(){

		$data['title']='FM | bayar';
		$data['bayar'] = $this->Bayar_model->getData();
		$this->load->view('header',$data);
		$this->load->view('bayar_view');
		$this->load->view('footer');
	}

	function excel(){

		$data['title']='FM | bayar';
		$data['bayar'] = $this->Bayar_model->getData();
		$this->load->view('bayar_view_excel',$data);
	}


	function add(){


		$data['title']='FM | bayar - Add';
		$data['bayar'] = $this->Bayar_model->getDataDaftar();
		$this->load->view('header',$data);
		$this->load->view('bayar_view_add');
		$this->load->view('footer');
	}

	function insert(){
		$id_daftar = $this->input->post('id_daftar');
		$pembayaran = $this->input->post('pembayaran');
		$total = $this->input->post('total');
		$this->Bayar_model->insert($id_daftar,$pembayaran,$total);
		redirect('bayar');
	}

	function delete(){
		$id = $this->uri->segment(3);
		$this->Bayar_model->delete($id);
		redirect('bayar');
	}

	function edit(){
		$id	= $this->uri->segment(3);
		$data['title']='FM | bayar - Edit';
		$hasil = $this->Bayar_model->getId($id);

		$data['bayar'] = $hasil->row_array();

		$this->load->view('header',$data);
		$this->load->view('bayar_view_edit',$data);
		$this->load->view('footer');
	}

	function detail(){
		$id	= $this->uri->segment(3);
		$data['title']='FM | Pembayaran';
		$hasil = $this->Bayar_model->getId($id);

		$data['bayar'] = $hasil->row_array();

		$this->load->view('header',$data);
		$this->load->view('footer');
		$this->load->view('bayar_view_detail',$data);
		
	}



	function update(){
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$ktp = $this->input->post('ktp');
		$rekam_medis = $this->input->post('rekam_medis');
		$this->Bayar_model->update($id,$nama,$ktp,$rekam_medis);
		redirect('bayar');
	}
}