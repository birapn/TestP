<?php
//BUSCA AS VARIAVEIS
include "buscavars.inc";
include "header.inc";
include "perguntas.inc";

//BARRA DE PROGRESSO
echo "<br><table width=480 align=center border=0 cellspacing=4>
<tr>
<td height=30 width=50 bgcolor=lightgray><font color=white face=verdana size=1><center><strong>Parte 1</td>
<td height=30 width=50 bgcolor=lightblue><font color=white face=verdana size=1><center><strong>Parte 2</td>
<td height=30 width=50 bgcolor=darkblue><font color=white face=verdana size=1><center><strong>Parte 3</td>
<td height=30 width=50 bgcolor=darkblue><font color=white face=verdana size=1><center><strong>Parte 4</td>
<td height=30 width=50 bgcolor=darkblue><font color=white face=verdana size=1><center><strong>Parte 5</td>
<td height=30 width=50 bgcolor=darkblue><font color=white face=verdana size=1><center><strong>Parte 6</td>
<td height=30 width=50 bgcolor=darkblue><font color=white face=verdana size=1><center><strong>Parte 7</td>
<td height=30 width=50 bgcolor=darkblue><font color=white face=verdana size=1><center><strong>Parte 8</td>
</tr></table><br>
";

//PERGUNTAS
echo "
<form action=teste03.php method=post>
<table align=center width=530 border=0 cellspacing=5>";

for ($i=26 ; $i <51 ; $i++)
{
echo "
<tr>
	<td>
	<strong><font face=arial size=2 color=gray>&nbsp;+ &nbsp;&nbsp;m &nbsp;&nbsp;- </font></strong><br>
	<input value='+' name='R$i' type='radio'>
	<input value='m' name='R$i' type='radio'>
	<input value='-' name='R$i' type='radio'>
	<font face=verdana size=2>
	$i. ${p.$i}<br><br>
	</td>
</tr>	
";
}

//AGRUPAMENTO DE VARI�VEIS
echo "
<tr><td>
<input type=hidden name=nome value='$nome'>
<input type=hidden name=sobrenome value='$sobrenome'>
<input type=hidden name=sexo value='$sexo'>
<input type=hidden name=idade value='$idade'>
<input type=hidden name=ocupacao value='$ocupacao'>
<input type=hidden name=empresa value='$empresa'>
<input type=hidden name=endereco value='$endereco'>
<input type=hidden name=cidade value='$cidade'>
<input type=hidden name=uf value='$uf'>
<input type=hidden name=cep value='$cep'>
<input type=hidden name=telefone value='$telefone'>
<input type=hidden name=telefone2 value='$telefone2'>
<input type=hidden name=mail value='$mail'>

<input type=hidden name=R1 value=$r1>
<input type=hidden name=R2 value=$r2>
<input type=hidden name=R3 value=$r3>
<input type=hidden name=R4 value=$r4>
<input type=hidden name=R5 value=$r5>
<input type=hidden name=R6 value=$r6>
<input type=hidden name=R7 value=$r7>
<input type=hidden name=R8 value=$r8>
<input type=hidden name=R9 value=$r9>
<input type=hidden name=R10 value=$r10>
<input type=hidden name=R11 value=$r11>
<input type=hidden name=R12 value=$r12>
<input type=hidden name=R13 value=$r13>
<input type=hidden name=R14 value=$r14>
<input type=hidden name=R15 value=$r15>
<input type=hidden name=R16 value=$r16>
<input type=hidden name=R17 value=$r17>
<input type=hidden name=R18 value=$r18>
<input type=hidden name=R19 value=$r19>
<input type=hidden name=R20 value=$r20>
<input type=hidden name=R21 value=$r21>
<input type=hidden name=R22 value=$r22>
<input type=hidden name=R23 value=$r23>
<input type=hidden name=R24 value=$r24>
<input type=hidden name=R25 value=$r25>
<center>
<input type=submit value=$np>
</center></td></tr></table></form>
";

include "footer.inc";
?>