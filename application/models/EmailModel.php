<?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class EmailModel extends CI_Model {
        
        
        
        
        public function enviar_email_desenvolvedores ($params){
            
            // banco de dados
            $this->db->set("nome", $params['nome']);
            $this->db->set("email", $params['email']);
            $this->db->set("empresa", $params['empresa']);
            $this->db->set("mensagem", $params['mensagem']);
            //$this->db->insert('contate-us');
            
            
            // email
            $subject = 'Contate-nos INEXST!';
            $message = '
                <!DOCTYPE html>    
                <html lang="pt-br">
                <head>
                    <title>'.$subject.'</title>
                    <meta charset="pt-br">
                </head>
                <body">
                    <p>Olá, desenvolvedores!</p>
                    <p>Me chamo, '.$params['nome'].'</p>
                    <p>Estou na empresa <strong>'.$params['empresa'].'</strong></p>
                    <p><strong>Mensagem</p>
                    <p><em>'.$params['mensagem'].'</em></p>
                    <hr><br>
                    <p>Deixo o meu e-mail abaixo para contato!<p>
                    <p><strong>E-mail:</strong>'.$params['email'].'</p>
                    <p>Até mais.</p>
                </body>
                </html>';
                $headers[] = 'MIME-Version: 1.0';
                $headers[] = 'Content-type: text/html; charset=iso-8859-1';
                $headers[] = 'To: '.$params['email'];
                $headers[] = 'From: Investte Imóveis <suporte@inexts.atlantic.tec.br>';
                $headers[] = 'Cc: suporte@inexts.atlantic.tec.br';
                $headers[] = 'Bcc: suporte@inexts.atlantic.tec.br';
            mail($params['email'], $subject, $message, implode("\r\n", $headers));
        }
    }
