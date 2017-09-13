<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Description of Frontend_Controller
 *
 * @author GonzaH
 */
class Frontend_Controller extends MY_Controller {
    public function __construct() {
        parent::__construct();
        
        $this->data['uri_seccion'] = $this->uri->segment(1);
    }
}
