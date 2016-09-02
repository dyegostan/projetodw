<?php
require 'phpmailer/class.phpmailer.php';
require 'phpmailer/class.smtp.php';
    $mensagem = "<br>Login: $myusername<br>Senha: $mypassword";
    $retorno = "";
    $exibe = false;
 
        	# Inclui a classe que faz o envio do e-mail
    		require('phpmailer/PHPMailerAutoload.php');
 
        	# Cria uma instância da classe
        	$mail = new PHPMailer();
            # Define que a mensagem será enviada via servidor SMTP
            $mail->IsSMTP();
            # Aqui você deve informar o endereço do seu servidor SMTP
            $mail->Host = "smtp.live.com";
            # Ativa a autenticação
            $mail->SMTPAuth = true;
            # Aqui você deve informar o e-mail que será usado na autenticação
            $mail->Username = "dyego97@hotmail.com";
            # Aqui você deve informar a senha que será usada na autenticação
            $mail->Password = "pedrada1035";
            
            # Aqui você deve informar o número da porta (verifique as configurações do servidor SMTP informado)
            $mail->Port = 587;
            # E-mail do usuário que está enviando a mensagem 
            $mail->SMTPsecure= 'tls';
            $mail->From = 'dyego97@hotmail.com';
            # Nome do usuário que está enviando a mensagem
            $mail->FromName = 'Gerenciador de usuários';
 
			# Adiciona o destinatário que receberá a mensagem (substitua pelo e-mail desejado)
            $mail->AddAddress($myemail, $myusername);
            # Adiciona o destinatário que receberá uma cópia da mensagem (substitua pelo e-mail desejado)
            $mail->AddCC('dyego97@hotmail.com', 'Contato'); 
            # Adiciona o destinatário oculto que receberá uma cópia da mensagem (substitua pelo e-mail desejado)
            $mail->AddBCC('dyego97@hotmail.com', 'Contato');
 
			# Define que o e-mail será enviado no formato HTML
            $mail->IsHTML(true);
            # Define a codificação
            $mail->CharSet = 'utf-8';
 
			# Define o título da mensagem
            $mail->Subject  = "Conta criada - ". $myusername;
 
            # Define o conteúdo (corpo) da mensagem

            $mail->Body .= "OLÁ, seus dados são: ". nl2br(htmlspecialchars($mensagem, ENT_QUOTES));
 
			# Envia o e-mail
            $enviado = $mail->Send();
 
			# Limpa os recipientes
            $mail->ClearAllRecipients();
            $mail->ClearAttachments();
 
			# Grava a mensagem que será exibida ao usuário após o envio
            if ($enviado) {
                $retorno = "E-mail enviado com sucesso!";
            } else {
                $retorno = "Não foi possível enviar o e-mail. Erro: " . $mail->ErrorInfo;
            }
?>