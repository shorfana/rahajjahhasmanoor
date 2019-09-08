<?php

    if (!defined('BASEPATH'))
        exit('No direct script access allowed');

    class Ortu extends MY_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->model('Ortu_model');
            $this->load->library('form_validation');
	    $method=$this->router->fetch_method();
      if(!$this->session->userdata("username")){
            redirect('login');
          }
        }

        public function index()
        {$dataortu=$this->Ortu_model->getDataTable();//panggil ke modell
          $datafield=$this->Ortu_model->get_field();//panggil ke modell

           $data = array(
             'content'=>'admin/ortu/orangtua_list',
             'sidebar'=>'admin/sidebar',
             'css'=>'admin/ortu/css',
             'js'=>'admin/ortu/js',
             'dataortu'=>$dataortu,
             'datafield'=>$datafield,
             'module'=>'admin',
             'titlePage'=>'ortu',
             'controller'=>'ortu'
            );
          $this->template->load($data);
        }

        //DataTable
        public function ajax_list()
      {
          $list = $this->Ortu_model->get_datatables();
          $data = array();
          $no = $_POST['start'];
          foreach ($list as $Ortu_model) {
              $no++;
              $row = array();
              $row[] = $no;
							$row[] = $Ortu_model->nik_ayah;
							$row[] = $Ortu_model->nama_ayah;
							$row[] = $Ortu_model->nik_ibu;
							$row[] = $Ortu_model->nama_ibu;
							$row[] = $Ortu_model->jmlh_penghasilan_ayah;
							$row[] = $Ortu_model->jmlh_penghasilan_ibu;
							$row[] = $Ortu_model->pekerjaan_ayah;
							$row[] = $Ortu_model->pekerjaan_ibu;
							$row[] = $Ortu_model->agama_ayah;
							$row[] = $Ortu_model->agama_ibu;
							$row[] = $Ortu_model->ttl_ayah;
							$row[] = $Ortu_model->ttl_ibu;
							$row[] = $Ortu_model->pendidikan_terakhir_ayah;
							$row[] = $Ortu_model->pendidikan_terakhir_ibu;

              $row[] ="
              <a href='ortu/edit/$Ortu_model->id_ortu'><i class='m-1 feather icon-edit-2'></i></a>
              <a class='modalDelete' data-toggle='modal' data-target='#responsive-modal' value='$Ortu_model->id_ortu' href='#'><i class='feather icon-trash'></i></a>";
              $data[] = $row;
          }

          $output = array(
                          "draw" => $_POST['draw'],
                          "recordsTotal" => $this->Ortu_model->count_all(),
                          "recordsFiltered" => $this->Ortu_model->count_filtered(),
                          "data" => $data,
                  );
          //output to json format
          echo json_encode($output);
      }


        public function create(){
           $data = array(
             'content'=>'admin/ortu/orangtua_create',
             'sidebar'=>'admin/sidebar',
             'action'=>'admin/ortu/create_action',
             'module'=>'admin',
             'titlePage'=>'ortu',
             'controller'=>'ortu'
            );
          $this->template->load($data);
        }

        public function edit($id_ortu){
          $dataedit=$this->Ortu_model->get_by_id($id_ortu);
           $data = array(
             'content'=>'admin/ortu/orangtua_edit',
             'sidebar'=>'admin/sidebar',
             'action'=>'admin/ortu/update_action',
             'dataedit'=>$dataedit,
             'module'=>'admin',
             'titlePage'=>'ortu',
             'controller'=>'ortu'
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
					'ttl_ayah' => $this->input->post('ttl_ayah',TRUE),
					'ttl_ibu' => $this->input->post('ttl_ibu',TRUE),
					'pendidikan_terakhir_ayah' => $this->input->post('pendidikan_terakhir_ayah',TRUE),
					'pendidikan_terakhir_ibu' => $this->input->post('pendidikan_terakhir_ibu',TRUE),

);

            $this->Ortu_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('admin/ortu'));
        }
    }




    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->edit($this->input->post('id', TRUE));
        } else {
            $data = array(
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
					'ttl_ayah' => $this->input->post('ttl_ayah',TRUE),
					'ttl_ibu' => $this->input->post('ttl_ibu',TRUE),
					'pendidikan_terakhir_ayah' => $this->input->post('pendidikan_terakhir_ayah',TRUE),
					'pendidikan_terakhir_ibu' => $this->input->post('pendidikan_terakhir_ibu',TRUE),

);

            $this->Ortu_model->update($this->input->post('id_ortu', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('admin/ortu'));
        }
    }

    public function delete($id_ortu)
    {
        $row = $this->Ortu_model->get_by_id($id_ortu);

        if ($row) {
            $this->Ortu_model->delete($id_ortu);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('admin/ortu'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admin/ortu'));
        }
    }

    public function _rules()
    {
$this->form_validation->set_rules('nik_ayah', 'nik_ayah', 'trim|required');
$this->form_validation->set_rules('nama_ayah', 'nama_ayah', 'trim|required');
$this->form_validation->set_rules('nik_ibu', 'nik_ibu', 'trim|required');
$this->form_validation->set_rules('nama_ibu', 'nama_ibu', 'trim|required');
$this->form_validation->set_rules('jmlh_penghasilan_ayah', 'jmlh_penghasilan_ayah', 'trim|required');
$this->form_validation->set_rules('jmlh_penghasilan_ibu', 'jmlh_penghasilan_ibu', 'trim|required');
$this->form_validation->set_rules('pekerjaan_ayah', 'pekerjaan_ayah', 'trim|required');
$this->form_validation->set_rules('pekerjaan_ibu', 'pekerjaan_ibu', 'trim|required');
$this->form_validation->set_rules('agama_ayah', 'agama_ayah', 'trim|required');
$this->form_validation->set_rules('agama_ibu', 'agama_ibu', 'trim|required');
$this->form_validation->set_rules('ttl_ayah', 'ttl_ayah', 'trim|required');
$this->form_validation->set_rules('ttl_ibu', 'ttl_ibu', 'trim|required');
$this->form_validation->set_rules('pendidikan_terakhir_ayah', 'pendidikan_terakhir_ayah', 'trim|required');
$this->form_validation->set_rules('pendidikan_terakhir_ibu', 'pendidikan_terakhir_ibu', 'trim|required');


	$this->form_validation->set_rules('id_ortu', 'id_ortu', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

    }

}
