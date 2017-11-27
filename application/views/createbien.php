<?php include_once 'templates/header.php'; ?>
<?php include_once 'templates/navbar_admin.php'; ?> 
   
     <div class="container">


             <?php echo form_open('welcome/save',['class'=>'form-horizontal'])?>
         
              <fieldset>
                <legend>Enregistrement d'un bien</legend>
                <div class="form-group">
                  <label class="control-label" for="inputSmall"></label>
                  <div class="col-lg-10">
                    <input class="form-control input-sm" id="inputSmall" placeholder="Valleur du bien" type="number" name="valbiens" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label" for="inputSmall"></label>
                  <div class="col-lg-10">
                    <input class="form-control input-sm" id="inputSmall" placeholder="Durée du bien" type="number" name="durbiens" required>
                  </div>
                </div>
            <fieldset>
             
                     <?php echo form_submit(['name'=>'sumbmit', 'value'=>'Envoyer','class'=>'btn btn-success']);?>
                    
                     <?php echo form_reset(['name'=>'reset', 'value'=>'Annuler','class'=>'btn btn-warning']);?>
                     <?php echo anchor(base_url(),'Retour', ['class'=>'btn btn-primary']); ?>



         <?php echo form_close()?>
     </div>

     <?php //include_once 'templates/footer.php'; ?>
      