<!DOCTYPE html> 
<html lang="en"> 
    <head> <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content=""> <meta name="author" content="FaberNainggolan"> 
        <title><?php  echo $title; ?></title> 
        <!-- Bootstrap core CSS --> 
        <link href="<?php echo base_url()?>Asset/Css/bootstrap.css" rel="stylesheet"> 
        <!-- Custom styles for this template --> 
        <link href="<?php echo base_url()?>Asset/Css/top-fixed-navbar.css" rel="stylesheet"> 
    </head> 

    <body>
        
        <!-- Static navbar --> 
        <nav class="navbar navbar-default navbar-fixed-top"> 
            <div class="container">
                <div class="navbar-header"> 
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                    </span> <span class="icon-bar"></span> 
                <span class="icon-bar"></span> 
            </button>
                    <a class="navbar-brand" href="<?php echo base_url(); ?>">CI-Bootstrap</a> 
        </div> 
        <div id="navbar" class="navbar-collapse collapse"> 
            <ul class="nav navbar-nav"> 
                <li class="active"><a href="<?php echo base_url() ?>"><i class="glyphicon glyphicon-dashboard"></i> Dasboard</a></li> 
                <li><a href="<?php echo base_url() ?>barang"><i class="glyphicon glyphicon-gift"></i> Barang</a></li>
                <li><a href="<?php echo base_url() ?>member"><i class="glyphicon glyphicon-picture"></i> Member</a></li>
                <li><a href="#contact"><i class="glyphicon glyphicon-user"></i> User</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a> <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li> 
                        <li><a href="#">Something else here</a></li> 
                        <li class="divider"></li>
                        <li class="dropdown-header">Nav header</li> 
                        <li><a href="#">Separated link</a></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul> 
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="../navbar/">Default</a></li> 
                <li class="active"><a href="./">Static top <span class="sr-only">(current)</span></a></li>
                <li><a href="../navbar-fixed-top/">Fixed top</a></li> 
            </ul> 
        </div>
        <!--/.nav-collapse --> 
    </div> 
</nav> 