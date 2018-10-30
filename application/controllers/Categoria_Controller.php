<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categoria_Controller extends CI_Controller {

   public function __construct(){
      parent::__construct();

      if (!$this->session->userdata('login')) {
			redirect(base_url());
		}
		$this->load->model('Categoria_Model', 'categoria');
	}

    public function index()
	{   $data = $this->categoria->get_categories();
		$this->load->view('Dashboard/categorias/categorias_View', compact('data'));
	}

	public function add_view(){
		$this->load->view('Dashboard/categorias/categoriasAdd_View');
	}

	public function add(){
		$data = array(
          'nombre' =>  $this->input->post('nombre'),
          'descripcion' => $this->input->post('descripcion'),
		);

		$this->categoria->add_($data);
		$this->session->set_flashdata('categoriaSuccess', 'Categoria agregada correctamente');
		redirect(base_url().'category');
	}

	public function delete(){
		$id = $this->uri->segment(2);
		$this->categoria->delete_($id);
		$this->session->set_flashdata('categoriadelete', 'Categoria eliminada correctamente');
		redirect(base_url().'category');
	}



}
