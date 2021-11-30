<?php

class LoginModel extends CI_Model
{
    private $table = "clientes";

    //funcion que hace una consulta para ver si el usuario y clave coinciden con los pasados por parametro
    public function loginUser($usuario, $clave)
    {

        /*   $this->db->select("*");
        $this->db->from($this->table);
        $this->db->where("BINARY nombre=", $usuario);
        $this->db->where("clave", $clave); */

        // $query = $this->db->select('*')->from($this->table)->where('BINARY nombre = $usuario and clave = $clave')->get();

        $query = $this->db->query("SELECT * FROM clientes WHERE BINARY nombre = '$usuario' and clave='$clave'");


        //  $query = $this->db->get();

       // print_r($this->db->last_query());
        
        return $query->result();
    }
}
