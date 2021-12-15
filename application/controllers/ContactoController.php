<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ContactoController extends CI_Controller
{

	//metodo que se inicia por defecto
	public function __construct()
	{
		// Configuramos el email 
		$config['protocol'] = 'smtp';
		$config['mailpath'] = '/usr/sbin/sendmail';
		$config['charset'] = 'iso-8859-1';
		$config['wordwrap'] = TRUE;

		$this->email->initialize($config);
	}

	public function enviarEmail()
	{
		
		$this->load->library('email');
		$this->email->from('salvi205@hotmail.com','sal');
		$this->email->to('salvi205s@gmail.com');
		$this->email->subject('Asunto del correo');
		$this->email->message('probandoooo');
		if ($this->email->send()) {
			echo "bien";
			$this->load->view('paginas/home');

		} else {
			$this->load->view('paginas/grados');
			echo "mal";


		}



		


	}
}
