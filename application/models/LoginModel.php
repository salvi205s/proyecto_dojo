<?php

class LoginModel extends CI_Model
{

    //funcion que hace una consulta para ver si el usuario y clave coinciden con los pasados por parametro
    public function loginUser($usuario, $clave)
    {

        $query = $this->db->query("SELECT * FROM clientes WHERE BINARY nombre = '$usuario' and clave='$clave'");

        return $query->result();
    }
}
