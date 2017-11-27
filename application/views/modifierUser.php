
<?php include_once 'templates/header.php'; ?>
<?php include_once 'templates/navbar_admin.php'; ?> 
            
              <div class="col-md-11">
            
            <br><br>
               <div class="container" style="height: 100px; margin-bottom: 2%"> 
                   <div class="col-md-6">
                       
             <?php echo form_open("welcome/modifUser/{$utilisateurs->id}",['class'=>'form-horizontal'])?>
         
              <fieldset>
                <legend>Modification d'un utilisateur </legend>
                <div class="form-group">
                  <label class="control-label" for="inputSmall"></label>
                  <div class="col-lg-10">
                    <input class="form-control input-sm" id="inputSmall" placeholder="Nom" type="text" name="nom" required value="<?php echo $utilisateurs->nom?>">
                  </div>
                </div>
                  
                <div class="form-group">
                  <label class="control-label" for="inputSmall"></label>
                  <div class="col-lg-10">
                    <input class="form-control input-sm" id="inputSmall" placeholder="prenom" type="text" name="prenom" required value="<?php echo $utilisateurs->prenom?>">
                  </div>
                                       
                </div>
                   <div class="form-group">
                  <label class="control-label" for="inputSmall"></label>
                  <div class="col-lg-10">
                    <input class="form-control input-sm" id="inputSmall" placeholder="login" type="text" name="login" required value="<?php echo $utilisateurs->login?>">
                  </div>
                </div>
                  
                  <div class="form-group">
                      <label for="exampleSelect1">Rôle</label>
                      <select class="form-control" id="exampleSelect1" name="role">
                        <option></option>
                        <option>Administrateur</option>
                        <option>Utilisateur</option>
                        
                      </select>
                </div>
                
                       </fieldset>
             
                     <?php echo form_submit(['name'=>'sumbmit', 'value'=>'Envoyer','class'=>'btn btn-success']);?>
                    
                     <?php echo anchor(base_url(),'Retour', ['class'=>'btn btn-primary']); ?>



         <?php echo form_close()?>
                   </div>
                    
            </div>
          
            <script>
                    $( function() {
                    $( "#datepicker" ).datepicker();
                      $( "#datepicker" ).tooltip;
                    } );
            </script>
       <?php //include_once 'templates/footer.php'; ?>

