<?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class Contato extends CI_Controller {
        
        public function __construct (){
            parent::__construct();
            $this->load->database();
            $this->load->library('session');
            
        }
        
        public function index (){
            $this->enviar_contato();
        }
        
        public function enviar_contato (){
            $data['nome'] = $this->input->post('nome');
            $data['email'] = $this->input->post('email');
            $data['empresa'] = $this->input->post('empresa');
            $data['mensagem'] = $this->input->post('mensagem');
            
            // inserir no banco e enviar email
            $emailModel = new EmailModel();
            $emailModel->enviar_email_desenvolvedores($data);
            redirect(base_url('welcome?mostrar_mensagem=1'));
        }
        
    }
?>
