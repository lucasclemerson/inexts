<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
  
    class Home extends CI_Controller {

        public function __construct(){
            parent::__construct();
            $this->load->database();
            $this->load->library('session');
        }   
    
        public function index (){
            $dados['page'] = 'home';
            $dados['mostrar_mensagem']=false;
            $dados['conteudo_mensagem']="";
            
            
            if (isset($_GET['mostrar_mensagem'])){
                $dados['mostrar_mensagem']=true;
                $dados['conteudo_mensagem']=$_GET['mostrar_mensagem']==1?"E-mail enviado com sucesso!":"Problemas com o envio do E-mail!";
            }
            
            $this->load->view('index', $dados);
        }
    }
?>
