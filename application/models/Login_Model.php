<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_Model extends CI_Model {

	public function __construct()
    {

    	
    }

   public function login($mail, $password)
	{
		$this->db->where('user', $mail); 
		$this->db->where('password' , $password);

       
		$resultados = $this->db->get('users');
		if ($resultados->num_rows()>0) {
			return $resultados->row();
		}
		else
		{
			return false;
		}
	}
}
