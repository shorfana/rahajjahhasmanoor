<?php
/**
 *
 */
class Dbs extends CI_Model
{
	//fungsi untuk mengecek apakah didalam tabel ada data atau tidak
	function cek_login($table,$where){
		return $this->db->get_where($table,$where);
	}

	function getUserId($username){
		$dml = "SELECT id_guru FROM guru where username = '$username'";
		$query = $this->db->query($dml)->row();
		return $query;
	}

}
 ?>
