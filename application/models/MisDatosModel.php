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

    //funcion para obtener los datos de un cliente para mostrarlos en misDatos
    public function datosCliente($id)
    {

        return $this->db
            ->select("clases.horario,clases.idClase, pagos.estado")
            ->from("clases")
            ->join("pagos", "pagos.idClase = clases.idClase")
            ->where("pagos.idCliente=" . $id)
            ->get()
            ->result();
    }

    /* ------------------------------------------------------------------------------------ */

    //funcion que pone el estado en pagado, y la fecha fin a cero
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

    /* ------------------------------------------------------------------------------------ */

    //funcion que pone el estado en pendiente, e introduce una feha fin
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
