<?php
    require 'alerta.php';
    require 'header.php';
?>


<div class="container-fluid col-md-12 justify-content-md-center mt-5">
    <div class="justify-content-md-center mt-5">
        <div class="row justify-content-md-center">
            <div class="servicos">
                <div class="row justify-content-md-center mt-4 p-5">
                            
                                            
                    <h1 style="font-size:5em;" class="text-danger text-center mb-5">ERRO 404</h1>
                    <h3 class="text-white mt-4">Seu caminho de URL te levou até qui, acreditamos que essa página não exista ainda em nossa plataforma! Por favor, 
                    Volte ao menu inicial para procurar novos destinos!</h3>
                    
                    <h6 class="text-white mb-5"> Abaixou estaremos disponibilizando um <span class="text-orange">link</span> de redirecionamento</h6>
                    <button onClick="javascript:history.back()" class="btn btn-orange" style="font-size:2em;">
                        Voltar para a página anterior
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
    require "hospitaid.php";
    require "servicos.php";
    require "desenvolvedores.php";
    require "quemsomos.php";
    require "etapas.php";
    require "contato.php";
    require "clientes.php";
    require "duvidas.php";
    require "footer.php";    
    require 'js.php';
?>
