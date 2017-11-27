<?php class News extends CI_Controller{
    
    public function __construct(){
        parent:: __construct();
    }
    public function bjr(){
        
        echo'Salut';
    }
    
    public function eat(){
        echo'Come to eat brother';
    }
    
    public function accueil(){
        $data =array();
        $data['pseudo']="Steiner";
        $data['mail']="Steiner@yahoo.fr";
        $data['en_ligne']=false;
        $this->load->view('news/entete');
        // affectation de variable à la vue
        $this->load->view('news/vue',$data);
    }
    
    public function index(){
        $this->accueil();
    }
    
    
} 