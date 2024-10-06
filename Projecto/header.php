<?php
$servidor = "localhost";
$userBaseDados = "projecto";
$passwordBaseDados = "teste123";
$baseDados = "projecto";
 
$ligacaoBD = mysqli_connect($servidor, $userBaseDados, $passwordBaseDados, $baseDados)
    or die("Erro de acesso à Base de Dados.");
 
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A. Duarte</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"/>

    <script src="app.js"></script>
   
    
    <link rel="stylesheet" href="estilos.css">
    
</head>
<body>
    <header class="container d-none d-md-block">
        <div class="row">
            <div id="logo" class="col-3 bg-pink">
                <img src="img/logo5.png" alt="A. Duarte" class="img-fluid">
            </div>
            <div id="banner" class="col ">
            <h4>Gabinete de Estética</h4>    
            </div>
        </div>
    </header>

    <?php
    $pagina = str_replace(".php", "", basename($_SERVER['PHP_SELF']));

    ?>
    
    <nav class="navbar navbar-expand-md">
        <div class="container">
          <a class="navbar-brand d-md-none" href="index.php">
            <img src="img/logo5.png" alt="A. Duarte"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
              <li class="nav-item">
                <a class="nav-link <?= ($pagina == "index")? "active" : ""?>" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?= ($pagina == "quemsomos")? "active" : ""?>" href="quemsomos.php">Quem Somos</a>
              </li> 
              <li class="nav-item">
                <a class="nav-link <?= ($pagina == "portfolio")? "active" : ""?>" href="portfolio.php">Portfólio</a>
              </li> 
              <li class="nav-item">
                <a class="nav-link <?= ($pagina == "servicos")? "active" : ""?>" href="servicos.php">Serviços</a>
              </li> 
              <li class="nav-item">
                <a class="nav-link <?= ($pagina == "contactos")? "active" : ""?>" href="contactos.php">Contactos</a>
              </li> 
              <li class="nav-item" id="area">
                <a class="nav-link <?= ($pagina == "areadocliente")? "active" : ""?>" href="login.php">Login</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>