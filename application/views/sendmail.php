<?php include_once 'templates/header.php'; ?> 
        <?php include_once 'templates/navbar_admin.php'; ?>
        <?php $user = $this->session->userdata('user');  
           $role= $user[0]->role;   ?> 

<div class="col-md-11">
            
            <br><br>
               <div class="container" style="height: 100px; margin-bottom: 2%"> 
                   <div class="col-md-6">
                       
             <?php echo form_open('welcome/envoiMail',['class'=>'form-horizontal'])?>
         
              <fieldset>
                <legend>    envoyez nous un message</legend>
                <div class="form-group">
                <div class="col-lg-10">
                  <label class="control-label" for="inputSmall"></label>
                  <input class="form-control input-sm" id="inputSmall" placeholder="entrez votre mail ici" type="email" name="mail" required>
                  <?php if(isset($erreur)){?>
                          <p align="center" class="" style="color:red;">      
                            <?php echo $erreur ?>
                          </p>
                        <?php } ?>
                  </div>
                  <div class="col-lg-10">
                  <label class="control-label" for="inputSmall"></label>
                  <input class="form-control input-sm" id="inputSmall" placeholder="sujet" type="text" name="sujet" required>
                  </div>
                </div>
                  
                <div class="form-group">
                  <label class="control-label" for="inputSmall"></label>
                  <div class="col-lg-10">
                  <textarea name="message" id="" cols="30" rows="10" placeholder="message" require></textarea>
                </div>
                                       
                </div>
                <?php echo form_submit(['name'=>'sumbmit', 'value'=>'Envoyer','class'=>'btn btn-success']);?>
                    
                <?php echo form_reset(['name'=>'reset', 'value'=>'Annuler','class'=>'btn btn-warning']);?>
               