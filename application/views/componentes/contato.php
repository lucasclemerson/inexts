<div class="col-md-12 col-contato" id="contato">
    <div class="row align-items-center no-gutters justify-content-md-center">
        <div class="col-md-4 bg-white shadow-lg rounded p-4 mt-5 mb-5">
            <form action="<?=base_url()?>contato" method="post">
                <div class="row justify-content-md-center">
                    <h2 class="header-title mt-4 mb-4 col-md-12">Contate-nos</h2>
                    <br>
                    <div class="col-md-12">
                        <div class="form-group row mb-1">
                            <label class="col-md-12 col-form-label" for="nome"> Nome completo</label>
                            <div class="col-md-12">
                                <input name="nome" id="nome" type="text" class="form-control" placeholder="Nome completo" maxlength="100" required>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                        <div class="form-group row mb-1">
                            <label class="col-md-12 col-form-label" for="email"> E-mail</label>
                            <div class="col-md-12">
                                <input name="email" id="email" type="mail" class="form-control" placeholder="Email" maxlength="100" required>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                        <div class="form-group row mb-1">
                            <label class="col-md-12 col-form-label" for="empresa"> Empresa</label>
                            <div class="col-md-12">
                                <input name="empresa" id="empresa" type="text" class="form-control" placeholder="Empresa" maxlength="100">
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                        <div class="form-group row mb-1">
                            <label class="col-md-12 col-form-label" for="mensagem"> Em que podemos te ajudar? (máx.: 255 caracteres)</label>
                            <div class="col-md-12">
                                <textarea class="form-control" id="mensagem" name="mensagem" rows="3" maxlength="255" required></textarea>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-12 mb-3 mt-4">
                        <button type="submit" class="btn btn-default mb-3" name="button">
                            Enviar
                        </button>
                    </div>
                </div>
            </form>
        </div>
        
        <div class="col-md-4 p-4 mt-5 mb-5 bg-default shadow rounded">
            <h5 class="text-light mt-2 mb-2">O que acontece depois?</h5>
            <p class="text-light mt-2 mb-2"><strong>1. </strong>Caso queria contratar a Inexts, nosso gerente de vendas entra em contato com você dentro de alguns dias, para determinar os próximos passos do projeto, após analisar seus requisitos de negócios.</p>
            <p class="text-light mt-2 mb-2"><strong>2. </strong>Caso queira trabalhar conosco, basta preencher os campos ao lado e aquandar nossa equipe te enviar por e-mail os próximos passos para contato.</p>
        </div>  
    </div>
</div>
