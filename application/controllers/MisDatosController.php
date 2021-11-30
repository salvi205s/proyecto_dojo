<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MisDatosController extends CI_Controller
{

    private $table = "clientes";


    public function index()
    {
    }

    public function darBaja()
    {

        $this->load->model("MisDatosModel");

        $this->MisDatosModel->darBaja($_SESSION['id']);


        redirect("loginController", "location");
    }

    public function misDatosClien()
	{
		$this->load->model("MisDatosModel");

		$data['misDatos'] = $this->MisDatosModel->datosCliente($_SESSION['id']);


		$this->load->view('paginas/misDatos', $data);
	}


    public function pagar()
    {

        $this->load->model("MisDatosModel");

        $this->MisDatosModel->pagar($_SESSION['id']);
    
        redirect("loginController", "location");
    }

    //funcion que borra la variable de sesion usuario
    public function cerrar_sesion()
    {
        unset($_SESSION['nombreSesion']);
        $this->session->sess_destroy();
        redirect("DojoController", "location");

    }
}
