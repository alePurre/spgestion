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
      $this->load->view('vistas/usuario/header');
      $this->load->view('vistas/usuario/nuevo_pedido');
      $this->load->view('vistas/usuario/footer');
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
   
}