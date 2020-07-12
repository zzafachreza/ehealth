<?php

class Pasien extends CI_Controller{

	function __construct(){

		parent::__construct();
		$this->load->model('Pasien_model');
	}

	function index(){

		$data['title']='FM | Pasien';
		$data['pasien'] = $this->Pasien_model->getData();
		$this->load->view('header',$data);
		$this->load->view('pasien_view');
		$this->load->view('footer');
	}

	function excel(){

		$data['title']='FM | Pasien';
		$data['pasien'] = $this->Pasien_model->getData();
		$this->load->view('pasien_view_excel',$data);
	}

	function cekKTP(){

		$key = $this->input->post('key');
	
		$data = $this->Pasien_model->getDataKTP($key);
		$row = $data->row_array();
		if ($data->num_rows()>0) {
			# code...
			echo "Nomor KTP ".$row['ktp']." Sudah dimiliki ".$row['nama'];
		}else{

			echo 404;
		}
		
	}
	function cekRM(){

		$key = $this->input->post('key');

		$data = $this->Pasien_model->getDataRM($key);
		$row = $data->row_array();
			if ($data->num_rows()>0) {
			# code...
		echo "Nomor rekam Medis ".$row['rekam_medis']." Sudah dimiliki ".$row['nama'];
		}else{

			echo 404;
		}
		
	}

	function add(){
		$data['title']='FM | Pasien - Add';
		$this->load->view('header',$data);
		$this->load->view('pasien_view_add');
		$this->load->view('footer');
	}

	function insert(){
		$nama = $this->input->post('nama');
		$ktp = $this->input->post('ktp');
		$rekam_medis = $this->input->post('rekam_medis');
		$this->Pasien_model->insert($nama,$ktp,$rekam_medis);
		redirect('pasien');
	}

	function delete(){
		$id = $this->uri->segment(3);
		$this->Pasien_model->delete($id);
		redirect('pasien');
	}

	function edit(){
		$id	= $this->uri->segment(3);
		$data['title']='FM | pasien - Edit';
		$hasil = $this->Pasien_model->getId($id);

		$data['pasien'] = $hasil->row_array();

		$this->load->view('header',$data);
		$this->load->view('pasien_view_edit',$data);
		$this->load->view('footer');
	}

	function detail(){
		$id	= $this->uri->segment(3);
		$data['title']='FM | Product - Detail';
		$hasil = $this->Pasien_model->getId($id);

		$data['pasien'] = $hasil->row_array();

		$this->load->view('header',$data);
		$this->load->view('pasien_view_detail',$data);
		$this->load->view('footer');
	}



	function update(){
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$ktp = $this->input->post('ktp');
		$rekam_medis = $this->input->post('rekam_medis');
		$this->Pasien_model->update($id,$nama,$ktp,$rekam_medis);
		redirect('pasien');
	}
}