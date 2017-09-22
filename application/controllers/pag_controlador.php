<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 class pag_controlador extends CI_Controller {
  
  public function index()
  { $this->load->helper('url');
    /* Se cargan el modelo alumno y la libreria pagination */ 
    $this->load->model('pag_model');
    $this->load->library('pagination');
     /* URL a la que se desea agregar la paginación*/
    $config['base_url'] = base_url().'pag_controlador/';
  
    /*Obtiene el total de registros a paginar */
    $config['total_rows'] = $this->pag_model->get_total_productos();
      
    /*Obtiene el numero de registros a mostrar por pagina */
    $config['per_page'] = '1';
 
    /*Indica que segmento de la URL tiene la paginación, por default es 3*/
    $config['uri_segment'] = '2';
  
    /*Se personaliza la paginación para que se adapte a bootstrap*/
    $config['cur_tag_open'] = '<li class="active"><a href="#">';
    $config['cur_tag_close'] = '</a></li>';
    $config['num_tag_open'] = '<li>';
    $config['num_tag_close'] = '</li>';
    $config['last_link'] = FALSE;
    $config['first_link'] = FALSE;
    $config['next_link'] = '&raquo;';
    $config['next_tag_open'] = '<li>';
    $config['next_tag_close'] = '</li>';
    $config['prev_link'] = '&laquo;';
    $config['prev_tag_open'] = '<li>';
    $config['prev_tag_close'] = '</li>';
  
    /* Se inicializa la paginacion*/
    $this->pagination->initialize($config);
  
    /* Se obtienen los registros a mostrar*/
    $datos['productos'] = $this->pag_model->get_productos($config['per_page'], $config['uri_segment']);  
      
    /*Se llama a la vista para mostrar la información*/
    $this->load->view('vistas/usuario/header');
    $this->load->view('vistas/usuario/productoPag', $datos);
    $this->load->view('vistas/usuario/footer');
  }
}