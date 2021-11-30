<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RegistroController extends CI_Controller
{

  public function index()
  {
    $this->load->view('paginas/registro');
  }

  //funcion que llama al metodo add_usuario, pasandole los datos post y redirecciona a el controlador
  public function add_usuario()
  {

    $this->load->helper('dni');

    $this->load->model("RegistroModel");
    $this->load->model("LoginModel");
    $this->load->model("misDatosModel");

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

        $datosSesion = array(
          "usuario" => $userLog[0]->nombre,
          "nombreSesion" => $nombre,
          "DNI" => $this->input->post('DNI'),
          "email" => $this->input->post('email'),
          "edad" => $this->input->post('edadR'),
          "nunCuenta" => $this->input->post('nCuenta'),
          "id" => $userLog[0]->idCliente

        );

        $this->session->set_userdata($datosSesion);

        $this->RegistroModel->insertUser2($userLog[0]->idCliente, $_POST['horarioR']);

        unset($_SESSION['errorHorario']);
        unset($_SESSION['errorRegistro']);
        /* ------------------------------- */

        $this->load->model("MisDatosModel");

        $data['misDatos'] = $this->MisDatosModel->datosCliente($_SESSION['id']);


        $this->load->view('paginas/misDatos', $data);
      } else {
        $_SESSION['errorRegistro'] = true;
        $_SESSION['errorHorario'] = true;
        //redirect("RegistroController", "location");
        $this->load->view('paginas/registro');
      }
      /* ------------------------------------- */
    } else {
      $_SESSION['errorRegistro'] = true;
      //redirect("RegistroController", "location");
      $this->load->view('paginas/registro');
    }

    // $_SESSION['nombreSesion'] = $_POST['nombre'];

  }





  /* ------------------------------------------------------------------------ */
}
