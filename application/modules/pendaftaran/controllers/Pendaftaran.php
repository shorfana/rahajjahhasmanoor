<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran extends MY_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model(array('Pendaftaran_model'));
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $data['name']='Kostlab';
    $this->load->view('from_registration',$data);
    $this->load->view('footer',$data);
  }


  function create_act(){
    $pass="QWERTYUIOPLKJHGFDSAZXCVBNM1234567890qwertyuioplkjhgfdsazxcvbnm";
 		$panjang='5';
 		$len=strlen($pass);
 		$start=$len-$panjang;
 		$xx=rand('0',$start);
 		$yy=str_shuffle($pass);
 		$randomString=substr($yy, $xx, $panjang);
    $id_orangtua = "RAHHMN $randomString" ;
    // var_dump($id_orangtua); die;
    $data_ortu = array(
      'id_ortu' => $id_orangtua,
      'nik_ayah' => $this->input->post('nik_ayah',TRUE),
      'nama_ayah' => $this->input->post('nama_ayah',TRUE),
      'nik_ibu' => $this->input->post('nik_ibu',TRUE),
      'nama_ibu' => $this->input->post('nama_ibu',TRUE),
      'jmlh_penghasilan_ayah' => $this->input->post('jmlh_penghasilan_ayah',TRUE),
      'jmlh_penghasilan_ibu' => $this->input->post('jmlh_penghasilan_ibu',TRUE),
      'pekerjaan_ayah' => $this->input->post('pekerjaan_ayah',TRUE),
      'pekerjaan_ibu' => $this->input->post('pekerjaan_ibu',TRUE),
      'agama_ayah' => $this->input->post('agama_ayah',TRUE),
      'agama_ibu' => $this->input->post('agama_ibu',TRUE),
      'tanggal_lahir_ayah' => $this->input->post('tanggal_lahir_ayah',TRUE),
      'tanggal_lahir_ibu' => $this->input->post('tanggal_lahir_ibu',TRUE),
      'pendidikan_terakhir_ayah' => $this->input->post('pendidikan_terakhir_ayah',TRUE),
      'pendidikan_terakhir_ibu' => $this->input->post('pendidikan_terakhir_ibu',TRUE),
      'tempat_lahir_ayah' => $this->input->post('tempat_lahir_ayah',TRUE),
      'tempat_lahir_ibu' => $this->input->post('tempat_lahir_ibu',TRUE),
      'alamat_ayah' => $this->input->post('alamat_ayah',TRUE),
      'alamat_ibu' => $this->input->post('alamat_ibu',TRUE),
    );
    $insert_data_ortu = $this->Pendaftaran_model->insert($data_ortu,'orangtua');

    if ($insert_data_ortu) {
        $data_siswa = array(
          'nik_siswa' => $this->input->post('no_induk');
          'id_ortu' => $id_orangtua,
          'no_induk' => $this->input->post('no_induk',TRUE),
          'nama_siswa' => $this->input->post('nama_siswa',TRUE),
          'jenis_kelamin' => $this->input->post('jenis_kelamin',TRUE),
          'tempat_lahir' => $this->input->post('tempat_lahir',TRUE),
          'tanggal_lahir' => $this->input->post('tanggal_lahir',TRUE),
          'alamat' => $this->input->post('alamat',TRUE),
          'tahun_masuk' => date("Y"),
          'tingkat' => $this->input->post('tingkat',TRUE),
          'status_tempat_tinggal' => $this->input->post('status_tempat_tinggal',TRUE),
          'warga_negara' => $this->input->post('warga_negara',TRUE),
          'agama' => $this->input->post('agama',TRUE),
          'no_kk' => $this->input->post('no_kk',TRUE),
          'no_telp' => $this->input->post('no_telp',TRUE),
          'foto_siswa' => $this->input->post('foto_siswa',TRUE),
          'umur' => $this->input->post('umur_siswa',TRUE),
					'tinggi_badan' => $this->input->post('tinggi_badan',TRUE),
					'berat_badan' => $this->input->post('berat_badan',TRUE),
					'jarak_sekolah' => $this->input->post('jarak_sekolah',TRUE),
					'anak_ke' => $this->input->post('anak_ke',TRUE),
					'jumlah_saudara' => $this->input->post('jumlah_saudara',TRUE),
					'ukuran_seragam' => $this->input->post('ukuran_seragam',TRUE),
					'riwayat_penyakit' => $this->input->post('riwayat_penyakit',TRUE),
        );
      $insert_data_siswa = $this->Pendaftaran_model->insert($data_siswa,'siswa');
      if ($insert_data_siswa) {
        $this->session->set_flashdata('message', 'Pendaftaran Berhasil');
        redirect(base_url());
      }else{
        $this->session->set_flashdata('message', 'Pendaftaran Gagal');
        redirect(base_url()."pendaftaran");
      }
    }else{
      $this->session->set_flashdata('message', 'Pendaftaran Gagal');
      redirect(base_url()."pendaftaran");
    }
  }

}
