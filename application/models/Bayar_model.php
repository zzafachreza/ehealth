<?php

class Bayar_model extends CI_Model{

	function getData(){

		$sql = "SELECT * FROM bayar_v";
		$data = $this->db->query($sql);
		return $data;

	}

	function getDataDaftar(){

		$sql = "SELECT * FROM daftar_v";
		$data = $this->db->query($sql);
		return $data;

	}

	function insert($id_daftar,$pembayaran,$total){
		$sql="INSERT INTO bayar(id_daftar,pembayaran,total) VALUES('$id_daftar','$pembayaran','$total')";
		$this->db->query($sql);
	}

	function delete($id){
		$sql="DELETE FROM daftar WHERE id='$id'";
		$this->db->query($sql);	


	}

	function getId($id){
		$sql = "SELECT * FROM bayar_v WHERE  id='$id'";
		$data = $this->db->query($sql);
		return $data;
	}



}