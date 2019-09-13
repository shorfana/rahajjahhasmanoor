<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends MY_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $data['name']='Kostlab';
    $this->load->view('header',$data);
    $this->load->view('main',$data);
    $this->load->view('footer',$data);
  }

  function gallery()
  {
    $data['name']='Kostlab';
    $this->load->view('header',$data);
    $this->load->view('gallery',$data);
    $this->load->view('footer',$data);
  }

  function about()
  {
    $data['name']='Kostlab';
    $this->load->view('header',$data);
    $this->load->view('about',$data);
    $this->load->view('footer',$data);
  }

  function newsListing()
  {
    $data['name']='Kostlab';
    $this->load->view('header',$data);
    $this->load->view('news-listing',$data);
    $this->load->view('footer',$data);
  }

  function newsDetail()
  {
    $data['name']='Kostlab';
    $this->load->view('header',$data);
    $this->load->view('news-detail',$data);
    $this->load->view('footer',$data);
  }

  function eventListing()
  {
    $data['name']='Kostlab';
    $this->load->view('header',$data);
    $this->load->view('event-listing',$data);
    $this->load->view('footer',$data);
  }

  function eventDetail()
  {
    $data['name']='Kostlab';
    $this->load->view('header',$data);
    $this->load->view('event-detail',$data);
    $this->load->view('footer',$data);
  }

  function contact()
  {
    $data['name']='Kostlab';
    $this->load->view('header',$data);
    $this->load->view('contact',$data);
    $this->load->view('footer',$data);
  }

  function teacherListing()
  {
    $data['name']='Kostlab';
    $this->load->view('header',$data);
    $this->load->view('teacher-listing',$data);
    $this->load->view('footer',$data);
  }

  function teacherDetail()
  {
    $data['name']='Kostlab';
    $this->load->view('header',$data);
    $this->load->view('teacher-detail',$data);
    $this->load->view('footer',$data);
  }

  function services()
  {
    $data['name']='Kostlab';
    $this->load->view('header',$data);
    $this->load->view('services',$data);
    $this->load->view('footer',$data);
  }

  function classDetail()
  {
    $data['name']='Kostlab';
    $this->load->view('header',$data);
    $this->load->view('class-detail',$data);
    $this->load->view('footer',$data);
  }

  function classListing()
  {
    $data['name']='Kostlab';
    $this->load->view('header',$data);
    $this->load->view('class-listing',$data);
    $this->load->view('footer',$data);
  }

  function page404()
  {
    $data['name']='Kostlab';
    $this->load->view('header',$data);
    $this->load->view('404-page',$data);
    $this->load->view('footer',$data);
  }




}
