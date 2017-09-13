<?php
//Modelo de stock
class Stock_model extends CI_Model { 
   public function __construct() {
      parent::__construct();
   }
   public function guardar($detalle, $stock, $cantMax, $cantMin, $idProducto=null){
      $data = array(
         'detalle' => $detalle,
         'stock' => $stock,
         'cantMax' => $cantMax,
         'cantMin' => $cantMin
      );
	  // este if crea una condicion, si el id esta seteado hace un update, sino hace el insert
      if($idProducto){
         $this->db->where('idProducto', $idProducto);
         $this->db->update('productos', $data);
      }else{
         $this->db->insert('productos', $data);
      } 
   }
   public function eliminar($idProducto){
      $this->db->where('idProducto', $idProducto);
      $this->db->delete('productos');
   }
   public function obtener_por_id($idProducto){
      $this->db->select('idProducto, detalle, stock, cantMin, cantMax');
      $this->db->from('productos');
      $this->db->where('idProducto', $idProducto);
      $consulta = $this->db->get();
      $resultado = $consulta->row();
      return $resultado;
   }
   public function obtener_todos(){
	   
		//Consulta con SP
		/*
	   if($this->db->query("CALL stockTotal()"))
        {
            echo 'listo';
			$resultado = $this->db->query("CALL stockTotal()");
			//$resultado = call stockTotal();
			echo $resultado;
        }else{
            show_error('Error!');
		}
		*/
	   
      $this->db->select('idProducto, stock, detalle, cantMin, cantMax');
      $this->db->from('productos');
      $this->db->order_by('stock', 'asc');
      $consulta = $this->db->get();
      $resultado = $consulta->result();
      return $resultado;
	  
   }
	public function buscarProducto($detalle){
	  /*call myProcedure($detalle)*/
      $this->db->select('idProducto, detalle, stock, cantMin, cantMax');
      $this->db->from('productos');
      $this->db->like('detalle', $detalle);
      $consulta = $this->db->get();
      $resultado = $consulta->result();
      return $resultado;
   }
   
      
}