<?php
//FORMATA��O DO EMAIL
$msg .= "<table align=center width=700 border=0><tr><td>";
$msg .= "<font face=verdana size=2>";

//INICIO DO CORPO
$msgamigo .= "<br><em>Sua $nome! amiga(a)(o) acaba de indic�-l(o)(a)para fazer este Teste de Avalia��o Personalidade Oxford</em><br><br><br>
<p>Fiz este teste e indico, ele tem como objetivo mostrar em que �rea da sua vida necessita de sua aten��o e o que a Associa��o Brasileira de Dian�tica tem a lhe oferecer.<br><br>;
<p>Espero que goste e lhe ajude,clique neste link: http://dianeticabrasil.com.br/testep/index.php e digite seus dados e fa�a.<br><br>;
<p> Um Abra�o de sua $nome! amiga(a)(o).<br><br>";


{
$msg .= "<font face=verdana size=2><strong>Nome:</strong> $nome $sobrenome<br>";
$msg .= "<strong>Email:</strong> <a href='mailto:$mail'>$mail</a><br><br>";
$msg .= "<strong>Endere�o:</strong> $endereco<br>";
$msg .= "<strong>Cidade:</strong> $cidade &nbsp; ";
$msg .= "<strong>Estado:</strong> $uf &nbsp; ";
$msg .= "<strong>CEP:</strong> $cep<br><br>";
$msg .= "<strong>Ocupa��o:</strong> $ocupacao &nbsp; ";
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

$msg .= "<p><font size=1 face=verdana>Fim da avalia��o - Oxford Capacity Analisis :: Programa finalizado</font><p></td></tr></table>";

mail("$mail_go_to", "Teste OCA $nome $sobrenome", $msg, "Content-Type: text/html");
?>