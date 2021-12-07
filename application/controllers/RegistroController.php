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

    //funcion que comprueba si el DNI es valido
    $this->load->helper('dni');

    //cargamos los modelos que vamos a usar
    $this->load->model("RegistroModel");
    $this->load->model("LoginModel");
    $this->load->model("misDatosModel");

    //establecemos las reglas del formulario de registro
    $this->form_validation->set_rules('nombre', 'nombre', 'trim|required');
    $this->form_validation->set_rules('DNI', 'DNI', 'trim|required');
    $this->form_validation->set_rules('clave', 'clave', 'trim|required');
    $this->form_validation->set_rules('claveRep', 'claveRep', 'trim|required');
    $this->form_validation->set_rules('email', 'email', 'trim|required');
    $this->form_validation->set_rules('nCuenta', 'nCuenta', 'trim|required');

    //llamamos al metodo para validar el DNI
    $dni_valido = dni($this->input->post('DNI'));

    //si el DNI no es valido, creamos un mensaje de aviso, si el DNI es valido, borramos el mensaje 
    if (!$dni_valido) {
      $_SESSION['dni_no_valido'] = true;
    } else {
      unset($_SESSION['dni_no_valido']);
    }

    //si los campos clave y claveRep son diferentes,creamos una variable a false y creamos un mensaje de aviso, si son iguales, borramos el mensaje y ponemos la variable a true
    if ($_POST['clave'] != $_POST['claveRep']) {
      $clavesIguales = false;
      $_SESSION['clavesIguales'] = true;
    } else {
      $clavesIguales = true;
      unset($_SESSION['clavesIguales']);
    }

    //guardamos la funcion dniRepetido en una variable
    $DNI_Repetido = $this->RegistroModel->dniRepetido($this->input->post('DNI'));

    if ($DNI_Repetido) {
      $_SESSION['dni_repetido'] = true;
    } else {
      unset($_SESSION['dni_repetido']);
    }

    //si todo es correcto...
    if ($this->form_validation->run() && $dni_valido && $clavesIguales && !$DNI_Repetido) {

      //controlamos que un menor no pueda ir a una clase de adultos y viceversa
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

        //si el horario esta bien, se le pasan todos los datos del formulario de registro al metodo insertUser para que lo inserte en la base de datos en la tabla clientes
        $this->RegistroModel->insertUser($_POST);

        $nombre = $this->input->post('nombre');
        $clave =  md5($this->input->post('clave'));

        //logueamos al cliente...
        $userLog = $this->LoginModel->loginUser($nombre, $clave);
        $nombreSesion = explode(" ", $nombre);
        
        //guardamos sus datos en una array...
        $datosSesion = array(
          "usuario" => $userLog[0]->nombre,
          "nombreSesion" => $nombreSesion[0],
          "DNI" => $this->input->post('DNI'),
          "email" => $this->input->post('email'),
          "edad" => $this->input->post('edadR'),
          "nunCuenta" => $this->input->post('nCuenta'),
          "id" => $userLog[0]->idCliente

        );

        //los guardamos como variables de sesion
        $this->session->set_userdata($datosSesion);

        //y llamamos a la funcion insertUser2, para que inserte en la tabla suscricion 
        //la fecha de inicio, el idCliente y el idClase

        //y en la tabla pagos inserta el idcliente, idclase, precio, y en la columna estado como pendiente 
        $this->RegistroModel->insertUser2($userLog[0]->idCliente, $_POST['horarioR']);

        //borramos los mensajes de errores
        unset($_SESSION['errorHorario']);
        unset($_SESSION['errorRegistro']);

        //y una vez registrado cargamos la vista misDatos del cliente
        $this->load->model("MisDatosModel");

        $data['misDatos'] = $this->MisDatosModel->datosCliente($_SESSION['id']);

        $this->load->view('head');
        $this->load->view('paginas/misDatos', $data);
        $this->load->view('footer');

        //si el horario no se selecciona correctamente, se crean variables de errores y se vuelve a cargar la vista
      } else {
        $_SESSION['errorRegistro'] = true;
        $_SESSION['errorHorario'] = true;
        //redirect("RegistroController", "location");

        $this->load->view('head');
        $this->load->view('paginas/registro');
        $this->load->view('footer');
      }

      //si no se cumplen las reglas del formulario, se crea una variable de error y se vuelve a cargar la pagina
    } else {
      $_SESSION['errorRegistro'] = true;
      //redirect("RegistroController", "location");

      $this->load->view('head');
      $this->load->view('paginas/registro');
      $this->load->view('footer');
    }

    // $_SESSION['nombreSesion'] = $_POST['nombre'];

  }





  /* ------------------------------------------------------------------------ */
}
