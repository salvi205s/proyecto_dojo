<?php

class TablaDatosModel extends CI_Model
{
    private $table = "clientes";


    //funcion que hace una consulta para listar todos los usuarios
    public function listar()
    {
        return $this->db
            ->select("clientes.*, suscripcion.fechaInicio, pagos.*")
            ->from("clientes")
            ->join("suscripcion", "suscripcion.idCliente=clientes.idCliente")
            ->join("pagos", "pagos.idCliente=clientes.idCliente")
            ->get()
            ->result();
    }

    //funcion que recibe un id para borrar al usuario que coincida con ese id
    public function borrar($id)
    {

        //return $this->db->query("DELETE FROM `usuarios` WHERE id = $id");
        $array = array(
            "idCliente" => $id
        );
        $this->db->delete($this->table, $array);
    }

    //funcion que recibe datos para actualizar al usuario que tenga la id pasada
    //si se le pasa la clave como parametro la actualiza
    public function editar_usuario($id, $data, $clave = false)
    {

        $this->db->select('clases' . '.precio');

        $this->db->from('clases');

        $this->db->where('clases' . '.idClase', $data['horario_edit']);

        $query = $this->db->get();

        $query = $query->result();

        $precio = $query[0]->precio;

        if (strlen($_POST['clave']) > 0) {

            $clientes = array(

                "nombre" => $data['nombre_edit'],
                "DNI" => $data['DNI_edit'], //hacer funcion que extraiga los dni y lo compare con el introducido,
                // si se repite da error

                "clave" => md5($data['clave']),

                "email" => $data['email_edit'],
                "edad" => $data['edad_edit'],

                "nunCuenta" => $data['nCuenta_edit'],
            );

            $suscripcion = array(

                "idClase" => $data['horario_edit'],
            );



            $pagos = array(

                "idClase" => $data['horario_edit'],
                "precio" => $precio

            );
        } else {
            $clientes = array(

                "nombre" => $data['nombre_edit'],
                "DNI" => $data['DNI_edit'], //hacer funcion que extraiga los dni y lo compare con el introducido,
                // si se repite da error

                "email" => $data['email_edit'],
                "edad" => $data['edad_edit'],

                "nunCuenta" => $data['nCuenta_edit'],
            );

            $suscripcion = array(

                "idClase" => $data['horario_edit'],
            );

            $pagos = array(

                "idClase" => $data['horario_edit'],
                "precio" => $precio

            );
        }

        $this->db->where("idCliente", $id);
        $this->db->update('clientes', $clientes);

        $this->db->where("idCliente", $id);
        $this->db->update('suscripcion', $suscripcion);

        $this->db->where("idCliente", $id);
        $this->db->update('pagos', $pagos);
    }
}
