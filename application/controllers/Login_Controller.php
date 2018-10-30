<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_Controller extends CI_Controller {

	 public function __construct(){
	 	parent::__construct();
        $this->load->model('Login_Model' , 'login');
	 }

	public function index()
	{
		
		if ($this->session->userdata('login')) { //Aqui validamos que si hay una sesion entonces se redirija directo al dashboard aunque el usuario quiera ver la vista del login
			 redirect(base_url().'dashboard'); //redirigimos al dashboard
		}
		else
		{
		$this->load->view('login/login_View');
		}
	}



	public function login() //funcion para loggeo
	{
	    $mail = $this->input->post('email'); //capturamos los datos (correo y password)
		$password = $this->input->post('password'); //capturamos los datos (correo y password)
		$res = $this->login->login($mail, md5($password));  //utilizamos el metodo login del modelo para verificar si el usuario existe
	    if (!$res) { //si el usuario no existe redirigimos al login de nuevo con mensaje de error
            
            $this->session->set_flashdata('ErrorLogin' , 'Error, usuario u contraseña erronea');
	    	redirect(base_url());
	    }
	    else //si hay exito entonces creamos la sesión
	    {
       
	     //preparamos los datos de la sesión
         $data = array(
            'id' => $res->id,
            'nombre' => $res->nombre,
            'user' => $res->user,
            'login' => TRUE,
         );
         $this->session->set_userdata($data); //asignamos los datos a la sesión
          redirect(base_url().'dashboard'); //redirigimos al dashboard
        
	    }
	}


	public function logout()
	{
		$this->session->sess_destroy(); //destruimos la sesion
		redirect(base_url()); //redirigimos al login
	}




}
