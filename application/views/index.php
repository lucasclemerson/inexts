<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>INEXTS | Desenvolvimento e inovação</title>
	<link rel="shortcut icon" href="<?=base_url()?>favicon.ico">
	<meta name="author" content="INEXTS">
	<meta name="description" content="Atlantic App initial-scale online messages">
	<meta name="keywords" content="Administrativo, Gerenciador">
	<meta http-equiv="cache-control" content="no-cache" />
	<meta http-equiv="content-language" content="pt-br"/>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<meta name="copyright" content="Todos os direitos reservados" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="<?=base_url()?>style/style.css" rel="stylesheet">	
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <?php require 'componentes/alerta.php'; ?>
    <?php require 'componentes/header.php'; ?>
    <div class="container-fluid p-0">
        <div class="justify-content-md-center">
            <div class="col-md-12 mt-5">
                <?php require "componentes/carousel.php";?>
            </div>
        </div>    
    </div>

   
    <div class="container-xxl col-12 justify-content-md-center">
        <div class="justify-content-md-center">
            <div class="row justify-content-md-center">
                <?php
    		        require "componentes/servicos.php";
    		        require "componentes/hospitaid.php";
                ?>
            </div>
        </div>    
    </div>
   
    <div class="container-fluid p-0">
        <div class="justify-content-md-center">
            <div class="col-md-12">
                <?php require "componentes/desenvolvedores.php";?>
            </div>
        </div>    
    </div>
   
    <div class="container-fluid col-12 justify-content-md-center">
        <div class="justify-content-md-center">
            <div class="row justify-content-md-center">
                <?php
                    require "componentes/quemsomos.php";
                    require "componentes/etapas.php";
                    require "componentes/contato.php";
                ?>
            </div>
        </div>    
    </div>
    
    <div class="container-fluid p-0">
        <div class="justify-content-md-center">
            <div class="col-md-12">
                <?php require "componentes/clientes.php";?>
            </div>
        </div>    
    </div>
   
    <div class="container-fluid col-12 mt-5">
        <div class="row justify-content-md-center">
            <?php require "componentes/duvidas.php";?>
            <div class="col-md-12">
              <?php require "componentes/footer.php";?>    
            </div>
        </div>    
    </div>
</body>
</html>