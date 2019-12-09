<?php

    if (!defined('BASEPATH'))
        exit('No direct script access allowed');

    class Login extends MY_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->model('Dbs');
            // $this->load->library('form_validation');
            // if($this->session->userdata('usertype')){
            //
            // }
        }

        public function index()
        {
          if($this->session->userdata('status')=='login'){
            redirect(base_url('admin'));
          }
            $this->load->view('login');
        }

        public function register(){
          $this->load->view('regis');
        }

    public function logout(){
      $this->session->sess_destroy();
      redirect(base_url()."login");
    }
    public function login_act(){
      $username=$this->input->post('username');
      $password=$this->input->post('password');
      $where=array(
    		'username' => $username,
    		'password' => sha1($password)
    	);

      if($this->Dbs->cek_login("user",$where)->num_rows()>0){// cek ke tabel user
        $id_user = $this->Dbs->getUserId($username);

    		    $data_session = array(
                    'username' => $username,
                    'id_user' => $id_user,
                    'status' => "login"
                );
            $this->session->set_userdata($data_session);
            // var_dump($data_session);die;
            redirect(base_url("admin"));
            echo "berhasil login";
    	}else{
        echo "Gagal Login";
      }
    }

    function lupa_password(){
      $this->load->view('forgotPassword');
    }

    function lupa_password_act(){
      $email = $this->input->post('email');
      $data = array(
        'email' => $email
      );
      $data_email = $this->Dbs->cek_login("user",$data);
      // var_dump($email);die;
      if ($data_email->num_rows()>0) {
        $this->kirimEmail($email);
        redirect(base_url("login"));
      }else{
        echo "email gak ada brooo";
      }
    }

    function reset_password($code){
      $data = array(
        'kode' => $code
      );
      $this->load->view('resetPassword',$data);
    }

    function reset_password_act(){
      $password = $this->input->post('password');
      $kode = $this->input->post('kode');
      $data_password = array(
        'password' => sha1($password)
      );
      // var_dump($data_password);die;
      $this->Dbs->resetpasswordUser($data_password,'user','forgotten_password_code',$kode);
      redirect(base_url("login"));
    }

    function kirimEmail($emailtujuan){
      $pass="129FAasdsk25kwBjakjDlff";
      $panjang='8';
      $len=strlen($pass);
      $start=$len-$panjang;
      $xx=rand('0',$start);
      $yy=str_shuffle($pass);
      $randomString=substr($yy, $xx, $panjang);
      $data = array(
        'forgotten_password_code' => $randomString,
      );
      //update ke kolom forgoten
      $this->Dbs->ubahpasswordUser($data,'user','email',$emailtujuan);

      $link=base_url()."login/reset_password/".$randomString;
      //ekseksusi kirim email berdasarkan params
      //isi email berupa link
      $config['protocol'] = 'smtp';
      $config['smtp_host'] = 'ssl://smtp.gmail.com';
      $config['smtp_port'] = '465';
      $config['smtp_user'] = 'rahajjahhasmahnoor@gmail.com';
      $config['smtp_pass'] = 'lembaga100%'; //ini pake akun pass google email
      $config['mailtype'] = 'html';
      $config['charset'] = 'iso-8859-1';
      $config['wordwrap'] = 'TRUE';
      $config['newline'] = "\r\n";

      $this->load->library('email', $config);
      $this->email->initialize($config);

      $this->email->from('shorfanaiqbal98@gmail.com');
      $this->email->to($emailtujuan);
      $this->email->subject('Reset Password');
      $this->email->message('Silahkan klik ini berikut untuk reset password '.$link);
      $this->email->set_mailtype('html');
      $this->email->send();
   }


    public function _rules()
    {
      $this->form_validation->set_rules('nama', 'nama', 'trim|required');
      $this->form_validation->set_rules('email', 'email', 'trim|required');
      $this->form_validation->set_rules('username', 'username', 'trim|required');
      $this->form_validation->set_rules('password', 'password', 'trim|required');


      	$this->form_validation->set_rules('id_user', 'id_user', 'trim');
      	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

    }

}
