<?php

$info = addslashes($_POST['info']);
$email = addslashes($_POST['email']);
$mensagem = addslashes($_POST['mensagem']);

$to = "eulenir.eberle@gmail.com";
$subject = "Contato de $info Direcionado do SITE";
$body = ("INFORMACOES SOBRE O CONTATO

		NOME: $info
		EMAIL DE CONTATO: $email
		MENSAGEM: $mensagem"
		);
$header = "From:admin@eulenireberle.com"."\r\n".
			"Reply-To:".$email."\r\n".
			"X=Mailer:PHP/" .phpversion();
			
if(mail($to,$subject,$body,$header)){
	echo("Email enviado com sucesso!");
}
else{
	echo("O Email não pode ser enviado");
}
?>