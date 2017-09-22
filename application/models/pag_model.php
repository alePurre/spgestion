<?php

class Pag_model extends CI_Model {
  function __construct()
  {
    parent::__construct();
  }
  
  function get_productos($porpagina,$segmento)
  {
      $this->db->select('idProducto, detalle, stock, cantMin, cantMax');
      $this->db->from('productos');
      $this->db->like('detalle', $detalle);
      $consulta = $this->db->get($porpagina,$segmento);
      $resultado = $consulta->result();
      return $resultado;
    /*
      $query = $this->db->get('productos',$porpagina,$segmento);
    if( $query->num_rows > 0 )
      return $query->result();   
  }
  else{
      return FALSE;
  }*/
 
  function get_total_productos(){
    return $this->db->count_all('productos');
  }
}
}