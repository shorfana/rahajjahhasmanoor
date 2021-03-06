<?php

    if (!defined('BASEPATH'))
        exit('No direct script access allowed');

    class Pembagian_kelas_model extends CI_Model
    {
        public $table = 'siswa';
        public $id = 'nik_siswa';
        public $order = array('nik_siswa' => 'asc');
        public $select='*';

        function __construct()
        {
            parent::__construct();
            $this->column_order=[];
            $this->column_search=[];
            $this->column_order[]=null;
							$this->column_order[]='id_ortu';
							$this->column_order[]='no_induk';
							$this->column_order[]='nama_siswa';
							$this->column_order[]='jenis_kelamin';
							$this->column_order[]='tempat_lahir';
							$this->column_order[]='tanggal_lahir';
							$this->column_order[]='alamat';
							$this->column_order[]='tahun_masuk';
							$this->column_order[]='tingkat';
							$this->column_order[]='status_tempat_tinggal';
							$this->column_order[]='warga_negara';
							$this->column_order[]='agama';
							$this->column_order[]='no_kk';
							$this->column_order[]='no_telp';
							$this->column_order[]='foto_siswa';
							$this->column_order[]='umur';
							$this->column_order[]='tinggi_badan';
							$this->column_order[]='berat_badan';
							$this->column_order[]='jarak_sekolah';
							$this->column_order[]='anak_ke';
							$this->column_order[]='jumlah_saudara';
							$this->column_order[]='ukuran_seragam';
							$this->column_order[]='riwayat_penyakit';
							$this->column_search[]='id_ortu';
							$this->column_search[]='no_induk';
							$this->column_search[]='nama_siswa';
							$this->column_search[]='jenis_kelamin';
							$this->column_search[]='tempat_lahir';
							$this->column_search[]='tanggal_lahir';
							$this->column_search[]='alamat';
							$this->column_search[]='tahun_masuk';
							$this->column_search[]='tingkat';
							$this->column_search[]='status_tempat_tinggal';
							$this->column_search[]='warga_negara';
							$this->column_search[]='agama';
							$this->column_search[]='no_kk';
							$this->column_search[]='no_telp';
							$this->column_search[]='foto_siswa';
							$this->column_search[]='umur';
							$this->column_search[]='tinggi_badan';
							$this->column_search[]='berat_badan';
							$this->column_search[]='jarak_sekolah';
							$this->column_search[]='anak_ke';
							$this->column_search[]='jumlah_saudara';
							$this->column_search[]='ukuran_seragam';
							$this->column_search[]='riwayat_penyakit';

        }

        function get_siswa(){
          $query =  $this->db->get('siswa');
          return $query->result();
        }

        function getSiswaPembagian(){
          $dml = "SELECT * FROM siswa";
          $query = $this->db->query($dml);
          return $query->result();
        }

        function update_kelas($data,$table,$where,$value){
           $this->db->where($where,$value);
           $this->db->update($table,$data);
           if($this->db->affected_rows()>0){
             return true;
           }else{
             return false;
           }
          }

          function countid_kelas_1(){
            $dml = "SELECT COUNT(id_kelas) as total from siswa where id_kelas = '1'";
            $query = $this->db->query($dml);
            return $query->result();
          }

          function countid_kelas_2(){
            $dml = "SELECT COUNT(id_kelas) as total from siswa where id_kelas = '2'";
            $query = $this->db->query($dml);
            return $query->result();
          }

          function countid_kelas_3(){
            $dml = "SELECT COUNT(id_kelas) as total from siswa where id_kelas = '3'";
            $query = $this->db->query($dml);
            return $query->result();
          }

          function countid_kelas_4(){
            $dml = "SELECT COUNT(id_kelas) as total from siswa where id_kelas = '4'";
            $query = $this->db->query($dml);
            return $query->result();
          }

          function countid_kelas_5(){
            $dml = "SELECT COUNT(id_kelas) as total from siswa where id_kelas = '5'";
            $query = $this->db->query($dml);
            return $query->result();
          }

        // get all
        function get_all()
        {
            $this->db->order_by($this->id, 'DESC');
            return $this->db->get($this->table)->result();
        }

        function getDataTable(){
          $dml = "SELECT * FROM siswa WHERE status_siswa = 'belum aktif'";
          $query = $this->db->query($dml);
          return $query->result();
            // $this->db->select($this->select);
            // $this->db->order_by($this->id, 'DESC');
            // $this->db->where('status_siswa','belum aktif');
            // return $this->db->get($this->table)->result();
        }

        //get field

        function get_field(){
          $table=$this->table;
          $this->db->select($this->select); //ganti * untuk custom field yang ditampilkan pada table
          $sql=$this->db->get($this->table); //ganti * untuk custom field yang ditampilkan pada table
          return $sql->list_fields();
        }

        // get data by id
        function get_by_id($id)
        {
            $this->db->where($this->id, $id);
            return $this->db->get($this->table)->row();
        }

        // insert data
        function insert($data)
        {
            $this->db->insert($this->table, $data);
        }

        // update data
        function update($id, $data)
        {
            $this->db->where($this->id, $id);
            $this->db->update($this->table, $data);
        }

        // delete data
        function delete($id)
        {
            $this->db->where($this->id, $id);
            $this->db->delete($this->table);
        }

        //Datatable
        private function _get_datatables_query()
          {
              $this->db->select($this->select);
              $this->db->from($this->table);

              $i = 0;

              foreach ($this->column_search as $item) // loop column
              {
                  if($_POST['search']['value']) // if datatable send POST for search
                  {

                      if($i===0) // first loop
                      {
                          $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                          $this->db->like($item, $_POST['search']['value']);
                      }
                      else
                      {
                          $this->db->or_like($item, $_POST['search']['value']);
                      }

                      if(count($this->column_search) - 1 == $i) //last loop
                          $this->db->group_end(); //close bracket
                  }
                  $i++;
              }

              if(isset($_POST['order'])) // here order processing
              {
                  $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
              }
              else if(isset($this->order))
              {
                  $order = $this->order;
                  $this->db->order_by(key($order), $order[key($order)]);
              }
          }
        function get_datatables()
        {
            $this->_get_datatables_query();
            if($_POST['length'] != -1)
            $this->db->limit($_POST['length'], $_POST['start']);
            $query = $this->db->get();
            return $query->result();
        }

        function count_filtered()
        {
            $this->_get_datatables_query();
            $query = $this->db->get();
            return $query->num_rows();
        }

        public function count_all()
        {
            $this->db->from($this->table);
            return $this->db->count_all_results();
        }

    }

    /* Crudlab by Kostlab */
    /* Please DO NOT modify this information : */
    /* Learn and Earn */
