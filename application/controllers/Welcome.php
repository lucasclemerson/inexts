<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
  
    class Welcome extends CI_Controller {

        public function __construct(){
            parent::__construct();
            $this->load->database();
            $this->load->library('session');
        }   
    
        public function index (){
            $this->load->view('index');
        }
        
        
        public function entrar_em_contato (){
            $nome = $this->input->post('nome');
            $email = $this->input->post('email');
            $empresa = $this->input->post('empresa');
            $mensagem = $this->input->post('mensagem');
           
            $titulo = "Contate-nos INEXTS";
            $para = "clemerson.lucas.oliveira@gmail.com, caiocesarama@gmail.com";
            $html = '
                <!DOCTYPE html>    
                <html lang="pt-br">
                <head>
                    <title>'.$titulo.'</title>
                    <meta charset="utf-8">
                </head>
                <body>
                    <p><strong>Nome: </strong>'.$nome.'</p>
                    <p><strong>E-mail: </strong>'.$email.'</p>
                    <p><strong>Empresa: </strong>'.$empresa.'</p>
                    <hr>
                    <h3>Mensagem: </h3>
                    <p><em>"'.$mensagem.'"</em></p>
                    <hr>
                    <p>Data: '.date('d/m/Y').'</p>
                    <p>Horário: '.date('g:i:s a').'</p>
                </body>
                </html>';
             
            $headers[] = 'MIME-Version: 1.0';
            $headers[] = 'Content-type: text/html; charset=iso-8859-1';
            $headers[] = 'To: ' . $para;
            $headers[] = 'From: '.$nome.' <'.$email.'>';
            $headers[] = 'Cc: '.$email;
            $headers[] = 'Bcc: '.$email;
            
            if (mail($para, $titulo, $html, implode("\r\n", $headers))) {
                echo "successo";
            }     
        }
        
    }
?>
