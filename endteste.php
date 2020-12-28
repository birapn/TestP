<?php

$nome = $_POST['nome'] . ' ' . $_POST['sobrenome'];

$mail = $_POST['mail'];

$quero = $_POST['quero'];

$fone = $_POST['fone'] . ' CEL:' . $_POST['fonecel'];

$opiniao = $_POST['opiniao'];

$sexo = $_POST['sexo'];

$msg .= "
NOME: $nome
SEXO: $sexo
TEL: $fone
MAIL: $mail
OPINIAO: $opiniao

$quero por meu nome na lista de convidados para eventos.";


// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";

// More headers
$headers .= 'From: <webmaster@dianeticabrasil.com.br>' . "\r\n";
mail("contato@dianeticabrasil.com.br", "Sobre o teste - dianeticabrasil", $msg, $headers);
//mail("zoi@zoimidia.com", "Sobre o teste - dianeticabrasil", $msg, $headers);

echo "E-mail enviado com sucesso!";

?>