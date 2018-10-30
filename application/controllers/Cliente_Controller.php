<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente_Controller extends CI_Controller {

   public function __construct(){
      parent::__construct();

      if (!$this->session->userdata('login')) {
			redirect(base_url());
		}
		$this->load->model('Cliente_Model', 'cliente');
	}

    public function index()
	{   $data = $this->cliente->get_clientes();
		$this->load->view('Dashboard/cliente/clientes_View', compact('data'));
	}


	public function show_cliente(){
		$id = $this->uri->segment(2);
		$data = $this->cliente->get_cliente($id);
		$facturas = $this->cliente->get_factura($id);
		
	  $this->load->view('Dashboard/cliente/clienteShow_View', compact('data', 'facturas'));
	}

}
