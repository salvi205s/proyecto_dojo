<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DojoController extends CI_Controller
{

	//pendiente
	//quitar inicio
	//separar head, footer
	//entrar en el admin por el tipo y no por el nombre

	public function index()
	{
		/* $this->load->view('head');
		$this->load->view('nav'); */
		$this->cargarPag('home');
	}

	public function cargarPag($pag)
	{
		$this->load->view('paginas/' . $pag);
	}

	public function cargarPagMisDatos($pag)
	{
	
		$this->load->model("MisDatosModel");

		$data['misDatos'] = $this->MisDatosModel->datosCliente($_SESSION['id']);

		$this->load->view('paginas/misDatos', $data);
	}
}
