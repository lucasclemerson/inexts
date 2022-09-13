<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
  
    class Welcome extends CI_Controller {

        public function __construct(){
            parent::__construct();
            $this->load->database();
            $this->load->library('session');
        }   
    
        public function index (){
            if ($_GET['mostrar_mensagem']==1){
                $dados['mostrar_mensagem']=true;
                $dados['conteudo_mensagem']="E-mail enviado com sucesso!";
            }
            $this->load->view('index', $dados);
        }
    }
?>