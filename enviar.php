<?php
//Variaveis

$nome = $_POST['nomeForm'];
$sobrenome = $_POST['sobrenomeForm'];
$email = $_POST['emailForm'];
$telefone = $_POST['telefoneForm'];
$opcoes = $_POST['setorForm'];
$mensagem = $_POST['mensagemForm'];
$data_envio = date('d/m/Y');
$hora_envio = date('H:i:s');

// -------------

// Compo E-mail

	
	$arquivo = "
	<html>
	<style type='text/css'>
	body {
	margin:0px;
	font-family:Verdane;
	font-size:12px;
	color: #666666;
	}
	a{
	color: #666666;
	text-decoration: none;
	}
	a:hover {
	color: #FF0000;
	text-decoration: none;
	}
	p { display: block;}
	</style>

	<body>		
		<p><b>Nome:<b>	$nome $sobrenome</p>
		<p><b>E-mail:<b>	$email</p>
		<p><b>Telefone:<b>	$telefone</p>
		<p><b>Opções:<b>	$opcoes</p>
		<p><b>Mensagem:<b>	<br>
		$mensagem</p><br><br>


		<p>Este e-mail foi enviado em <b>$data_envio</b> &agrave;s <b>$hora_envio</b></p>

	</body>
    </html>

	";

// -------------------------

//enviar
	
	// emails para quem será enviado o formulário
	$destino = "sac@comercioeartes.com.br";
	$assunto = "Contato pelo Site";

	// É necessário indicar que o formato do e-mail é html
	$headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'From: $nome $sobrenome<$email>';
	//$headers .= "Bcc: $EmailPadrao\r\n";
	
	$enviaremail = mail($destino, $assunto, $arquivo, $headers);
	if($enviaremail){
	$mgm = "E-MAIL ENVIADO COM SUCESSO! <br> O link será enviado para o e-mail fornecido no formulário";
	echo " <meta http-equiv='refresh' content='3;URL=contato.php'>";
	} else {
	$mgm = "ERRO AO ENVIAR E-MAIL!";
	echo "";
	}
?>