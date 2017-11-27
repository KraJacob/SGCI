<?php
class Forum extends CI_Controller {
    
    public function __construct(){
        //Obligatoire implementer le constructeur de la classe mère
        parent::__construct();
        
        //
        $this->titre_defaulr='Ma première application avec CodeIgniter';
        
      //  echo'Youpiiiiii!!!!!';
    }
    
    public function index(){
        $this->accueil();
    }
    public function accueil(){
        echo 'Wellcome sun';

    }
    
    public function bonjour($pseudo=''){
        echo'Bonjour tout le monde'.' '.$pseudo;
    }
    
    public function manger(){
        
        echo 'Bon appeti mes amis';
    }
    
    public function maintenance(){
        
        echo 'Site en maintenance ';
    }
    // faire une redirection interne et continue
   // public function _remap(){
        //$this-> maintenance();
      //  show_404();
   // }
}


?>