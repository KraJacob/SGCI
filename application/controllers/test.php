<?php   

class Test extends CI_Controller {
    
    public function __construct(){
        
        parent:: __construct();
        $this->load->helper('url');
    } 
    
    public function accueil(){
        $this->load->view('forms/test');
    }
}




?>