<?php
 class Biens extends CI_Controllers {
     
     public function accueil(){
         
         // Chargement du modèle biens 
         // on le renomme "biens"
         $this->load->model('biens_model','biens'); 
     }
     
      protected $table = 'biens';
  /**
  * Enregistrement d'un bien 
  *
  */
     
     public function ajouter_biens($valbien,$durebien) { 
          
          $tauxAmort = (1/$durebien)*100;
          $valMort = $valbien*$tauxAmort;
          $vnc    =  $valbien-$valMort;
          $this->db->set('valbiens ', $valbien);  
          $this->db->set('durbiens ', $durebien); 
          $this->db->set('tauxAmort', $tauxAmort);
          $this->db->set('valAmort ', $durebien);
          $this->db->set('vnc  ', $valbien);
          $this->db->set('date_ajout', 'NOW()', false); 
         
         //insertion des données dans la base
          return $this->db->insert($this->biens); 
     
     }
  /** 
  * Éditer un bien 
  *
  */
      public function editer_biens() {  
      
      }
  /**
  * Suppression de bien 
  */
     
     
     public function supprimer_biens() { 
     
     }
     
  /** 
  * le nombre de bien 
  */ 
     public function count() {  
     
     }
  /** 
  * Liste de biens 
  */ 
     public function liste_biens() { 
     
     } 

 }

?>