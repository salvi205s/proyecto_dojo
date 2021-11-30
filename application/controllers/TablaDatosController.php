<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TablaDatosController extends CI_Controller
{

	//pendiente
	//quitar inicio
	//separar head, footer

	public function index()
	{
		$this->listarTabla();
	}

	public function listarTabla()
	{


		$this->load->model("TablaDatosModel");

		$data['listaClients'] = $this->TablaDatosModel->listar();


		$this->load->view('paginas/tablaClientes', $data);
	}

	//funcion que llama al metodo borrar, pasandole la id y redirecciona a el controlador
	public function	borrar_usuario($id)
	{
		$this->load->model("TablaDatosModel");
		$this->TablaDatosModel->borrar($id);

		redirect("TablaDatosController", "location");
	}

	public function	editar_usuario($id)
	{

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


			if (strlen($_POST['clave']) > 0) {

				$this->load->model("TablaDatosModel");
				$this->TablaDatosModel->editar_usuario($id, $_POST, $_POST['clave']);
			} elseif (strlen($_POST['clave']) == 0) {

				$this->load->model("TablaDatosModel");

				$this->TablaDatosModel->editar_usuario($id, $_POST);
			}

			unset($_SESSION['errorHorario']);
		} else {

			$_SESSION['errorHorario'] = true;
		}


		redirect("TablaDatosController", "location");
	}

	/* --------------------------------------------------------------------------- */
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

				$this->load->view('paginas/tablaClientes', $data);
			}
		} else {
			$_SESSION['errorRegistro'] = true;

			$this->load->model("TablaDatosModel");
			$data['listaClients'] = $this->TablaDatosModel->listar();

			$this->load->view('paginas/tablaClientes', $data);
		}
	}
}
