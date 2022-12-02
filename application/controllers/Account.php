<?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class Account extends CI_Controller {
        
        public function __construct (){
            parent::__construct();
            $this->load->database();
            $this->load->library('session');
        }
        
        public function index (){
            $this->login();
        }
        
        
        public function login (){
            $this->verifica_sessao_ativa ();
            $dados['page'] = 'login';
            $dados['controller'] = 'account';
            $this->load->view('index', $dados);
        }
        
        
        public function register(){
            $this->verifica_sessao_ativa ();
            $dados['page'] = 'register';
            $dados['controller'] = 'account';
            $this->load->view('index', $dados);
        }
        
        
        public function trabalheconosco(){
            $this->verifica_sessao_ativa ();
            $dados['page'] = 'trabalheconosco';
            $dados['controller'] = 'account';
            $this->load->view('index', $dados);
        }
        
        public function logout (){
            $this->session->sess_destroy();
            redirect(base_url('account/login'), 'refresh');
        }
        
        public function novo_cliente (){
            $this->verifica_sessao_ativa ();
            $email = $this->input->post('email');
            $nome = $this->input->post('nome'); 
            $senha = $this->input->post('senha');
            $senha_confimada = $this->input->post('senha_confimada');
            $usuario_model = new UsuarioModel();
            
            if (!$usuario_model->verificar_email($email)){
                if ($senha_confimada == $senha){
                    $usuario = array('nome'=>$nome, 'senha'=>sha1($senha), 'email'=>$email, 'cargo'=>3);
                    $usuario_model->inserir_cliente($usuario);
                    $this->session->set_flashdata('sucesso', 'Seu cadastro foi criado com sucessso');
                    redirect(base_url('account/login'), 'refresh');
                }else{
                    $this->session->set_flashdata('erro', 'As senhas informadas não condizem!');
                }
            }else{
                $this->session->set_flashdata('erro', 'Seu e-mail já se encontra em nosso sistema!');
            }
            redirect(base_url('account/register'), 'refresh');
        }
        
        public function novo_desenvolvedor (){
            $this->verifica_sessao_ativa ();
            $email = $this->input->post('email');
            $nome = $this->input->post('nome'); 
            $senha = $this->input->post('senha');
            $senha_confimada = $this->input->post('senha_confimada');
            $pergunta_1 = $this->input->post('pergunta_1');    
            $pergunta_2 = $this->input->post('pergunta_2');
            $usuario_model = new UsuarioModel();
            
            if (!$usuario_model->verificar_email($email)){
                if ($senha_confimada == $senha){
                    $usuario = array('nome'=>$nome, 'senha'=>sha1($senha), 'email'=>$email, 'cargo'=>2);
                    $usuario_model->inserir_desenvolvedor($usuario);
                    
                    // curiculo   
                    if (isset($_FILES['curriculo'])){
                        $extensao = '.' . explode('.',$_FILES['curriculo']['name'])[count(explode('.',$_FILES['curriculo']['name'])) - 1];
                        $diretorio = 'curriculos/'.sha1($usuario_model->consultar_identificador($email)).$extensao;
                        move_uploaded_file($_FILES['curriculo']['tmp_name'], $diretorio); 
                        $dados = array(
                            'arquivo'=>$diretorio, 
                            'pergunta_1'=>$pergunta_1, 
                            'pergunta_2'=>$pergunta_2, 
                            'id_usuario'=>$usuario_model->consultar_identificador($email)
                        );      
                    
                        $experiencia_model = new ExperienciaModel();
                        $experiencia_model->inserir($dados);
                    }
                    
                    $this->session->set_flashdata('sucesso', 'Seu cadastro foi criado com sucessso');
                    redirect(base_url('account/login'), 'refresh');
                }else{
                    $this->session->set_flashdata('erro', 'As senhas informadas não condizem!');
                }
            }else{
                $this->session->set_flashdata('erro', 'Seu e-mail já se encontra em nosso sistema!');
            }
            redirect(base_url('account/trabalheconosco'), 'refresh');
        }
        
        
        
        public function verificar_login (){
            $this->verifica_sessao_ativa ();
            $email = $this->input->post('email');
            $senha = $this->input->post('senha');
        
            $usuario_model = new UsuarioModel();
            if ($usuario_model->verificar_email($email)):
                if ($usuario_model->verifica_login ($email, $senha)):
                    $this->session->set_flashdata('sucesso', 'Usuário autenticado!');       
                    $usuario_model->logar_no_sistema($email);
                    $usuario = $this->session->userdata('usuario')[0];
                    if ($usuario['cargo'] == 1):
                        redirect(base_url('admin'), 'refresh');
                    elseif($usuario['cargo'] == 2):
                        redirect(base_url('developer'), 'refresh');
                    else:    
                        redirect(base_url('cliente'), 'refresh');
                    endif;
                else:    
                    $this->session->set_flashdata('erro', 'Credenciais inválidas!');
                endif;
            else:
                $this->session->set_flashdata('erro', 'Seu e-mail não está em nosso sistema ainda!');
            endif;    
            redirect(base_url('account/login'), 'refresh');
        }
    }
?>
