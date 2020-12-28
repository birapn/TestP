<?php

//require "Email.php";
//FORMATAÇÃO DO EMAIL
$msg .= "<table align=center width=700 border=0><tr><td>";
$msg .= "<font face=verdana size=2>";

//INICIO DO CORPO
$msg .= "<center><br><em>Avaliação completa computadorizada de gráfico de personalidade Oxford</em><br><br><br>
<p><strong><font size=5 color=darkblue>DADOS PESSOAIS DO USUÁRIO </font></strong></center><br><br>";
{
$msg .= "<font face=verdana size=2><strong>Nome:</strong> $nome $sobrenome<br>";
$msg .= "<strong>Email:</strong> <a href='mailto:$mail'>$mail</a><br><br>";
$msg .= "<strong>Endereço:</strong> $endereco<br>";
$msg .= "<strong>Cidade:</strong> $cidade &nbsp; ";
$msg .= "<strong>Estado:</strong> $uf &nbsp; ";
$msg .= "<strong>CEP:</strong> $cep<br><br>";
$msg .= "<strong>Ocupação:</strong> $ocupacao &nbsp; ";
$msg .= "<strong>Empresa:</strong> $empresa<br><br>";
$msg .= "<strong>Telefone:</strong> $telefone &nbsp; ";
$msg .= "<strong>Telefone 2:</strong> $telefone2<br><br>";
$msg .= "<strong>Sexo:</strong> $sexo &nbsp; ";
$msg .= "<strong>Idade:</strong> $idade</font>
<br><br><hr><br>";
}

$msg .= "$grafmsg";
$msg .= "$colmsg";
$msg .= "$sinmsg";

//PREENCHIMENTO DO TESTE
include "emails_resp.inc";

$msg .= "<p><font size=1 face=verdana>Fim da avaliação - Oxford Capacity Analisis :: Programa finalizado</font><p></td></tr></table>";


// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <contato@dianeticabrasil.com.br>' . "\r\n";
mail('contato@dianeticabrasil.com.br',"Teste OCA - $nome $sobrenome", $msg, $headers);
mail('contatodianeticabrasil@gmail.com',"Teste OCA - $nome $sobrenome", $msg, $headers);
//mail('birapn.net@gmail.com',"Teste OCA - $nome $sobrenome", $msg, $headers);
echo "E-mail enviado com sucesso!";
?>