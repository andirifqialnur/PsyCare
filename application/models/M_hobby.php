<?php
class M_hobby extends CI_Model{
	
	function selectHobby(){
		$sql = "select * from tb_hobby";
		$data = $this->db->query($sql)->result();
		return $data;
	}
	
	function selectAdmin(){
		$sql = "select * from tb_admin";
		$data = $this->db->query($sql)->result();
		return $data;
	}
	
}