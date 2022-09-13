
<?php if ($mostrar_mensagem): ?>
    <div class="modal-dialog ml-5 bg-info rounded">
        <div class="modal-content bg-info">
            <div class="row align-items-center justify-content-md-end">
                <div class="col text-center">
                    <h6 class="modal-title p-2 col-md-12">
                        <?php echo $conteudo_mensagem; ?>
                    </h6>
                </div>
            </div>
  	    </div>
    </div>
      
    <script>
        $('.modal-dialog').fadeIn();
	    $('.modal-dialog').delay(3000);
    	$('.modal-dialog').fadeOut(500);
    </script>
<?php endif ?>
