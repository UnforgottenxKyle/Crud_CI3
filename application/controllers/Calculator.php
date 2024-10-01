<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


class Calculator extends CI_Controller {

    public function index(): void {
        $this->load->view('calculator');
    }

  
}
