<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller 
{
    
    
     function __construct() 
     {
          parent::__construct();
          $this->load->model('queries');
          $this->load->model('modelUser');
          $this->load->library('csvimport'); 
          } 
    
    public function listeBiens()
          {
            /**$bien = 4;
              echo '<pre>';
              print_r($bien);
              print_r($biens);
              echo '</pre>';
              exit(); */  
            //$this->output->enable_profiler(true); 
            //exit();
              $this->load->model('queries');
              $biens = $this->queries->getBiens();
              
              $this->load->view('welcome_message',['biens'=>$biens]);
                    
          }
	public function index()
	{
	    //activation du profiler
       
        $this->load->view('connexion');

	}
    public function  ajout()
    {
        $this->load->view('createbien');
    }
    
    public function  modifier($id)
    {
         $this->load->model('queries');
         $biens = $this->queries->getSinglePost($id);
         $this->load->view('modifierbien',['biens'=>$biens]);
    }

    public function  save()
      {
	   /* $this->form_validation->set_rules('valbien','Valeur du bien','required');
        $this->form_validation->set_rules('durbien','La durée du bien','required');
        if ($this->form_validation->run()){ */
            $data = $this->input->post();

         $val = $data['valbiens'];
         $dure = $data['durbiens'];
         $taux = (1/$dure)*100;
         $valAmort = ($val * $taux/100);
         $vnc = $val - $valAmort;
        
             $date = date('Y-m-d');
             $data['date_ajout']= $date;
             $data['tauxAmort']= $taux;
             $data['valAmort']= $valAmort;
             $data['vnc']= $vnc;
            unset($data['sumbmit']);
            $this->load->model('queries');
            if($this->queries->addBien($data))
            {
                $this->session->set_flashdata('$msg','Enregistrement effectué avec succès');
            }else{
                $this->session->set_flashdata('$msg','Erreur d\'enregistrement');
            }
            return redirect('welcome');
       }
    
    public function modif($id)
    {
         $data = $this->input->post();
         $val = $data['valbiens'];
         $dure = $data['durbiens'];
         $taux = (1/$dure)*100;
         $valAmort = ($val * $taux/100);
         $vnc = $val - $valAmort;
         $date = date('Y-m-d');
         $data['date_ajout']= $date;
         $data['tauxAmort']= $taux;
         $data['valAmort']= $valAmort;
         $data['vnc']= $vnc;
         unset($data['sumbmit']);
          $this->load->model('queries');
         if($this->queries->updateBien($data,$id))
         {
                $this->session->set_flashdata('$msg','Enregistrement effectué avec succès');
         }else{
            $this->session->set_flashdata('$msg','Erreur d\'enregistrement');
         }
            return redirect('welcome'); 
        
    }
    
    public function supprimer($id){

        $this->load->model('queries');
       $this->queries->supBien($id);
         return redirect('welcome'); 
        
    }
    
    function clear()
    {
        $this->_field_data = array();
        return $this;
    }
    
    //Affichage des utilisateurs
    public function listUser()
    	{
	    $this->load->model('modelUser');
        $user = $this->modelUser->getUser();
        $this->load->view('listUser',['user'=>$user]);
        //print_r($user); die();

    	}
    
    //affichage du formulaire de saisie dun utilisateur
    
    public function  ajoutUser()
    {
        $this->load->view('adduser');
    }
    
    //Vérifier si l'utilisateur n'est pas déjà enregistré dans la base de données
    public function verifUser()
    {
        
            redirect('dashbord'); 
        }

    
    //enregistrement d'un utilisateur dans la base de données
    public function  saveUser()
    {
        //recuperation des données saisies
        
        $data = $this->input->post();
        //
         unset($data['sumbmit']);
         
         $login = $this->input->post('login');
         $result = $this->modelUser->verifUser($login);
         if(!empty($result))
         {
             $erreur ="Cet utilisateur existe déjà";
             $this->load->view('adduser',['erreur'=>$erreur]);
          
         }else
         {

        //chargement du model
        $this->load->model('modelUser');
        //crypt password
        //password_hash($password, PASSWORD_DEFAULT)
        $password = $this->input->post('lopassword');
        $mpc = password_hash($password, PASSWORD_DEFAULT);
        $data['password']= $mpc;
            if($this->modelUser->addUser($data))
            {
                $this->session->set_flashdata('$msg','Enregistrement effectué avec succès');
            }else{
                $this->session->set_flashdata('$msg','Erreur d\'enregistrement');
            }
            return redirect('welcome/listUser');
        }
    }
    
    
    public function  modifierUser($id)
    {
         $this->load->model('modelUser');
         $utilisateurs = $this->modelUser->readOneUser($id);
         $this->load->view('modifierUser',['utilisateurs'=>$utilisateurs]);
    }
    
    
    public function modifUser($id)
    {
         $data = $this->input->post();
            unset($data['sumbmit']);
            $this->load->model('modelUser');
            if($this->modelUser->updateUser($data,$id))
            {
                $this->session->set_flashdata('$msg','Enregistrement effectué avec succès');
            }else{
                $this->session->set_flashdata('$msg','Erreur d\'enregistrement');
            }
         $this->load->view('welcome/listUser');
          //  return redirect('welcome'); 
        
    }
    
    public function supprimerUser($id)
    {

        $this->load->model('modelUser');
       $this->modelUser->supUser($id);
       //  return redirect('welcome'); 
        
    }
        
    // Connexion
    
    public function  connexion()
    {
        
        $this->load->view('connexion');
    }
    
     public function  login()
     {
       $error =null;
        
        //Récupérer les données saisies envoyées en POST
        $login = $this->input->post('login');
        $password = $this->input->post('password');
        //crypter le password
        //md5($password);  
       /* $options = [
            'cost' => 11,
            'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM),
        ];
       $mpc = password_hash($password, PASSWORD_DEFAULT,$options); */
     //  $mpc = base_64_encode( $password);
     $mpc = md5($password);
        
        
       // $this->form_validation->set_rules('login', '"Login"', 'trim|required|xss_clean');
      //  $this->form_validation->set_rules('password', '"Mot de passe"', 'trim|required|xss_clean');
        $result = $this->modelUser->userLogin($login,$mpc);
      /*  print_r($result); die();
        if($this->form_validation->run() == false)
        {
           $this->load->view('connexion');
        }
        elseif($this->form_validation->run() == true && empty($result))
        {
            $this->session->set_flashdata('noconnect', 'Aucun compte ne correspond à vos identifiants ');
           // redirect('/login');
        }
        else
        {
            $this->session->set_userdata($result);
             print_r($result); die;

            //$this->session->set_userdata('id', $result[0]->id);
           redirect('welcome');          
        }*/
         if(!empty($result))
         {
             // echo $result[0]->nom; die;
            // echo $result['login']; die();
           $this->session->set_userdata('user',$result);
           $this->session->set_flashdata('success','welcome '.$result[0]->role.'!');
           //  print_r($result); die;

            //$this->session->set_userdata('id', $result[0]->id);
           redirect('dashbord'); 
         }else
         {
            $erreur ="Login ou mot de passe incorrect";
             $this->load->view('connexion',['erreur'=>$erreur]);
         }

    }
    
    public function logout()
     {
        $this->session->sess_destroy();
        redirect('connexion');
      }

    public function dashbord()
    {
        $this->load->view('dashbord');
    }

    //formulaire d'envoi,du nmail

    public function sendMail()
    {
        $this->load->view('sendMail');
    }

    // envoi du mail
     public function envoiMail()
     {
        $this->load->helper('email');
        $mail = $this->input->post('mail');
        $sujet = $this->input->post('sujet');
        $message = $this->input->post('message');
        if(valid_email($mail))
        {
                    $config = Array(
                        'protocol' => 'smtp',
                        'smtp_host' => 'smtp.googlemail.com',
                        'smtp_port' =>'587',
                        'smtp_user' => 'kkouassijacob@gmail.cm',
                        'smtp_pass' => 'STEINER225@',
                        'mailtype'  => 'html', 
                        'charset'   => 'utf-8'           
                    );
                
                //  echo $sujet." ".$message;
                // exit();
                    $this->load->library('email', $config);
                    $this->email->set_newline("\r\n");
                    $this->email->from('krakouassijacob@yahoo.fr', 'KRA');
                    $this->email->to('kkouassijacob@gmail.com');
                    $this->email->subject($sujet);
                    $this->email->message($message);
                    $this->email->send();
            if( $this->email->send())
            {
                    // mail transmis
                    echo "ok";
                }else{
                    // erreur de transmission
                    echo"erreur d'envoi";
                }
         
        }
        else{
          $erreur = "mail invalide";
          $this->load->view('sendmail',['erreur'=>$erreur]);
        }
        
     }   
                   public function import()
                   {
                 if(isset($_POST["import"]))
                  {
                      $filename=$_FILES["file"]["tmp_name"];
                      if($_FILES["file"]["size"] > 0)
                        {
                          try{
                            $file = fopen($filename, "r");
                           while (($importdata = fgetcsv($file, 10000, ",")) !== FALSE)
                           {
                                 $val = $importdata[0];
                                 $dure = $importdata[1];
                                 $taux = (1/$dure)*100;
                                 $valAmort = ($val * $taux/100);
                                 $vnc = $val - $valAmort;
                                 $date = date('Y-m-d');
                                 
                               $biens = array(
                                      'valbiens' => $importdata[0],
                                      'durbiens' =>$importdata[1],
                                      'tauxAmort'=> $taux,
                                      'valAmort'=>  $valAmort,
                                      'vnc'=>$vnc,
                                      'date_ajout'=>$date,
                                      );
                          if(!$insert = $this->queries->addBien($biens))
                          {
                              echo 'erreur';
                          }
                           }                    
                          fclose($file);
                          $this->session->set_flashdata('message', 'Importation effectuée avec success!!');
                          redirect('welcome');  
                          }catch(Exception $ex)
                          {
                             echo 'Exception reçue : ',  $ex->getMessage(), "\n";
                          }
                           
                        }else{
                         $this->session->set_flashdata('message', 'Fichier invalide');
                         redirect('welcome');
                    }
                  }
                }

              public function dowload()
              {
                $data = 'Here is some text!';
                $name = 'mytext.txt';
                force_download($name, $data);

              }


              public function testdatatable()
              {
                $this->load->view('testdatatable'); 
              }
          }


?>