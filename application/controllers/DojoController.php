<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DojoController extends CI_Controller
{

	//metodo que se inicia por defecto
	public function index()
	{
		/*  $this->load->view('head'); */
		$this->cargarPag('home');
	}

	//funcion para cargar una vista
	public function cargarPag($pag)
	{

		$this->load->view('head');
		$this->load->view('paginas/' . $pag);
		$this->load->view('footer');

	}

	//funcion para cargar la vista misDatos, pasandole el array con los datos del cliente
	public function cargarPagMisDatos($pag)
	{

		$this->load->model("MisDatosModel");

		$data['misDatos'] = $this->MisDatosModel->datosCliente($_SESSION['id']);

		$this->load->view('head');
		$this->load->view('paginas/misDatos', $data);
		$this->load->view('footer');

	}
}
