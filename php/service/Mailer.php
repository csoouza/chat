
<?php
require_once("class.phpmailer.php");
class Mailer extends Service
{
    public function sendMessage($from, $to, $subject, $body)
    {
        //$headers = "From: $from\r\nReply-To: $from\r\nContent-Type: text/html; charset=UTF-8\r\n";
        
        //@mail($to, $subject, $body, $headers);

// Inicia a classe PHPMailer
			$mail = new PHPMailer();

			// Define os dados do servidor e tipo de conexão

			$mail->IsSMTP(); // Define que a mensagem será SMTP
			$mail->Host = 'smtp.colegiosoer.com.br'; // Endereço do servidor SMTP
			$mail->SMTPAuth = true; // Autenticação
			$mail->Port   = 587;
			$mail->Username = 'divulgacao@colegiosoer.com.br'; // Usuário do servidor SMTP
			$mail->Password = '2016divulgacao681'; // Senha da caixa postal utilizada
			 
			 // Define o remetente

			$mail->From = 'divulgacao@colegiosoer.com.br'; 
			$mail->FromName = 'Chat Soer';  
			 
			 // Define os destinatário(s) 

			$mail->AddAddress('divulgacao@colegiosoer.com.br', 'Chat Soer');
			//$mail->AddAddress('e-mail@destino2.com.br');
			//$mail->AddCC($email, 'Copia'); 
			//$mail->AddBCC('CopiaOculta@dominio.com.br', 'Copia Oculta'); 
			//Set an alternative reply-to address
			$mail->addReplyTo($from, $subject);
			 // Define os dados técnicos da Mensagem

			$mail->IsHTML(true); // Define que o e-mail será enviado como HTML
			$mail->CharSet = 'UTF-8'; // Charset da mensagem (opcional)
			 
			 // Texto e Assunto
			$textohtml = '<br>Responder para Email: '.$from.' '.'<br>Assunto : '.$subject.'<br>Msg :'.$body;
			//$textohtml='teste';
			$mail->Subject  = $subject; // Assunto da mensagem
			$mail->Body = $textohtml;
			$mail->AltBody = $textohtml;
			//$mail->Body = $formnome.$formemail.$formdesc;
			//$mail->AltBody = $formnome.$formemail.$formdesc;
			 
			 // Anexos (opcional)

			//$mail->AddAttachment("e:\home\login\web\documento.pdf", "novo_nome.pdf");  

			 // Envio da Mensagem
			$enviado = $mail->Send();
			 
			 // Limpa os destinatários e os anexos
			$mail->ClearAllRecipients();
			$mail->ClearAttachments();
    }
}

?>
