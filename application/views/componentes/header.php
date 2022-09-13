<nav class="navbar navbar-expand-lg bg-default position-fixed top-0 navegation-header col-12 p-0 m-0">
    <a class="navbar-brand ms-2 me-2" href="<?=base_url()?>">
        <img class="float-start" height="50" width="60" src="<?=base_url()?>uploads/logo-header.png" alt="logomarca">
    </a>
    
    <button class="navbar-toggler border-light me-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <i class="bi bi-list text-white" style="font-size:24px;"></i>
    </button>
    
    <div class="collapse navbar-collapse justify-content-md-center text-center" id="navbarNavDropdown">
        <ul class="navbar-nav">
            
            <li class="nav-item m-1 ">
                <a href="#home" class="nav-link" onClick="buscarSessionScroool('home')">
                   <i class="bi bi-house"></i>
                   <span>Home</span>
                </a>
            </li>  
            <li class="nav-item m-1 ">
                <a href="#vantagens" class="nav-link" onClick="buscarSessionScroool('vantagens')">
                   <i class="bi bi-card-list"></i>
                   <span>Porquê a Inexts</span>
                </a>
            </li> 
            <li class="nav-item m-1 ">
                <a href="#quemsomos" class="nav-link" onClick="buscarSessionScroool('quemsomos')">
                   <i class="bi bi-info"></i>
                   <span>Quem somos</span>
                </a>
            </li> 
            <li class="nav-item m-1 ">
                <a href="#desenvolvedores" class="nav-link" onClick="buscarSessionScroool('desenvolvedores')">
                   <i class="bi bi-people"></i>
                   <span>Desenvolvedores</span>
                </a>
            </li> 
            <li class="nav-item m-1 ">
                <a href="#perguntas" class="nav-link" onClick="buscarSessionScroool('perguntas')">
                   <i class="bi bi-question"></i>
                   <span>Dúvidas frequentes</span>
                </a>
            </li> 
            <li class="nav-item m-1 ">
                <a href="#contato" class="nav-link" onClick="buscarSessionScroool('contato')">
                   <i class="bi bi-telephone"></i>
                   <span>Contate-nos</span>
                </a>
            </li> 
            <li class="nav-item m-1">
                <button type="button" class="btn btn-outline-light btn-inexts rounded-0" onClick="buscarSessionScroool('contato')">
                    <span>QUERO SER INEXTS</span>
                </button>
            </li>
        </ul>
    </div>
</nav>


<script>
    function buscarSessionScroool (anchor){
        if (anchor == 'home'){
            $('html').scrollTop(0);
            $("html").hide();
            $('html').show(1000);
        }else{
            var vetor = ['contato',  'perguntas', 'desenvolvedores', 'quemsomos', 'vantagens', 'home'];
            for (var i=0; i<vetor.length; i++){
                if (vetor[i] != anchor){
                    window.location.href = "#"+vetor[i];
                    $("#"+vetor[i]).hide();
                    $("#"+vetor[i]).show(1000);
                }else{
                    break;
                }
            }
            
            $("#"+anchor).hide();
            $("#"+anchor).show(1000);
            window.location.href = "#"+anchor;     
        }
    }
</script>