<?php

class pasien_model extends CI_Model{

	function getData(){

		$sql = "SELECT * FROM pasien";
		$data = $this->db->query($sql);
		return $data;

	}

	function getDataKTP($key){

		$sql = "SELECT * FROM pasien WHERE ktp = '$key'";
		$data = $this->db->query($sql);
		return $data;

	}
	function getDataRM($key){

		$sql = "SELECT * FROM pasien WHERE rekam_medis = '$key'";
		$data = $this->db->query($sql);
		return $data;

	}

	function insert($nama,$ktp,$rekam_medis){
		$sql="INSERT INTO pasien(nama,ktp,rekam_medis) VALUES('$nama','$ktp','$rekam_medis')";
		$this->db->query($sql);
	}

	function delete($id){
		$sql="DELETE FROM pasien WHERE id='$id'";
		$this->db->query($sql);	
	}

	function getId($id){
		$sql = "SELECT * FROM pasien WHERE  id='$id'";
		$data = $this->db->query($sql);
		return $data;
	}

	function update($id,$nama,$ktp,$rekam_medis){
		$sql="UPDATE pasien SET nama='$nama',ktp='$ktp',rekam_medis='$rekam_medis' WHERE id='$id'";
		$this->db->query($sql);	
	}

}