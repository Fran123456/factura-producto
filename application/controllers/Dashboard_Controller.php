<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_Controller extends CI_Controller {

   public function __construct(){
      parent::__construct();

      if (!$this->session->userdata('login')) {
			redirect(base_url());
		}
		//$this->load->model('dashboard_Model');
	}

    public function index()
	{
		$this->load->view('Dashboard/dashboard_View');
	}


}
