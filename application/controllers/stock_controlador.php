<?php
//Controlador de stock
if (!defined('BASEPATH'))
   exit('No direct script access allowed');
class stock_controlador extends CI_Controller {
   public function __construct() {
      parent::__construct();
   }
   public function index() {
	  $ordenar_por="stock";
      $data = array();
      $this->load->model('stock_model');
      $data['stock_controlador'] = $this->stock_model->obtener_todos($ordenar_por);
      $this->load->view('vistas/header');
      $this->load->view('vistas/index', $data);
      $this->load->view('vistas/footer');
   }
   public function ver($idProducto){
      $data = array();
      $this->load->model('stock_model');
      $detalle = $this->stock_model->obtener_por_id($idProducto);
      $data['detalle'] = $detalle;
      $this->load->view('vistas/header');
      $this->load->view('vistas/ver', $data);
      $this->load->view('vistas/footer');
   }
   public function guardar($idProducto=null){
      $data = array(); 
      $this->load->model('stock_model');
      if($idProducto){
         $detalle = $this->stock_model->obtener_por_id($idProducto); 
         $data['idProducto'] = $detalle->idProducto;
         $data['detalle'] = $detalle->detalle;
         $data['stock'] = $detalle->stock;
         $data['cantMax'] = $detalle->cantMax;
         $data['cantMin'] = $detalle->cantMin;
      }else{
         $data['idProducto'] = null;
         $data['detalle'] = null;
         $data['stock'] = null;
         $data['cantMax'] = null;
         $data['cantMin'] = null;
      }
      $this->load->view('vistas/header');
      $this->load->view('vistas/guardar', $data);
      $this->load->view('vistas/footer');
   }
   public function guardar_post($idProducto=null){
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
   public function eliminar($idProducto){
      $this->load->model('stock_model');
      $this->stock_model->eliminar($idProducto);
      redirect('stock_controlador');
   }
   /*
    public function buscar($detalle){
      $data = array();
      $this->load->model('stock_model');
      $detalle = $this->stock_model->buscarProducto($detalle);
      $data['detalle'] = $detalle;
      $this->load->view('vistas/header');
      $this->load->view('vistas/index', $data);
      $this->load->view('vistas/footer');
   }
   */
   
   public function buscar(){
	  $nombre = $this->input->post('detalle','idProducto');
      $data = array();
      $this->load->model('stock_model');
      $data['stock_controlador'] = $this->stock_model->buscarProducto($nombre);
      $this->load->view('vistas/header');
      $this->load->view('vistas/index', $data);
      $this->load->view('vistas/footer');
   }
   
	/*
     public function index() {
	  $ordenar_por="stock";
      $data = array();
      $this->load->model('stock_model');
      $data['stock_controlador'] = $this->stock_model->obtener_todos($ordenar_por);
      $this->load->view('vistas/header');
      $this->load->view('vistas/index', $data);
      $this->load->view('vistas/footer');
   }
   */
}