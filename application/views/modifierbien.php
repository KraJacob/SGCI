
<?php include_once 'templates/header.php'; ?>
<?php include_once 'templates/navbar_admin.php'; ?> 
            <div class="container-fluid bg-info blochaut" style="height: 100px; margin-bottom: 2%"></div>
            <div class="container">


                 <?php echo form_open("welcome/modif/{$biens->id}",['class'=>'form-horizontal'])?>

                  <fieldset>
                    <legend>Enregistrement d'un bien</legend>
                                      <div class="form-group">
                      <label class="control-label" for="inputSmall"></label>
                      <div class="col-lg-10">
                     <input class="form-control input-sm"  placeholder="Valleur du bien" type="number" name="valbiens" value="<?php echo  $biens->valbiens; ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="inputSmall"></label>
                      <div class="col-lg-10">
                    <input class="form-control input-sm" id="inputSmall" placeholder="Durée du bien" type="number" name="durbiens" value="<?php echo  $biens->durbiens; ?>">
                      </div>
                    </div>

             

                         <?php echo form_submit(['name'=>'sumbmit', 'value'=>'Modifier','class'=>'btn btn-success']);?>

                         <?php echo form_reset(['name'=>'reset', 'value'=>'Annuler','class'=>'btn btn-warning']);?>
                         <?php echo anchor(base_url(), 'Retour', ['class'=>'btn btn-primary']); ?>



                </fieldset>
             <?php echo form_close()?>
         </div>
        

         <?php include_once 'templates/footer.php'; ?>
