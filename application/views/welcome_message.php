
       <?php include_once 'templates/header.php'; ?> 
        <?php include_once 'templates/navbar_admin.php'; ?>
        <?php $user = $this->session->userdata('user');  
           $role= $user[0]->role;   ?>       
           <!-- <p>Date: <input type="text" id="datepicker" title="datapicker" data-placement="right"></p>
            <p>Date: <input type="date" id="datepicker"></p>
        <div class="container-fluid bg-info blochaut xls" style="height: 100px; margin-bottom: 2%"></div> -->
        <div class="col-md-11">
            
            
            <?php if($this->session->flashdata('success')){?>
              <div align="center" class="alert alert-success">      
                <?php echo $this->session->flashdata('success'); echo "Vous êtes : ".$this->session->userdata('role'); ?>
              </div>
            <?php } ?>

            <br><br>
               <!--<div class="container" style="height: 100px; margin-bottom: 2%">  -->
             
                    <div class="col-md-6">
                    <?php if($role=="Administrateur"){ ?>
                        <?php echo anchor('welcome/ajout','Ajouter un bien', ['class'=>'btn btn-primary glyphicon glyphicon-saved']); ?>
                    <?php } ?>
                    <div class="col-md-6">
                    <?php// if($role=="Administrateur"){ ?>
                        <?php echo anchor('welcome/sendMail','Mail', ['class'=>'btn btn-primary glyphicon glyphicon-saved']); ?>
                    <?//php } ?>
                    <?php echo anchor('welcome/testdatatable','Test', ['class'=>'btn btn-primary glyphicon glyphicon-saved']); ?>
                    <?php// if($role=="Administrateur"){ ?>
                        <?php echo anchor('welcome/dowload','dowload', ['class'=>'btn btn-primary glyphicon glyphicon-saved']); ?>
                    <?//php } ?>
                   </div>
                 <!--  <div class="col-md-6">
                        <form action="<?php //echo base_url(); ?>index.php/Welcome/import" 
                        method="post" name="upload_excel" enctype="multipart/form-data">
                        <input type="file" name="file" id="file" class="btn btn-default">
                        <button type="submit" id="submit" name="import" class="btn btn-default">Importer</button>
                        </form>
                   </div>   -->
                    
                 </div>
            <div class="">
              
                <table class="table table-striped table-hover " style="font-family: Arial; font-size:14;" id="book-table">
                    <thead>
                    <tr>

                        <th>VALEUR DU BIEN</th>
                        <th>DUREE D'UTILISATION</th>
                        <th>TAUX AMORTISSEMENT </th>
                        <th>VALEUR DE L'AMORTISSEMENT</th>
                        <th>VALEUR NETTE COMPTABLE </th>
                        <th>DATE D'ENREGISTREMENT</th>
                        <?php if($role=="Administrateur"){ ?> <th>TRAITEMENTS </th>     <?php } ?>
                    </tr>
                    </thead>
                    <tbody>
                        
                    <?php 
                        if(isset($biens))
                        if(count($biens)>0):  ?>
                        <?php foreach($biens as $bien): ?>
                    <tr style="" >
                        
                        <td> <?php 
                              $number = $bien->valbiens;
                              $nombre = number_format($number, 0, ',', ' ');
                            echo  $nombre." "."FCFA"; ?> </td>
                        <td><?php echo  $bien->durbiens ;?></td>
                        <td><?php 
                            $taux = (Double)$bien->tauxAmort ;
                            $nombre = number_format($taux, 2, ',', ' ');
                             echo  $nombre." "."%";
                            ?></td>
                        <td><?php

                            $valAmort =  $bien->valAmort; 
                             $nombre = number_format( $valAmort, 0, ',', ' ');
                             echo  $nombre." "."FCFA";
                            ?></td>
                        <td><?php 
                            $vnc =  $bien->vnc; 
                            $nombre = number_format( $valAmort, 0, ',', ' ');
                             echo  $nombre." "."FCFA";
                            ?>
                        </td>
                        <td>
                            <?php echo  $bien->date_ajout ;?>
                        </td>
                        <td> 
                        <?php if($role=="Administrateur"){ ?>
                           <?php echo anchor("welcome/modifier/{$bien->id}", 'Update', ['class'=>'label label-success ']); ?> 

                            <?php echo anchor("welcome/supprimer/{$bien->id}", 'Delete', ['class'=>'label label-danger'],array('class'=>'delete','onclick'=>'return confirm("Voulez vous vraiment supprimer ?")')); ?>
                        <?php } ?>
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
                                   //tri décroissant de la colonne 1 
                        "order": [[ 1, "desc" ]],  
                            dom: 'Bfrtip',
                        buttons: [
                            'copy', 'csv', 'excel', 'pdf', 'print'
                        ]  
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
         <?php //include_once 'templates/footer.php'; ?>


