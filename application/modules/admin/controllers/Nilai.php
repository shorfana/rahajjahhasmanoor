<?php

    if (!defined('BASEPATH'))
        exit('No direct script access allowed');

    class Nilai extends MY_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->model('Nilai_model');
            $this->load->library('form_validation');
	    $method=$this->router->fetch_method();
            // if($method != 'ajax_list'){
            //   if($this->session->userdata('status')!='login'){
            //     redirect(base_url('login'));
            //   }
            // }
        }

        public function index()
        {$datanilai=$this->Nilai_model->getDataTable();//panggil ke modell
          $datafield=$this->Nilai_model->get_field();//panggil ke modell

           $data = array(
             'content'=>'admin/nilai/nilai_list',
             'sidebar'=>'admin/sidebar',
             'css'=>'admin/nilai/css',
             'js'=>'admin/nilai/js',
             'datanilai'=>$datanilai,
             'datafield'=>$datafield,
             'module'=>'admin',
             'titlePage'=>'nilai',
             'controller'=>'nilai'
            );
          $this->template->load($data);
        }

        //DataTable
        public function ajax_list()
      {
          $list = $this->Nilai_model->get_datatables();
          $data = array();
          $no = $_POST['start'];
          foreach ($list as $Nilai_model) {
              $no++;
              $row = array();
              $row[] = $no;
							$row[] = $Nilai_model->id_siswa;
							$row[] = $Nilai_model->fisik_motorik;
							$row[] = $Nilai_model->nilai_agama_moral;
							$row[] = $Nilai_model->kognitif;
							$row[] = $Nilai_model->bahasa;
							$row[] = $Nilai_model->pend_agama_islam;
							$row[] = $Nilai_model->seni;
							$row[] = $Nilai_model->semester;
							
              $row[] ="
              <a href='nilai/edit/$Nilai_model->id_nilai'><i class='m-1 feather icon-edit-2'></i></a>
              <a class='modalDelete' data-toggle='modal' data-target='#responsive-modal' value='$Nilai_model->id_nilai' href='#'><i class='feather icon-trash'></i></a>";
              $data[] = $row;
          }

          $output = array(
                          "draw" => $_POST['draw'],
                          "recordsTotal" => $this->Nilai_model->count_all(),
                          "recordsFiltered" => $this->Nilai_model->count_filtered(),
                          "data" => $data,
                  );
          //output to json format
          echo json_encode($output);
      }


        public function create(){
           $data = array(
             'content'=>'admin/nilai/nilai_create',
             'sidebar'=>'admin/sidebar',
             'action'=>'admin/nilai/create_action',
             'module'=>'admin',
             'titlePage'=>'nilai',
             'controller'=>'nilai'
            );
          $this->template->load($data);
        }

        public function edit($id_nilai){
          $dataedit=$this->Nilai_model->get_by_id($id_nilai);
           $data = array(
             'content'=>'admin/nilai/nilai_edit',
             'sidebar'=>'admin/sidebar',
             'action'=>'admin/nilai/update_action',
             'dataedit'=>$dataedit,
             'module'=>'admin',
             'titlePage'=>'nilai',
             'controller'=>'nilai'
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
					'id_siswa' => $this->input->post('id_siswa',TRUE),
					'fisik_motorik' => $this->input->post('fisik_motorik',TRUE),
					'nilai_agama_moral' => $this->input->post('nilai_agama_moral',TRUE),
					'kognitif' => $this->input->post('kognitif',TRUE),
					'bahasa' => $this->input->post('bahasa',TRUE),
					'pend_agama_islam' => $this->input->post('pend_agama_islam',TRUE),
					'seni' => $this->input->post('seni',TRUE),
					'semester' => $this->input->post('semester',TRUE),
					
);

            $this->Nilai_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('admin/nilai'));
        }
    }




    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->edit($this->input->post('id', TRUE));
        } else {
            $data = array(
					'id_siswa' => $this->input->post('id_siswa',TRUE),
					'fisik_motorik' => $this->input->post('fisik_motorik',TRUE),
					'nilai_agama_moral' => $this->input->post('nilai_agama_moral',TRUE),
					'kognitif' => $this->input->post('kognitif',TRUE),
					'bahasa' => $this->input->post('bahasa',TRUE),
					'pend_agama_islam' => $this->input->post('pend_agama_islam',TRUE),
					'seni' => $this->input->post('seni',TRUE),
					'semester' => $this->input->post('semester',TRUE),
					
);

            $this->Nilai_model->update($this->input->post('id_nilai', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('admin/nilai'));
        }
    }

    public function delete($id_nilai)
    {
        $row = $this->Nilai_model->get_by_id($id_nilai);

        if ($row) {
            $this->Nilai_model->delete($id_nilai);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('admin/nilai'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admin/nilai'));
        }
    }

    public function _rules()
    {
$this->form_validation->set_rules('id_siswa', 'id_siswa', 'trim|required');
$this->form_validation->set_rules('fisik_motorik', 'fisik_motorik', 'trim|required');
$this->form_validation->set_rules('nilai_agama_moral', 'nilai_agama_moral', 'trim|required');
$this->form_validation->set_rules('kognitif', 'kognitif', 'trim|required');
$this->form_validation->set_rules('bahasa', 'bahasa', 'trim|required');
$this->form_validation->set_rules('pend_agama_islam', 'pend_agama_islam', 'trim|required');
$this->form_validation->set_rules('seni', 'seni', 'trim|required');
$this->form_validation->set_rules('semester', 'semester', 'trim|required');


	$this->form_validation->set_rules('id_nilai', 'id_nilai', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

    }

}