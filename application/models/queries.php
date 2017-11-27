<?php
class Queries extends CI_Model {
    
     function __construct() { 
          parent::__construct(); 
         
     }
    //Traitements relatifs aux biens
    public function getBiens(){
        $query = $this->db->get('biens');
        if($query->num_rows() >0){
            return $query->result();
        }
    }

        public function addBien($data){
          return  $this->db->insert('biens', $data);
        }
    public function getSinglePost($id){
        $query = $this->db->get_where('biens', array('id' => $id));
        if($query->num_rows() >0){
            return $query->row();
        }
    }
    
    public function updateBien($data,$id){
       return $this->db->where('id', $id)
                   ->Update('biens',$data);
    }
    
    public function supBien($id){
    return  $this->db->delete('biens',['id'=>$id]); 
    }
    
   
}

?>