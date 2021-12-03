<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TablaDatosController extends CI_Controller
{

	//cargael metodo listar Tabla al inicio
	public function index()
	{
		$this->listarTabla();
	}

	/* --------------------------------------------------------------------------- */

	//funcion que llama al metodo listar del modelo TablaDatosModel y carga la vista tablaClientes pasandole el array de clientes
	public function listarTabla()
	{

		$this->load->model("TablaDatosModel");

		$data['listaClients'] = $this->TablaDatosModel->listar();


		$this->load->view('head');
		$this->load->view('paginas/tablaClientes', $data);
	}

	/* --------------------------------------------------------------------------- */

	//funcion que llama al metodo borrar, pasandole la id y redirecciona a el controlador
	public function	borrar_usuario($id)
	{
		$this->load->model("TablaDatosModel");
		$this->TablaDatosModel->borrar($id);

		redirect("TablaDatosController", "location");
	}

	/* --------------------------------------------------------------------------- */

	//funcion para editar un usuario desde la vista admin
	public function	editar_usuario($id)
	{

		//controlamos que se elija bien el horario
		if (
			$this->input->post('edad_edit') >= 18 &&
			($this->input->post('horario_edit') == 1 ||
				$this->input->post('horario_edit') == 2 ||
				$this->input->post('horario_edit') == 5 ||
				$this->input->post('horario_edit') == 6 ||
				$this->input->post('horario_edit') == 7 ||
				$this->input->post('horario_edit') == 10) ||

			$this->input->post('edad_edit') < 18 &&
			($this->input->post('horario_edit') == 3 ||
				$this->input->post('horario_edit') == 4 ||
				$this->input->post('horario_edit') == 8 ||
				$this->input->post('horario_edit') == 9)
		) {

			//si el campo clave esta lleno, se le pasa la clave al metodo editar_usuario
			if (strlen($_POST['clave']) > 0) {

				$this->load->model("TablaDatosModel");
				$this->TablaDatosModel->editar_usuario($id, $_POST, $_POST['clave']);

				//si el campo clave esta vacio, no se le pasa la clave al metodo editar_usuario
			} elseif (strlen($_POST['clave']) == 0) {

				$this->load->model("TablaDatosModel");

				$this->TablaDatosModel->editar_usuario($id, $_POST);
			}

			//se borra el mensaje de error si todo va bien
			unset($_SESSION['errorHorario']);

			//se crea un mensaje de error si no se elige bien el horario 
		} else {

			$_SESSION['errorHorario'] = true;
		}


		redirect("TablaDatosController", "location");
	}

	/* --------------------------------------------------------------------------- */

	//funcion que hace lo mismo que la funcion registrar de RegistroController
	public function add_usuario()
	{

		$this->load->model("RegistroModel");
		$this->load->model("LoginModel");
		$this->load->helper('dni');

		//	$this->load->model("misDatosModel");

		$this->form_validation->set_rules('nombre', 'nombre', 'trim|required');
		$this->form_validation->set_rules('DNI', 'DNI', 'trim|required');
		$this->form_validation->set_rules('clave', 'clave', 'trim|required');
		$this->form_validation->set_rules('claveRep', 'claveRep', 'trim|required');
		$this->form_validation->set_rules('email', 'email', 'trim|required');
		$this->form_validation->set_rules('nCuenta', 'nCuenta', 'trim|required');

		$dni_valido = dni($this->input->post('DNI'));

		if (!$dni_valido) {
			$_SESSION['dni_no_valido'] = true;
		} else {
			unset($_SESSION['dni_no_valido']);
		}

		if ($_POST['clave'] != $_POST['claveRep']) {
			$clavesIguales = false;
			$_SESSION['clavesIguales'] = true;
		} else {
			$clavesIguales = true;
			unset($_SESSION['clavesIguales']);
		}

		$DNI_Repetido = $this->RegistroModel->dniRepetido($this->input->post('DNI'));

		if ($DNI_Repetido) {
			$_SESSION['dni_repetido'] = true;
		} else {
			unset($_SESSION['dni_repetido']);
		}

		if ($this->form_validation->run() && $dni_valido && $clavesIguales && !$DNI_Repetido) {


			if (
				$this->input->post('edadR') >= 18 &&
				($this->input->post('horarioR') == 1 ||
					$this->input->post('horarioR') == 2 ||
					$this->input->post('horarioR') == 5 ||
					$this->input->post('horarioR') == 6 ||
					$this->input->post('horarioR') == 7 ||
					$this->input->post('horarioR') == 10) ||

				$this->input->post('edadR') < 18 &&
				($this->input->post('horarioR') == 3 ||
					$this->input->post('horarioR') == 4 ||
					$this->input->post('horarioR') == 8 ||
					$this->input->post('horarioR') == 9)
			) {

				$this->RegistroModel->insertUser($_POST);

				$nombre = $this->input->post('nombre');
				$clave =  md5($this->input->post('clave'));

				$userLog = $this->LoginModel->loginUser($nombre, $clave);

				$this->RegistroModel->insertUser2($userLog[0]->idCliente, $_POST['horarioR']);


				unset($_SESSION['errorHorario']);
				unset($_SESSION['errorRegistro']);
				redirect("TablaDatosController", "location");
			} else {

				$_SESSION['errorHorario'] = true;
				$this->load->model("TablaDatosModel");
				$data['listaClients'] = $this->TablaDatosModel->listar();

				$this->load->view('head');
				$this->load->view('paginas/tablaClientes', $data);
			}
		} else {
			$_SESSION['errorRegistro'] = true;

			$this->load->model("TablaDatosModel");
			$data['listaClients'] = $this->TablaDatosModel->listar();

			$this->load->view('head');
			$this->load->view('paginas/tablaClientes', $data);
		}
	}
}
