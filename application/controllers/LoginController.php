<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LoginController extends CI_Controller
{

    //funcion que inicia el metodo login, nada mas empezar
    public function index()
    {
        $this->login();
    }

    //funcion para loguearse
    public function login()
    {

        //cargamos el modelo loginModel, para usar sus funciones
        $this->load->model("LoginModel");
        //  $this->load->model("misDatosModel");

        //especificamos que en el formulario de login el campo nombre y clave son requeridos, y le quitamos los espacios para evitar posibles erroes
        $this->form_validation->set_rules('nombreLog', 'nombreLog', 'trim|required');
        $this->form_validation->set_rules('clave', 'clave', 'trim|required');

        //si cumple las reglas anteriores...
        if ($this->form_validation->run()) {

            $nombre = $this->input->post('nombreLog');
            $clave =  md5($this->input->post('clave'));

            //llamamos al metodo loginUser, para obtener los datos del usuario logueado
            $userLog = $this->LoginModel->loginUser($nombre, $clave);

            //si loginUser es correcto, guardamos los datos del cliente en un array, para mostrarlos en mis datos
            if ($userLog) {

                $datosSesion = array(
                    "usuario" => $userLog[0]->nombre,
                    "nombreSesion" => $nombre,
                    "DNI" => $userLog[0]->DNI,
                    "email" => $userLog[0]->email,
                    "edad" => $userLog[0]->edad,

                    // "estado" => $userLog[0]->estado,
                    "tipo" => $userLog[0]->tipo,
                    "id" => $userLog[0]->idCliente

                );

                $tipo = $userLog[0]->tipo;

                //guardamos el array como variables de sesion
                $this->session->set_userdata($datosSesion);

                //si el tipo es admin, se carga la vista tablaclientes y se le pasa la funcion listar, para cargar la tabla de clientes
                if ($tipo == "admin") {

                    $this->load->model("TablaDatosModel");

                    $_SESSION['nombreSesion'] = $nombre;
                    $data['listaClients'] = $this->TablaDatosModel->listar();

                    $this->load->view('head');
                    $this->load->view('paginas/tablaClientes', $data);

                    //si el tipo es normal, se carga la vista misDatos y se le pasa los datos del cliente
                } else {

                    $this->load->model("MisDatosModel");

                    $data['misDatos'] = $this->MisDatosModel->datosCliente($_SESSION['id']);

                    $this->load->view('head');
                    $this->load->view('paginas/misDatos', $data);
                    $this->load->view('footer');
                }

                //como el login es correcto, se borra la varible de sesion errorLogin
                unset($_SESSION['errorLogin']);

                //si por el contrario el login no ha sido posible, se vuelve a cargar la pagina y se declara una variable de sesion de error a true
            } else {
                $_SESSION['errorLogin'] = true;
                $this->load->view('head');
                $this->load->view('paginas/inicio_sesion');
                $this->load->view('footer');
            }

            //si no se cumplen las reglas del formulario... o sea si ya esta logueado
        } else {

            //si existe la sesion de usuario y el tipo es admin, carga la vista admin, si es lo contrario carga la vista misDatos, y si no carga el inicio
            if (isset($_SESSION['usuario']) && $_SESSION['tipo'] === "admin") {
                $this->load->model("TablaDatosModel");
                $data['listaClients'] = $this->TablaDatosModel->listar();

                $this->load->view('head');
                $this->load->view('paginas/tablaClientes', $data);
                
            } elseif ($_SESSION['usuario'] != "admin") {


                $this->load->model("MisDatosModel");

                $data['misDatos'] = $this->MisDatosModel->datosCliente($_SESSION['id']);

                $this->load->view('head');
                $this->load->view('paginas/misDatos', $data);
                $this->load->view('footer');

            } else {
                $this->load->view('head');
                $this->load->view('paginas/inicio_sesion');
                $this->load->view('footer');
            }
        }
    }
}
