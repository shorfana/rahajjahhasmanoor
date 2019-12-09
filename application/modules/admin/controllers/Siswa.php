<?php

    if (!defined('BASEPATH'))
        exit('No direct script access allowed');

    class Siswa extends MY_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->model('Siswa_model');
            $this->load->library('form_validation');
	    $method=$this->router->fetch_method();
            // if($method != 'ajax_list'){
            //   if($this->session->userdata('status')!='login'){
            //     redirect(base_url('login'));
            //   }
            // }
            if($this->session->userdata('status')=='login'){
              redirect(base_url('admin'));
            }
        }

        public function index()
        {$datasiswa=$this->Siswa_model->getDataTable();//panggil ke modell
          $datafield=$this->Siswa_model->get_field();//panggil ke modell

           $data = array(
             'content'=>'admin/siswa/siswa_list',
             'sidebar'=>'admin/sidebar',
             'css'=>'admin/siswa/css',
             'js'=>'admin/siswa/js',
             'datasiswa'=>$datasiswa,
             'datafield'=>$datafield,
             'module'=>'admin',
             'titlePage'=>'siswa',
             'controller'=>'siswa'
            );
          $this->template->load($data);
        }

        //DataTable
        public function ajax_list()
      {
          $list = $this->Siswa_model->get_datatables();
          $data = array();
          $no = $_POST['start'];
          foreach ($list as $Siswa_model) {
              $no++;
              $row = array();
              $row[] = $no;
							$row[] = $Siswa_model->id_ortu;
							$row[] = $Siswa_model->no_induk;
							$row[] = $Siswa_model->nama_siswa;
							$row[] = $Siswa_model->jenis_kelamin;
							$row[] = $Siswa_model->tempat_lahir;
							$row[] = $Siswa_model->tanggal_lahir;
							$row[] = $Siswa_model->alamat;
							$row[] = $Siswa_model->tahun_masuk;
							$row[] = $Siswa_model->tingkat;
							$row[] = $Siswa_model->status_tempat_tinggal;
							$row[] = $Siswa_model->warga_negara;
							$row[] = $Siswa_model->agama;
							$row[] = $Siswa_model->no_kk;
							$row[] = $Siswa_model->no_telp;
							$row[] = $Siswa_model->foto_siswa;
							$row[] = $Siswa_model->umur;
							$row[] = $Siswa_model->tinggi_badan;
							$row[] = $Siswa_model->berat_badan;
							$row[] = $Siswa_model->jarak_sekolah;
							$row[] = $Siswa_model->anak_ke;
							$row[] = $Siswa_model->jumlah_saudara;
							$row[] = $Siswa_model->ukuran_seragam;
							$row[] = $Siswa_model->riwayat_penyakit;

              $row[] ="
              <a href='siswa/edit/$Siswa_model->nik_siswa'><i class='m-1 feather icon-edit-2'></i></a>
              <a class='modalDelete' data-toggle='modal' data-target='#responsive-modal' value='$Siswa_model->nik_siswa' href='#'><i class='feather icon-trash'></i></a>";
              $data[] = $row;
          }

          $output = array(
                          "draw" => $_POST['draw'],
                          "recordsTotal" => $this->Siswa_model->count_all(),
                          "recordsFiltered" => $this->Siswa_model->count_filtered(),
                          "data" => $data,
                  );
          //output to json format
          echo json_encode($output);
      }


        public function create(){
           $data = array(
             'content'=>'admin/siswa/siswa_create',
             'sidebar'=>'admin/sidebar',
             'action'=>'admin/siswa/create_action',
             'module'=>'admin',
             'titlePage'=>'siswa',
             'controller'=>'siswa'
            );
          $this->template->load($data);
        }

        public function edit($nik_siswa){
          $dataedit=$this->Siswa_model->get_by_id($nik_siswa);
           $data = array(
             'content'=>'admin/siswa/siswa_edit',
             'sidebar'=>'admin/sidebar',
             'action'=>'admin/siswa/update_action',
             'dataedit'=>$dataedit,
             'module'=>'admin',
             'titlePage'=>'siswa',
             'controller'=>'siswa'
            );
          $this->template->load($data);
        }
