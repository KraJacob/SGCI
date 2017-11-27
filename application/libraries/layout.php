<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 
class Layout
 { 

    private $CI; 

    private $output = '';

 /* |========================| Constructeur |======================================== */

  public function __construct() {  $this->CI = get_instance(); }

 /* |================================== | Méthodes pour charger les vues | . view |. views |============== */

  public function view($name, $data = array())
   { 

     }

  public function views($name, $data = array()) 
  {  

   } 
} 

/* End of file layout.php */ 