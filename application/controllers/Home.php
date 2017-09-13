<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
 * Description of Home
 *
 * @author Ale
 */
class Home extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        //Carga el titulo correspondiente
        $this->data['title'] = $this->lang->line('title_home');
        
        $this->data['subView'] = 'index';        
        $this->load->view('front-end/components/plantilla', $this->data);
    }
}