public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
					'id_ortu' => $this->input->post('id_ortu',TRUE),
					'no_induk' => $this->input->post('no_induk',TRUE),
					'nama_siswa' => $this->input->post('nama_siswa',TRUE),
					'jenis_kelamin' => $this->input->post('jenis_kelamin',TRUE),
					'tempat_lahir' => $this->input->post('tempat_lahir',TRUE),
					'tanggal_lahir' => $this->input->post('tanggal_lahir',TRUE),
					'alamat' => $this->input->post('alamat',TRUE),
					'tahun_masuk' => $this->input->post('tahun_masuk',TRUE),
					'tingkat' => $this->input->post('tingkat',TRUE),
					'status_tempat_tinggal' => $this->input->post('status_tempat_tinggal',TRUE),
					'warga_negara' => $this->input->post('warga_negara',TRUE),
					'agama' => $this->input->post('agama',TRUE),
					'no_kk' => $this->input->post('no_kk',TRUE),
					'no_telp' => $this->input->post('no_telp',TRUE),
					'foto_siswa' => $this->input->post('foto_siswa',TRUE),
					'umur' => $this->input->post('umur',TRUE),
					'tinggi_badan' => $this->input->post('tinggi_badan',TRUE),
					'berat_badan' => $this->input->post('berat_badan',TRUE),
					'jarak_sekolah' => $this->input->post('jarak_sekolah',TRUE),
					'anak_ke' => $this->input->post('anak_ke',TRUE),
					'jumlah_saudara' => $this->input->post('jumlah_saudara',TRUE),
					'ukuran_seragam' => $this->input->post('ukuran_seragam',TRUE),
					'riwayat_penyakit' => $this->input->post('riwayat_penyakit',TRUE),

);

            $this->Siswa_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('admin/siswa'));
        }
    }




    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->edit($this->input->post('id', TRUE));
        } else {
            $data = array(
					'id_ortu' => $this->input->post('id_ortu',TRUE),
					'no_induk' => $this->input->post('no_induk',TRUE),
					'nama_siswa' => $this->input->post('nama_siswa',TRUE),
					'jenis_kelamin' => $this->input->post('jenis_kelamin',TRUE),
					'tempat_lahir' => $this->input->post('tempat_lahir',TRUE),
					'tanggal_lahir' => $this->input->post('tanggal_lahir',TRUE),
					'alamat' => $this->input->post('alamat',TRUE),
					'tahun_masuk' => $this->input->post('tahun_masuk',TRUE),
					'tingkat' => $this->input->post('tingkat',TRUE),
					'status_tempat_tinggal' => $this->input->post('status_tempat_tinggal',TRUE),
					'warga_negara' => $this->input->post('warga_negara',TRUE),
					'agama' => $this->input->post('agama',TRUE),
					'no_kk' => $this->input->post('no_kk',TRUE),
					'no_telp' => $this->input->post('no_telp',TRUE),
					'foto_siswa' => $this->input->post('foto_siswa',TRUE),
					'umur' => $this->input->post('umur',TRUE),
					'tinggi_badan' => $this->input->post('tinggi_badan',TRUE),
					'berat_badan' => $this->input->post('berat_badan',TRUE),
					'jarak_sekolah' => $this->input->post('jarak_sekolah',TRUE),
					'anak_ke' => $this->input->post('anak_ke',TRUE),
					'jumlah_saudara' => $this->input->post('jumlah_saudara',TRUE),
					'ukuran_seragam' => $this->input->post('ukuran_seragam',TRUE),
					'riwayat_penyakit' => $this->input->post('riwayat_penyakit',TRUE),

);

            $this->Siswa_model->update($this->input->post('nik_siswa', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('admin/siswa'));
        }
    }

    public function delete($nik_siswa)
    {
        $row = $this->Siswa_model->get_by_id($nik_siswa);

        if ($row) {
            $this->Siswa_model->delete($nik_siswa);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('admin/siswa'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admin/siswa'));
        }
    }

    public function _rules()
    {
$this->form_validation->set_rules('id_ortu', 'id_ortu', 'trim|required');
$this->form_validation->set_rules('no_induk', 'no_induk', 'trim|required');
$this->form_validation->set_rules('nama_siswa', 'nama_siswa', 'trim|required');
$this->form_validation->set_rules('jenis_kelamin', 'jenis_kelamin', 'trim|required');
$this->form_validation->set_rules('tempat_lahir', 'tempat_lahir', 'trim|required');
$this->form_validation->set_rules('tanggal_lahir', 'tanggal_lahir', 'trim|required');
$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
$this->form_validation->set_rules('tahun_masuk', 'tahun_masuk', 'trim|required');
$this->form_validation->set_rules('tingkat', 'tingkat', 'trim|required');
$this->form_validation->set_rules('status_tempat_tinggal', 'status_tempat_tinggal', 'trim|required');
$this->form_validation->set_rules('warga_negara', 'warga_negara', 'trim|required');
$this->form_validation->set_rules('agama', 'agama', 'trim|required');
$this->form_validation->set_rules('no_kk', 'no_kk', 'trim|required');
$this->form_validation->set_rules('no_telp', 'no_telp', 'trim|required');
$this->form_validation->set_rules('foto_siswa', 'foto_siswa', 'trim|required');
$this->form_validation->set_rules('umur', 'umur', 'trim|required');
$this->form_validation->set_rules('tinggi_badan', 'tinggi_badan', 'trim|required');
$this->form_validation->set_rules('berat_badan', 'berat_badan', 'trim|required');
$this->form_validation->set_rules('jarak_sekolah', 'jarak_sekolah', 'trim|required');
$this->form_validation->set_rules('anak_ke', 'anak_ke', 'trim|required');
$this->form_validation->set_rules('jumlah_saudara', 'jumlah_saudara', 'trim|required');
$this->form_validation->set_rules('ukuran_seragam', 'ukuran_seragam', 'trim|required');
$this->form_validation->set_rules('riwayat_penyakit', 'riwayat_penyakit', 'trim|required');


	$this->form_validation->set_rules('nik_siswa', 'nik_siswa', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

    }

}
