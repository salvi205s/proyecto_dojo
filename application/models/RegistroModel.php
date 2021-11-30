<?php

class RegistroModel extends CI_Model
{
    private $table = "clientes";

    //funcion que recibe un array y los inserta en la base de datos
    function insertUser($data)
    {
        $array = array(

            "nombre" => $data['nombre'],
            "DNI" => $data['DNI'], //hacer funcion que extraiga los dni y lo compare con el introducido,
            // si se repite da error
            "clave" => md5($data['clave']),
            "email" => $data['email'],
            "edad" => $data['edadR'],
            "nunCuenta" => $data['nCuenta'],
        );

        //guardamos en la base de datos el array
        $this->db->insert($this->table, $array);
    }

    //funcion que recibe un array y los inserta en la base de datos
    function insertUser2($id, $horarioR)
    {
               
        $date = date("Y-m-d");
        $query = $this->db->query("INSERT INTO `suscripcion` (`fechaInicio`, `fechaFin`, `idCliente`, `idClase`) 
        VALUES ('" . $date . "', '', '$id', " . $horarioR. "); ");

        $this->db->select('clases' . '.precio');

        $this->db->from('clases');

        $this->db->join('suscripcion', 'suscripcion' . '.idClase =' . 'clases' . '.idClase');
        $this->db->where('suscripcion' . '.idCliente', $id);

        $query = $this->db->get();

        $query = $query->result();

        $precio = $query[0]->precio;

      /*   $query = $this->db->query("INSERT INTO `pagos` (`idCliente`, `idClase`, `precio`, `estado`) 
        VALUES ('$id','".$horarioR."','','Pendiente'); "); */

       

        $query = $this->db->query("INSERT INTO `pagos` (`idCliente`, `idClase`, `precio`, `estado`) 
        VALUES ('$id', '".$horarioR."','$precio','Pendiente'); ");
    }

    /* -------------------------------------------------------------------------- */
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
