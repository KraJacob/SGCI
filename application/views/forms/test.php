
<DOCTYPE HTML>
    <html>
        <head>
           <title>  Biens  </title>
           <link rel="stylesheet" type="text/css" href=<?php echo base_url(); ?>assets/css/style.css>
              <link rel="stylesheet" type="text/css" href=<?php echo base_url(); ?>assets/css/bootstrap.css>
           <link rel="stylesheet" type="text/css" href="style.css">
            
        </head>
        <body>
            <div id="test"> TEST CSS</div>
         <div class="container bordureRouge" >
            
          <form action="" method="post">
              <table>
               <tr>
                  <td><label>Valeur du bien : </label></td> <td><input type="number" name="valbien"></td>
               </tr>
                <tr>
                  <td><label>Durée du bien : </label></td> <td><input type="number" name="durbien"></td>
               </tr>
                 <tr>
                  <td></td> <td><input type="submit" name="envoyer" value="Envoyer"></td>
               </tr>
                  
              </table>
            
             
          </form>  
            
            
        </div>
        
        
        
        
        
        </body>
      <!--  <h1> Test</h1>
        <a href="<?php /*echo site_url();*/ ?>"> accueil <a>
            <br>

            <a href="<?php /*echo site_url('test/accueil');*/ ?>">accueil</a> du test

            <br /> -->
    
    </html>