<?php
/**
 *Plantilla para llamar a la vista correspondiente
 */
$this->load->view('front-end/components/page_header');
$this->load->view('front-end/'.$subView);
$this->load->view('front-end/components/page_footer');

