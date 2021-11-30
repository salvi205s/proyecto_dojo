<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LoginController extends CI_Controller
{

    public function index()
    {
        $this->login();
    }

    //funcion para loguearse
    public function login()
    {

        $this->load->model("LoginModel");
        //  $this->load->model("misDatosModel");

        $this->form_validation->set_rules('nombreLog', 'nombreLog', 'trim|required');
        $this->form_validation->set_rules('clave', 'clave', 'trim|required');

        if ($this->form_validation->run()) {

            $nombre = $this->input->post('nombreLog');
            $clave =  md5($this->input->post('clave'));

            $userLog = $this->LoginModel->loginUser($nombre, $clave);



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

                $this->session->set_userdata($datosSesion);

                if ($tipo == "admin") {

                    $this->load->model("TablaDatosModel");

                    $_SESSION['nombreSesion'] = $nombre;
                    $data['listaClients'] = $this->TablaDatosModel->listar();


                    $this->load->view('paginas/tablaClientes', $data);
                } else {
                
                    /* ------------------------------- */

                    $this->load->model("MisDatosModel");

                    $data['misDatos'] = $this->MisDatosModel->datosCliente($_SESSION['id']);


                    $this->load->view('paginas/misDatos', $data);

                    /* ------------------------------------- */
                }
                unset($_SESSION['errorLogin']);
            } else {
                $_SESSION['errorLogin'] = true;
                $this->load->view('paginas/inicio_sesion');
            }
        } else {

            if (isset($_SESSION['usuario']) && $_SESSION['tipo'] === "admin") {
                $this->load->model("TablaDatosModel");
                $data['listaClients'] = $this->TablaDatosModel->listar();

                $this->load->view('paginas/tablaClientes', $data);
            } elseif ($_SESSION['usuario'] != "admin") {

                /* ------------------------------- */

                $this->load->model("MisDatosModel");

                $data['misDatos'] = $this->MisDatosModel->datosCliente($_SESSION['id']);


                $this->load->view('paginas/misDatos', $data);

                /* ------------------------------------- */
            } else {
                $this->load->view('paginas/inicio_sesion');
            }
        }
    }
}
