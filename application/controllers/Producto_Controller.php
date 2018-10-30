<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Producto_Controller extends CI_Controller {

   public function __construct(){
      parent::__construct();

      if (!$this->session->userdata('login')) {
			redirect(base_url());
		}
		$this->load->model('Producto_Model', 'producto');
		$this->load->model('Categoria_Model', 'categoria');
	}

    public function index()
	{   $data = $this->producto->get_products();

		$this->load->view('Dashboard/productos/productos_View', compact('data'));
	}

	public function add_view(){
        $data = $this->categoria->get_categories();
		$this->load->view('Dashboard/productos/productosAdd_View', compact('data'));
	}

	public function add(){
		$data = array(
          'nombreP' =>  $this->input->post('nombre'),
          'precio' => $this->input->post('precio'),
          'stock' => $this->input->post('stock'),
          'categoria_id' => $this->input->post('categoria'),
		);

		$this->producto->add_($data);
		$this->session->set_flashdata('productoSuccess', 'Categoria agregada correctamente');
		redirect(base_url().'products');
	}

	public function delete(){
		$id = $this->uri->segment(2);
		$this->producto->delete_($id);
		$this->session->set_flashdata('productodelete', 'Categoria eliminada correctamente');
		redirect(base_url().'products');
	}



	public function edit_view(){
		$id = $this->uri->segment(2);
        $data = $this->producto->get_product($id);
        $categoriasData = $this->categoria->get_categories();

        $this->load->view('Dashboard/productos/productosEdit_View', compact('data','categoriasData'));
	}

	public function edit(){
         $data = array(
          'nombreP' => $this->input->post('nombre'),
          'precio' =>$this->input->post('precio') ,
          'stock' => $this->input->post('stock'),
          'categoria_id' =>$this->input->post('categoria'),
         );
         $id = $this->input->post('id');

         $this->producto->edit_($data, $id);
         $this->session->set_flashdata('productoupdate', 'Categoria eliminada correctamente');
		 redirect(base_url().'products');
	}



}
