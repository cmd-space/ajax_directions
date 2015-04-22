<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Maps extends CI_Controller {
  public function index()
  {
  	$this->load->view('index');
  }

  public function directions() {
  	$from = str_replace(' ', '', $this->input->post('from'));
  	$to = str_replace(' ', '', $this->input->post('to'));
  	$html = file_get_contents('https://maps.googleapis.com/maps/api/directions/json?origin='.$from.'&destination='.$to.'&key=AIzaSyDFysk3DkUyMwzl-3bnmVnlKuUT-ytaXWU');
  	$this->output->set_content_type('application/json')->set_output($html);
  }
}

//end of main controller
