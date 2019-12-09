<?php

    if (!defined('BASEPATH'))
        exit('No direct script access allowed');

    class Guru extends MY_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->model('Guru_model');
            $this->load->library('form_validation');
	    $method=$this->router->fetch_method();
      // if(!$this->session->userdata("username")){
      //       redirect('login');
      //     }
        }

        public function index()
        {$dataguru=$this->Guru_model->getDataTable();//panggil ke modell
          $datafield=$this->Guru_model->get_field();//panggil ke modell

           $data = array(
             'content'=>'admin/guru/guru_list',
             'sidebar'=>'admin/sidebar',
             'css'=>'admin/guru/css',
             'js'=>'admin/guru/js',
             'dataguru'=>$dataguru,
             'datafield'=>$datafield,
             'module'=>'admin',
             'titlePage'=>'guru',
             'controller'=>'guru'
            );
          $this->template->load($data);
        }

        //DataTable
        public function ajax_list()
      {
          $list = $this->Guru_model->get_datatables();
          $data = array();
          $no = $_POST['start'];
          foreach ($list as $Guru_model) {
              $no++;
              $row = array();
              $row[] = $no;
							$row[] = $Guru_model->nama_guru;
							$row[] = $Guru_model->nik;
							$row[] = $Guru_model->nip;
							$row[] = $Guru_model->username;
							$row[] = $Guru_model->password;

              $row[] ="
              <a href='guru/edit/$Guru_model->id_guru'><i class='m-1 feather icon-edit-2'></i></a>
              <a class='modalDelete' data-toggle='modal' data-target='#responsive-modal' value='$Guru_model->id_guru' href='#'><i class='feather icon-trash'></i></a>";
              $data[] = $row;
          }

          $output = array(
                          "draw" => $_POST['draw'],
                          "recordsTotal" => $this->Guru_model->count_all(),
                          "recordsFiltered" => $this->Guru_model->count_filtered(),
                          "data" => $data,
                  );
          //output to json format
          echo json_encode($output);
      }


        public function create(){
           $data = array(
             'content'=>'admin/guru/guru_create',
             'sidebar'=>'admin/sidebar',
             'action'=>'admin/guru/create_action',
             'module'=>'admin',
             'titlePage'=>'guru',
             'controller'=>'guru'
            );
          $this->template->load($data);
        }

        public function edit($id_guru){
          $dataedit=$this->Guru_model->get_by_id($id_guru);
           $data = array(
             'content'=>'admin/guru/guru_edit',
             'sidebar'=>'admin/sidebar',
             'action'=>'admin/guru/update_action',
             'dataedit'=>$dataedit,
             'module'=>'admin',
             'titlePage'=>'guru',
             'controller'=>'guru'
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
					'nama_guru' => $this->input->post('nama_guru',TRUE),
					'nik' => $this->input->post('nik',TRUE),
					'nip' => $this->input->post('nip',TRUE),
					'username' => $this->input->post('username',TRUE),
					'password' => $this->input->post('password',TRUE),

);

            $this->Guru_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('admin/guru'));
        }
    }




    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->edit($this->input->post('id', TRUE));
        } else {
            $data = array(
					'nama_guru' => $this->input->post('nama_guru',TRUE),
					'nik' => $this->input->post('nik',TRUE),
					'nip' => $this->input->post('nip',TRUE),
					'username' => $this->input->post('username',TRUE),
					'password' => $this->input->post('password',TRUE),

);

            $this->Guru_model->update($this->input->post('id_guru', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('admin/guru'));
        }
    }

    public function delete($id_guru)
    {
        $row = $this->Guru_model->get_by_id($id_guru);

        if ($row) {
            $this->Guru_model->delete($id_guru);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('admin/guru'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admin/guru'));
        }
    }

    public function _rules()
    {
$this->form_validation->set_rules('nama_guru', 'nama_guru', 'trim|required');
$this->form_validation->set_rules('nik', 'nik', 'trim|required');
$this->form_validation->set_rules('nip', 'nip', 'trim|required');
$this->form_validation->set_rules('username', 'username', 'trim|required');
$this->form_validation->set_rules('password', 'password', 'trim|required');


	$this->form_validation->set_rules('id_guru', 'id_guru', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

    }

}
