<?php
/**
 *
 */
class Pendaftaran_model extends CI_Model
{
	//fungsi untuk mengecek apakah didalam tabel ada data atau tidak
	function cek_kode_ortu($randomString){
		$dml = "SELECT * FROM orangtua where id_ortu = '$randomString'";
    $query = $this->db->query($dml)->row();
    return $query;
	}

	function getUserId($username){
		$dml = "SELECT id_guru FROM guru where username = '$username'";
		$query = $this->db->query($dml)->row();
		return $query;
	}

	function insert($data,$table){
    $this->db->insert($table,$data);
    if ($this->db->affected_rows()>0) {
      return true;
    }else{
      return false;
    }
  }

}
 ?>
