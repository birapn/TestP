<?php
$nome = $_POST[nome];
$mail = $_POST[mail];
?>

<br><font face=verdana size=2 color=darkblue><center><b>Dados Pessoais:</b></center></font>

<form action='prepara.php' method='post'>
<table align='center' border=0>
<?php
if ($nome == null)
{echo "<tr height=30><td><font face=verdana size=2><font color=red>Nome: </font>";}
else 
{echo "<tr height=30><td><font face=verdana size=2>Nome: ";}

echo "
<input style='width: 120px; height: 20px;' maxlength='150' size='52' name='nome' value='$nome'>
&nbsp;Sobrenome: <input style='width: 122px; height: 20px;' maxlength='150' size='52' name='sobrenome' value='$sobrenome'></td></tr>
	
<tr height=30><td><font face=verdana size=2>
<strong>Idade: </strong><input type=radio value='MAIOR' name='idade' CHECKED>Mais de 18 anos
&nbsp;<input type=radio value='MENOR' name='idade'>Menos de 18 anos</td></tr>
	
<tr height=30><td><font face=verdana size=2>
<strong>Sexo: </strong><input type=radio value='MASC' name='sexo' checked>Masculino
&nbsp;<input type=radio value='FEM' name='sexo'>Feminino</td></tr>
	
<tr height=30><td><font face=verdana size=2>
Endere&ccedil;o: <input style='width: 311px; height: 20px;' maxlength='150' size='48' name='endereco' value='$endereco'></td></tr>

<tr height=30><td><font face=verdana size=2>
Cidade: <input style='width: 89px; height: 20px;' maxlength='40' size='10' name='cidade' value='$cidade'>&nbsp;&nbsp;
UF: <input style='width: 36px; height: 20px;' maxlength='2' size='3' name='uf' value='$uf'>&nbsp;&nbsp;&nbsp;&nbsp;
CEP: <input style='width: 99px; height: 20px;' maxlength='10' size='11' name='cep' value='$cep'></td></tr>

<tr height=30><td><font face=verdana size=2>
Ocupa&ccedil;&atilde;o: <input style='width: 110px; height: 20px;' maxlength='90' size='48' name='ocupacao' value='$ocupacao'>
Empresa: <input style='width: 125px; height: 20px;' maxlength='80' size='48' name='empresa' value='$empresa'></td></tr>
	
<tr height=30><td><font face=verdana size=2>
Telefone: <input style='width: 88px; height: 20px;' maxlength='11' size='13' name='telefone' value='$telefone'>
Telefone (Celular): <input style='width: 93px; height: 20px;' maxlength='11' size='13' name='telefone2' value='$telefone2'></td></tr>
";

if ($mail == null)
{echo "<tr height=30><td><font face=verdana size=2><font color=red>E-mail: </font>";}
else 
{echo "<tr height=30><td><font face=verdana size=2>E-mail: ";}

echo "
<input style='width: 332px; height: 20px;' size='23' name='mail' value='$mail'></td></tr>
<tr height=30><td>
<center>
<input type=submit value='Enviar dados'>
</center></td></tr></table></form>";
?>