<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport">
    <link rel="shortcut icon" href="" />
    <title>Mi aplicación</title>
    
   
</head>
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="public/css/main.css">
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="public/js/main.js"></script>
<?php
    foreach($this->js as $js){
        echo "<script src='".URL.'views/'.$js."'></script>";
    }
?>
<style>
    .dashboard-content{
        background-color: #F6FAF9;
    }
</style>
<body>
<div class='dashboard dashboard-compact'>
    <div class="dashboard-nav">

        <header>
            <a class="menu-toggle" id="desplegar" style="color:white; cursor:pointer"> <i class="fas fa-bars"></i></a>
            <a href="#"class="brand-logo"> <span> Mi aplicación</span></a>
            
        </header>
        
            <nav class="dashboard-nav-list">
            <a href="<?=URL?>" class="dashboard-nav-item " id="home"><span><i class="fas fa-home"></i> Inicio</span></a>
            <div class='dashboard-nav-dropdown' >
                <a href="#" id="usuarios" class="dashboard-nav-item dashboard-nav-dropdown-toggle"><span><i class="fas fa-users"> </i>  Usuarios </span></a>
                <div class='dashboard-nav-dropdown-menu' >
                    <a href="users" class="dashboard-nav-dropdown-item" id="option7">Administradores</a>
                    <a href="#" class="dashboard-nav-dropdown-item" id="padronUsuarios">Clientes</a>
                </div>
            </div>
        
            <div class="nav-item-divider">

            </div>
          <a href="Server/Cerrar_Sesion.php" class="dashboard-nav-item" id="option21"><span><i class="fas fa-sign-out-alt"> </i> Cerrar sesión</span> </a>
        </nav>
    </div>
    <div class='dashboard-app'>
        <header class='dashboard-toolbar'>
            <a href="#" class="menu-toggle " id="toglee"> <i class="fas fa-bars"></i></a>
            
            <div class="section">
               
            </div>
        </header>
        <div class="status_sesion">
            <a href="#" class="info-sesion"> <span><?= empty($_SESSION['name']) ? '' : $_SESSION['name']   ?></span> </a>
            <a href="#" class ="info-sesion2"> <span> <i class=" fa-solid fa-circle-user fa-2x"></i></span></a>
        </div>
            
      
    </div>
   
</div>
<div class='dashboard-content'>