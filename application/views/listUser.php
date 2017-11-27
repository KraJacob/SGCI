<?php include_once 'templates/header.php'; ?>
<?php include_once 'templates/navbar_admin.php'; ?> 
            
        <div class="col-md-11">
            
            
            <?php if($this->session->flashdata('message')){?>
              <div align="center" class="alert alert-success">      
                <?php echo $this->session->flashdata('message')?>
              </div>
            <?php } ?>

            <br><br>
               <div class="container" style="height: 100px; margin-bottom: 2%"> 
                    <div class="col-md-6">
                        <?php echo anchor('welcome/ajoutUser','Ajouter un utilisateur', ['class'=>'btn btn-primary glyphicon glyphicon-saved']); ?>
                   </div>
                 
                 </div>
            <div class="">
              
                <table class="table table-striped table-hover " style="font-family: Arial; font-size:14;" id="book-table">
                    <thead>
                    <tr>

                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Login</th>
                        <th>Rôless</th>
                        <th>Taitements</th>
                        
                    </tr>
                    </thead>
                    <tbody>
                      
                    <?php 
                        if(isset($user))
                       if(count($user)>0):  ?>
                        <?php foreach($user as $utilisateurs): ?>
                    <tr style="" >
                        <?php //print_r($utilisateurs); ?>
                        <td><?php echo $utilisateurs->nom." ".$utilisateurs->nom; ?> </td>
                        <td><?php echo  $utilisateurs->prenom; ?></td>
                        <td><?php echo  $utilisateurs->login; ?></td>
                        <td><?php echo  $utilisateurs->role; ?></td>
                        <td> 
                           <?php echo anchor("welcome/modifierUser/{$utilisateurs->id}", 'Updat', ['class'=>'label label-success ']); ?> 

                            <?php echo anchor("welcome/supprimerUser/{$utilisateurs->id}", 'Delete', ['class'=>'label label-danger'],array('class'=>'delete','onclick'=>'return confirm("Voulez vous vraiment supprimer ?")')); ?>
                        </td>
                    </tr>
                    <?php endforeach;  ?>
                    <?php else:   ?>
                    <tr> <td rowspan="7"> PAS DE DONNEES A AFFICHER </td></tr>
                    <?php endif;   ?>
                    </tbody>
                </table>
             </div>
            </div>
          <script language="JavaScript">
                function sure(){
                       return(confirm('Etes-vous sûr de vouloir supprimer cette news ?'));
                }
           
          </script>
           
            <script type="text/javascript">
	         $(document).ready(function() {
	         	//créer une instance de la datatable pour notre tableau
	         $('#book-table').DataTable(
                               {
                        "language": {
                            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
                        }
                    }
             
             );
                 
                 
	         });
                   
        </script>
            <script>
                    $( function() {
                    $( "#datepicker" ).datepicker();
                      $( "#datepicker" ).tooltip;
                    } );
            </script>
       <?php///include_once 'templates/footer.php'; ?>


