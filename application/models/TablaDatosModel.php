<?php

class TablaDatosModel extends CI_Model
{
    private $table = "clientes";


    //funcion que hace una consulta para listar todos los usuarios
    public function listar()
    {

        /* SELECT DISTINCT clientes.*, suscripcion.fechaInicio, pagos.estado 
FROM clientes 
JOIN suscripcion ON suscripcion.idCliente=clientes.idCliente 
JOIN pagos ON pagos.idCliente=clientes.idCliente  */

        return $this->db
            ->select("clientes.*, suscripcion.fechaInicio, pagos.*")
            ->from("clientes")
            ->join("suscripcion", "suscripcion.idCliente=clientes.idCliente")
            ->join("pagos", "pagos.idCliente=clientes.idCliente")
            ->get()
            ->result();

        /*    $this->db->select("*");
        $this->db->from($this->table);

        $query = $this->db->get();

        // print_r($this->db->last_query());

        return $query->result(); */
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


                "horario" => $data['horario_edit'],
                "horSemana" => $data['horSemana_edit'],
                "numero_cuenta" => $data['nCuenta_edit'],
            );

            $suscripcion = array(

                "idClase" => $data['horario_edit'],
            );
          
            $pagos = array(

                "idClase" => $data['horario_edit'],
                "precio" => $precio

            );



            /* UPDATE `pagos` SET `precio`=20 
            WHERE `idCliente`= 41 */

            /*  $query = $this->db->query("
            UPDATE pagos 
            SET precio='$precio' 
            WHERE idCliente= $id"); */
        }




        $this->db->where("idCliente", $id);
        $this->db->update('clientes', $clientes);

        $this->db->where("idCliente", $id);
        $this->db->update('suscripcion', $suscripcion);

        $this->db->where("idCliente", $id);
        $this->db->update('pagos', $pagos);
    }
}
