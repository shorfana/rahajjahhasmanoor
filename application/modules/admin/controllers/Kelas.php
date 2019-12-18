<?php

    if (!defined('BASEPATH'))
        exit('No direct script access allowed');

    class Kelas extends MY_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->model('Kelas_model');
            $this->load->library('form_validation');
	    $method=$this->router->fetch_method();
            // if($method != 'ajax_list'){
            //   if($this->session->userdata('status')!='login'){
            //     redirect(base_url('login'));
            //   }
            // }
        }

        public function index()
        {$datakelas=$this->Kelas_model->getDataTable();//panggil ke modell
          $datafield=$this->Kelas_model->get_field();//panggil ke modell

           $data = array(
             'content'=>'admin/kelas/kelas_list',
             'sidebar'=>'admin/sidebar',
             'css'=>'admin/kelas/css',
             'js'=>'admin/kelas/js',
             'datakelas'=>$datakelas,
             'datafield'=>$datafield,
             'module'=>'admin',
             'titlePage'=>'kelas',
             'controller'=>'kelas'
            );
          $this->template->load($data);
        }

        //DataTable
        public function ajax_list()
      {
          $list = $this->Kelas_model->get_datatables();
          $data = array();
          $no = $_POST['start'];
          foreach ($list as $Kelas_model) {
              $no++;
              $row = array();
              $row[] = $no;
							$row[] = $Kelas_model->tingkat_kelas;
							$row[] = $Kelas_model->nama_kelas;
							
              $row[] ="
              <a href='kelas/edit/$Kelas_model->id_kelas'><i class='m-1 feather icon-edit-2'></i></a>
              <a class='modalDelete' data-toggle='modal' data-target='#responsive-modal' value='$Kelas_model->id_kelas' href='#'><i class='feather icon-trash'></i></a>";
              $data[] = $row;
          }

          $output = array(
                          "draw" => $_POST['draw'],
                          "recordsTotal" => $this->Kelas_model->count_all(),
                          "recordsFiltered" => $this->Kelas_model->count_filtered(),
                          "data" => $data,
                  );
          //output to json format
          echo json_encode($output);
      }


        public function create(){
           $data = array(
             'content'=>'admin/kelas/kelas_create',
             'sidebar'=>'admin/sidebar',
             'action'=>'admin/kelas/create_action',
             'module'=>'admin',
             'titlePage'=>'kelas',
             'controller'=>'kelas'
            );
          $this->template->load($data);
        }

        public function edit($id_kelas){
          $dataedit=$this->Kelas_model->get_by_id($id_kelas);
           $data = array(
             'content'=>'admin/kelas/kelas_edit',
             'sidebar'=>'admin/sidebar',
             'action'=>'admin/kelas/update_action',
             'dataedit'=>$dataedit,
             'module'=>'admin',
             'titlePage'=>'kelas',
             'controller'=>'kelas'
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
					'tingkat_kelas' => $this->input->post('tingkat_kelas',TRUE),
					'nama_kelas' => $this->input->post('nama_kelas',TRUE),
					
);

            $this->Kelas_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('admin/kelas'));
        }
    }




    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->edit($this->input->post('id', TRUE));
        } else {
            $data = array(
					'tingkat_kelas' => $this->input->post('tingkat_kelas',TRUE),
					'nama_kelas' => $this->input->post('nama_kelas',TRUE),
					
);

            $this->Kelas_model->update($this->input->post('id_kelas', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('admin/kelas'));
        }
    }

    public function delete($id_kelas)
    {
        $row = $this->Kelas_model->get_by_id($id_kelas);

        if ($row) {
            $this->Kelas_model->delete($id_kelas);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('admin/kelas'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admin/kelas'));
        }
    }

    public function _rules()
    {
$this->form_validation->set_rules('tingkat_kelas', 'tingkat_kelas', 'trim|required');
$this->form_validation->set_rules('nama_kelas', 'nama_kelas', 'trim|required');


	$this->form_validation->set_rules('id_kelas', 'id_kelas', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

    }

}