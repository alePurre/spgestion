<?php
// Modelo para abrir pagina usuario

class Usuario_model extends CI_Model{
   public function __construct() {
      parent::__construct();
   }
   public function guardar_pedido_usuario($obra, $descripcion, $fechaEmision, $idEstadoPedido, $idUsuarioCrea, $idUsuarioEntrega, $fechaEntrega, $idPedidoDeposito=null){
      $data = array(
         'obra' => $obra,
         'descripcion' => $descripcion,
         'fechaEmision' => $fechaEmision,
         'idEstadoPedido' => $idEstadoPedido,
         'idUsuarioCrea' => $idUsuarioCrea,
         'idUsuarioEntrega' => $idUsuarioEntrega,
         'fechaEntrega' => $fechaEntrega
      );
	  // este if crea una condicion, si el id esta seteado hace un update, sino hace el insert
      if($idPedidoDeposito){
         $this->db->where('idPedidoDeposito', $idPedidoDeposito);
         $this->db->update('PedidosDeposito', $data);
      }else{
         $this->db->insert('PedidosDeposito', $data);
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