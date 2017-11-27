<?php   

class ModelUser extends CI_Model{
    
    
     //Traitements relatifs aux utilisateurs addUser
    
    public function getUser(){
        $query = $this->db->get('user');
        if($query->num_rows() >0){
            return $query->result();
        }
    }
      // vérifer si l'utlisateur existe déjà

        public function verifUser($login) {
            
            $table = 'user';
            return $this->db->select('login')
                        ->from($table)
                        ->where('login', $login)
                        ->get()
                        ->result();
        }
      // Ajouter un utilisateur dans la base de données
        public function addUser($data){
          return  $this->db->insert('user', $data);
        }
        // Sélectionner un utilisateur dans la base de données
    public function readOneUser($id){
        $query = $this->db->get_where('user', array('id' => $id));
        if($query->num_rows() >0){
            return $query->row();
        }
    }
    // Modification d'un utilisateur dans la base de données
    public function updateUser($data,$id){
       return $this->db->where('id', $id)
                   ->Update('user',$data);
    }
    // Suppression d'un utilisateur de la base de données
    public function supUser($id){
    return  $this->db->delete('user',['id'=>$id]); 
    }
    
    // connexion      
    public function connexion($login,$password){
        $query = $this->db->get_where('user', array('login' => $login,'password' => $password));
        if($query->num_rows() >0){
            return $query->row();
        }
    }
       // 
        public function userLogin($login,$password) {
            
            $table = 'user';
            return $this->db->select('nom,prenom,login,password,role')
                        ->from($table)
                        ->where('login', $login)
                        ->where('password', $password)
                        ->get()
                        ->result();
        }

}



?>
