<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Admin extends MY_Controller{

      public function __construct()
      {
        parent::__construct();
        //KostLab : Write Less Do More
        // if($this->session->userdata('status')!='login'){
        //   redirect(base_url('login'));
        // }
        // if(!$this->session->userdata("username")){
        //       redirect('login');
        //     }
        if(!$this->session->userdata('status')=='login_admin_ra'){
          redirect(base_url('login'));
        }
      }

      function index()
      {

        $data = array(
          'content'=>'admin/dashboard',
          'data'=>null,
          'sidebar'=>'admin/sidebar'
         );
        $this->template->load($data);
      }

    }
