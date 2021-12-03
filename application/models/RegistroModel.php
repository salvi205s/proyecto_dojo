<?php

class RegistroModel extends CI_Model
{
    private $table = "clientes";

    //funcion que recibe los datos del formulario registro y los inserta en la tabla clientes
    function insertUser($data)
    {
        $array = array(

            "nombre" => $data['nombre'],
            "DNI" => $data['DNI'],
            "clave" => md5($data['clave']),
            "email" => $data['email'],
            "edad" => $data['edadR'],
            "nunCuenta" => $data['nCuenta'],
        );

        //guardamos en la base de datos el array
        $this->db->insert($this->table, $array);
    }

    /* -------------------------------------------------------------------------- */

    //funcion que recibe los datos del formulario registro y los inserta en las tablas suscripcion y pagos
    function insertUser2($id, $horarioR)
    {

        $date = date("Y-m-d");
        $query = $this->db->query("INSERT INTO `suscripcion` (`fechaInicio`, `fechaFin`, `idCliente`, `idClase`) 
        VALUES ('" . $date . "', '', '$id', " . $horarioR . "); ");

        //obtenemos el precio de la clase seleccionada del cliente
        $this->db->select('clases' . '.precio');
        $this->db->from('clases');
        $this->db->join('suscripcion', 'suscripcion' . '.idClase =' . 'clases' . '.idClase');
        $this->db->where('suscripcion' . '.idCliente', $id);

        $query = $this->db->get();

        $query = $query->result();

        $precio = $query[0]->precio;

        $query = $this->db->query("INSERT INTO `pagos` (`idCliente`, `idClase`, `precio`, `estado`) 
        VALUES ('$id', '" . $horarioR . "','$precio','Pendiente'); ");
    }

    /* -------------------------------------------------------------------------- */

    //funcion para controlar que un DNI no se repita
    function dniRepetido($dni)
    {

        $this->db->select("DNI");
        $this->db->from($this->table);
        $this->db->where("DNI", $dni);

        $query = $this->db->get();

        //print_r($this->db->last_query());

        if ($query->result()) {
            return true;
        } else {
            return false;
        }
    }
}
