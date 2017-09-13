<?php
//Controlardor de login
defined('BASEPATH') OR exit('No direct script access allowed');
class Php extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('usuarios_model');
    }
	
	
   function index()
   {
         
      if(!isset($_POST['maillogin'])){   //   Si no recibimos ningún valor proveniente del formulario, significa que el usuario recién ingresa.   
        
         //   Por lo tanto le presentamos la pantalla del formulario de ingreso. 
        $this->data['title'] = $this->lang->line('title_nosotros');
        $this->data['subView'] = 'login';
        $this->load->view('front-end/components/plantilla', $this->data);         
      }
      else{  //   Si el usuario ya pasó por la pantalla inicial y presionó el botón "Ingresar"
          
       
            $this->load->model('usuarios_model');
            $ExisteUsuarioyPassoword=$this->usuarios_model->ValidarUsuario($_POST['maillogin'],$_POST['passwordlogin']);   //   comprobamos que el usuario exista en la base de datos y la password ingresada sea correcta
            session_start(); 
            
                if($ExisteUsuarioyPassoword){   // La variable $ExisteUsuarioyPassoword recibe valor TRUE si el usuario existe y FALSE en caso que no. Este valor lo determina el modelo.
                    switch ($ExisteUsuarioyPassoword->idTipoUsuario){
			case '1':
                            $_SESSION['valor']= $ExisteUsuarioyPassoword->idTipoUsuario;
                            $ordenar_por="stock";
                            $data = array();
                            $this->load->model('stock_model');
                            $data['stock_controlador'] = $this->stock_model->obtener_todos($ordenar_por);
                            $this->load->view('vistas/header');
                            $this->load->view('vistas/index', $data);
                            /*
                            $this->load->view('front-end/Usuario/index', $data);
                            // $this->load->view('vistas/footer');


                            /*
                            $this->data['title'] = $this->lang->line('title_login');
                            $this->data['subView'] = '/Usuario/index';
                            $this->load->view('front-end/components/plantilla_usuario', $this->data);     
								*/
                                break;
			case '2':
                                $_SESSION['valor']= $ExisteUsuarioyPassoword->idTipoUsuario;
                                $this->data['title'] = $this->lang->line('title_login');
                                $this->data['subView'] = 'admin/Administrador';
                                $this->load->view('front-end/components/plantilla_administrador', $this->data);
                                break;
			case '3':
				$_SESSION['valor']= $ExisteUsuarioyPassoword->idTipoUsuario; 
                                $this->data['title'] = $this->lang->line('title_login');
                                $this->data['subView'] = 'secretaria/Secretaria';
                                $this->load->view('front-end/components/plantilla_secretaria', $this->data);      
				break;
                        default :
                                $this->data['title'] = $this->lang->line('title_nosotros');
                                $this->data['subView'] = 'login';     
                                $this->data['error'] = 'Usted esta registrado, pero no se le asigno privilegio'; //Lo regresamos a la pantalla de login y pasamos como parámetro el mensaje de error a presentar en pantalla
                                $this->load->view('front-end/components/plantilla', $this->data);
                                        
                    }
               
                }
                else{   //   Si no logró validar
                    $this->data['title'] = $this->lang->line('title_nosotros');
                    $this->data['subView'] = 'login';     
                    $this->data['error'] = 'E-mail o password incorrecta, por favor vuelva a intentar'; //Lo regresamos a la pantalla de login y pasamos como parámetro el mensaje de error a presentar en pantalla
                    $this->load->view('front-end/components/plantilla', $this->data);
                } 
              
            
         }
		 
      }
   }

?>

