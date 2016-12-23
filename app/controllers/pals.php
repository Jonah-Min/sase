<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pals extends CI_Controller {

  public function index()
  {
    $this->load->helper('url');
    $this->load->view('pals');
  }

}

/* End of file */
