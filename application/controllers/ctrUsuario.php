<?php

/* 
 *  Controlador de Usuario: realizarPedidos
 *
 */
if (!defined('BASEPATH'))
   exit('No direct script access allowed');

class ctrUsuario extends CI_Controller {
   public function __construct() {
      parent::__construct();
   }
   public function verPedidos() {
      $this->load->view('vistas/usuario/header');
      $this->load->view('vistas/usuario/pedidos_realizados');
      $this->load->view('vistas/usuario/footer');
   }
   
    public function nuevoPedido() {
      $ordenar_por="stock";
      $data = array();
      $this->load->model('stock_model');
      $data['stock_controlador'] = $this->stock_model->obtener_todos($ordenar_por);
      $this->load->view('vistas/usuario/header');
      $this->load->view('vistas/usuario/nuevo_pedido', $data);
      //$this->load->view('vistas/usuario/footer');
   }
   public function guardar_pedido_usuario($idProducto=null){
      if($this->input->post()){
         $detalle = $this->input->post('detalle');
         $stock = $this->input->post('stock');
         $cantMax = $this->input->post('cantMax');
         $cantMin = $this->input->post('cantMin');
         $this->load->model('stock_model');
         $this->stock_model->guardar($detalle, $stock, $cantMax, $cantMin, $idProducto);
         redirect('stock_controlador');
      }else{
         $this->guardar();
      } 
   }
   
     public function pedidosPendientes() {
      $this->load->view('vistas/usuario/header');
      $this->load->view('vistas/usuario/pedidos_pendientes');
      $this->load->view('vistas/usuario/footer');
   }
   
   public function pedidosRealizados(){
        $this->load->view('vistas/usuario/header');
        $this->load->view('vistas/usuario/pedidos_realizados');
         $this->load->view('vistas/usuario/footer');
      
   }
   
   public function pedidosRetirados(){
        $this->load->view('vistas/usuario/header');
        $this->load->view('vistas/usuario/pedidos_retirados');
         $this->load->view('vistas/usuario/footer');
      
   }
   
   public function buscar(){
    $nombre = $this->input->post('detalle','idProducto');
      $data = array();
      $this->load->model('stock_model');
      $data['stock_controlador'] = $this->stock_model->buscarProducto($nombre);
      $this->load->view('vistas/usuario/header');
      $this->load->view('vistas/usuario/nuevo_pedido', $data);
     // $this->load->view('vistas/usuario/footer');
   }
   
   
}