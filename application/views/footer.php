<nav class="navbar navbar-inverse">
<div class="container-fluid">
<div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">Dashbord</a>
</div>

<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
    <ul class="nav navbar-nav" style="font-size: 16px">
    <li class="active"><a href="<?php echo base_url(); ?>index.php/Welcome/ajout">Ajouter un bien<span class="sr-only">(current)</span></a></li>
    <li><a href="<?php echo base_url(); ?>index.php/Welcome/listeBiens">Liste des biens</a></li>
    <li class="active"><a href="<?php echo base_url(); ?>index.php/Welcome/ajoutUser">Ajouter un utilisateur<span class="sr-only">(current)</span></a></li>
    <li><a href="<?php echo base_url(); ?>index.php/Welcome/listUser">Liste des utilisateur</a></li>
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu">
        <li><a href="#">Action</a></li>
       
        </ul>
    </li>
    </ul>
     <ul class="nav navbar-nav navbar-right">
    <li><a href="#">Se déconnecter</a></li>
    </ul>
</div>
</div>
</nav>