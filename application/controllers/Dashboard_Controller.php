<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_Controller extends CI_Controller {

   public function __construct(){
      parent::__construct();

      if (!$this->session->userdata('login')) {
			redirect(base_url());
		}
		$this->load->model('Dashboard_Model', 'dashboard');
	}

    public function index()
	{

		$dataNumber = array(
			'n_clientes' => count($this->dashboard->get_('cliente')),
			'n_categorias' => count($this->dashboard->get_('categoria')),
			'n_facturas' => count($this->dashboard->get_('factura')),
			'n_productos' => count($this->dashboard->get_('producto')),
		);

		$productosCero = $this->dashboard->get_products_cero();
		
		$this->load->view('Dashboard/dashboard_View', compact('dataNumber','productosCero'));
	}


	public function cero_count(){
		$data = $this->dashboard->get_products_cero_count();
		echo json_encode($data);
	}

	public function mas_count(){
		$data = $this->dashboard->get_products_count();
		echo json_encode($data);
	}


}
