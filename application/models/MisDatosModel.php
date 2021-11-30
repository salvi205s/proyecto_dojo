<?php

class MisDatosModel extends CI_Model
{
    private $table = "clientes";

    //funcion que hace una consulta para listar todos los usuarios
    public function listar($id)
    {

        $this->db->select("*");
        $this->db->from($this->table);
        $this->db->where("idCliente=" . $id);

        $query = $this->db->get();

        return $query->result_array();
    }

    /* ------------------------------------------------------------------------------------ */
    public function datosCliente($id)
    {

        /* SELECT clases.horario, pagos.estado FROM clases JOIN pagos ON pagos.idClase=clases.idClase WHERE pagos.idCliente=3 */
        /* SELECT clases.horario, pagos.estado FROM clases JOIN pagos ON pagos.idClase=clases.idClase WHERE pagos.idCliente = '3' */


        return $this->db
            ->select("clases.horario,clases.idClase, pagos.estado") # También puedes poner * si quieres seleccionar todo
            ->from("clases")
            ->join("pagos", "pagos.idClase = clases.idClase")
            ->where("pagos.idCliente=" . $id)
            ->get()
            ->result();
    }

    public function pagar($id)
    {

        $pagos = array(

            "estado" => 'Pagado'

        );

        $this->db->where("idCliente", $id);
        $this->db->update('pagos', $pagos);

        $suscripcion = array(

            "fechaFin" =>  '0000-00-00'

        );

        $this->db->where("idCliente", $id);
        $this->db->update('suscripcion', $suscripcion);


    }

    
    public function darBaja($id)
    {

        $pagos = array(

            "estado" => 'Pendiente'

        );

        $this->db->where("idCliente", $id);
        $this->db->update('pagos', $pagos);


        $date = date("Y-m-d");
        $suscripcion = array(

            "fechaFin" =>  $date

        );

        $this->db->where("idCliente", $id);
        $this->db->update('suscripcion', $suscripcion);


    }


    /* --------------------------------------------------------------------------------------------- */
}
