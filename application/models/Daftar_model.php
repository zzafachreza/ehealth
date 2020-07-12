<?php

class daftar_model extends CI_Model{

	function getData(){

		$sql = "SELECT * FROM daftar_v";
		$data = $this->db->query($sql);
		return $data;

	}

	function insert($poli,$rekam_medis){
		$sql="INSERT INTO daftar(tgl,rekam_medis,poli) VALUES(NOW(),'$rekam_medis','$poli')";
		$this->db->query($sql);
	}

	function delete($id){
		$sql="DELETE FROM daftar WHERE id='$id'";
		$this->db->query($sql);	
	}



}