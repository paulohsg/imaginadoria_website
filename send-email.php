<?php
 
// Inclui o arquivo class.phpmailer.php localizado na pasta class
require_once("class/PHPMailerAutoload.php");
$response = array();
 
// Inicia a classe PHPMailer
$mail = new PHPMailer(true);
$mail->charset = "ISO-8859-1";
//$mail->SMTPDebug  = 1;
 
// Define os dados do servidor e tipo de conexão
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsSMTP(); // Define que a mensagem será SMTP
 
try {
     $mail->SMTPSecure = 'tls'; 
     $mail->Host = 'smtp.gmail.com'; // Endereço do servidor SMTP (Autenticação, utilize o host smtp.seudomínio.com.br)
     $mail->SMTPAuth   = true;  // Usar autenticação SMTP (obrigatório para smtp.seudomínio.com.br)
     $mail->Port       = 587; //  Usar 587 porta SMTP
     $mail->Username = "imaginadoria@gmail.com"; // Usuário do servidor SMTP (endereço de email)
     $mail->Password = "imagination"; // Senha do servidor SMTP (senha do email usado)
 
     //Define o remetente
     // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=    
     $mail->SetFrom($_POST['email-input'], $_POST['email-name']); //Seu e-mail
     $mail->AddReplyTo($_POST['email-input'], $_POST['email-name']); //Seu e-mail
     $mail->Subject = 'Contato';//Assunto do e-mail
 
 
     //Define os destinatário(s)
     //=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
     $mail->AddAddress('info@imaginadoria.com');
 
     //Campos abaixo são opcionais 
     //=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
     //$mail->AddCC('destinarario@dominio.com.br', 'Destinatario'); // Copia
     //$mail->AddBCC('destinatario_oculto@dominio.com.br', 'Destinatario2`'); // Cópia Oculta
     //$mail->AddAttachment('images/phpmailer.gif');      // Adicionar um anexo
 
 
     //Define o corpo do email
     $mail->MsgHTML($_POST['message-input']);
 
     ////Caso queira colocar o conteudo de um arquivo utilize o método abaixo ao invés da mensagem no corpo do e-mail.
     //$mail->MsgHTML(file_get_contents('arquivo.html'));
 
     $mail->Send();
     $response['status'] = 'success';
 
    //caso apresente algum erro é apresentado abaixo com essa exceção.
    }catch (phpmailerException $e) {
      //echo $e->errorMessage(); //Mensagem de erro costumizada do PHPMailer
        $response['status'] = 'error';
        $response['message'] = $e->errorMessage();
    }

    echo json_encode($response);
?>