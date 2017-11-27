<DOCTYPE HTML>
    <html>
        <head>
            <title>  Biens  </title>
            <meta name="viewport" content="width=device-width, initial-scale=1"> 
             <!--  cdn pour integrer jquery dans notre appli  -->
            <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
            <!--  cdn pour integrer datatable dans notre appli  -->
            <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.css"/>
            <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.js"></script> 
             <!--  ajouter bootstrap avant le script  -->
            <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
            <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap.min.css" />
             <!--  Ajout du script -->
           <script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>
            <link rel="stylesheet" type="text/css" href=<?php echo base_url(); ?>assets/css/style.css>
            <link rel="stylesheet" type="text/css" href=<?php echo base_url(); ?>assets/css/bootstrap.css>
            <link rel="stylesheet" type="text/css" href="style.css"> 
           <!-- jquery-ui  -->
            
             <link rel="stylesheet" href=<?php echo base_url(); ?>assets/jquery-ui-1.12.1/jquery-ui.css>
             <link rel="stylesheet" href="/resources/demos/style.css">
             <script src="<?php echo base_url(); ?>assets/jquery-ui-1.12.1/jquery-1.12.4.js"></script>
             <script src="<?php echo base_url(); ?>assets/jquery-ui-1.12.1/jquery-ui.js"></script>

        </head>
        <body>
            
        <div class="container-fluid bg-info blochaut xls" style="height: 100px; margin-bottom: 2%"></div>

        <div class="col-md-2 btn-default"> </div>
        
        <div class="col-md-8 btn-default">
            
            <br><br>
              
                   <div class="col-md-6" style="margin-left:25%; border:1px solide;">
                       
             <?php echo form_open('welcome/login',['class'=>'form-horizontal'])?>
         
              <fieldset>
                <legend>Connexion </legend>
                <div class="form-group" style="border:1px solide black;">
                 
                  <div class="col-lg-10"> 
                  <label class="control-label" for="login"></label>
                    <input class="form-control input-sm" id="login" placeholder="login" type="text" name="login" required>
                    <label class="control-label" for="password"></label>
                    <input class="form-control input-sm" id="password" placeholder="mot de passe" type="password" name="password" required>
                  </div>
                </div>
                <?php echo form_submit(['name'=>'sumbmit', 'value'=>'Se connecter','class'=>'btn btn-success']);?>
                    
                     <?php echo form_reset(['name'=>'reset', 'value'=>'Annuler','class'=>'btn btn-warning']);?>
                                 
                       </fieldset>
             
                   
         <?php echo form_close()?>
                       
                        <?php if(isset($erreur)){?>
                          <div align="center" class="alert alert-warning">      
                            <?php echo $erreur ?>
                          </div>
                        <?php } ?>
                      
            </div>
            <div class="col-md-2 btn-default"></div>
          
        </body>
    </html>


