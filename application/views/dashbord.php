<!DOCTYPE HTML>
    <html>
        <head>
           <title>  Biens  </title>
            <meta name="viewport" content="width=device-width, initial-scale=1"> 
            <link rel="stylesheet" type="text/css" href=<?php echo base_url(); ?>assets/css/style.css>
            <link rel="stylesheet" type="text/css" href=<?php echo base_url(); ?>assets/css/bootstrap.css>
            <link rel="stylesheet" type="text/css" href="style.css"> 
           
        </head>
        <body>
                                
          <?php include_once'templates/navbar_admin.php'; ?>      
          <?php $user = $this->session->userdata('user');  
           $role= $user[0]->role;   ?>                            
        </body>
</html>



