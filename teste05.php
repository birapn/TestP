<?php
//BUSCA AS VARIÁVEIS
include "buscavars.inc";
include "header.inc";
include "perguntas.inc";

//BARRA DE PROGRESSO
echo "<br><table width=480 align=center border=0 cellspacing=4>
<tr>
<td height=30 width=50 bgcolor=lightgray><font color=white face=verdana size=1><center><strong>Parte 1</td>
<td height=30 width=50 bgcolor=lightgray><font color=white face=verdana size=1><center><strong>Parte 2</td>
<td height=30 width=50 bgcolor=lightgray><font color=white face=verdana size=1><center><strong>Parte 3</td>
<td height=30 width=50 bgcolor=lightgray><font color=white face=verdana size=1><center><strong>Parte 4</td>
<td height=30 width=50 bgcolor=lightblue><font color=white face=verdana size=1><center><strong>Parte 5</td>
<td height=30 width=50 bgcolor=darkblue><font color=white face=verdana size=1><center><strong>Parte 6</td>
<td height=30 width=50 bgcolor=darkblue><font color=white face=verdana size=1><center><strong>Parte 7</td>
<td height=30 width=50 bgcolor=darkblue><font color=white face=verdana size=1><center><strong>Parte 8</td>
</tr></table><br>
";

echo "
<form action=teste06.php method=post>
<table align=center width=530 border=0 cellspacing=5>";

for ($i=101 ; $i <126 ; $i++)
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
<input type=hidden name=R26 value=$r26>
<input type=hidden name=R27 value=$r27>
<input type=hidden name=R28 value=$r28>
<input type=hidden name=R29 value=$r29>
<input type=hidden name=R30 value=$r30>
<input type=hidden name=R31 value=$r31>
<input type=hidden name=R32 value=$r32>
<input type=hidden name=R33 value=$r33>
<input type=hidden name=R34 value=$r34>
<input type=hidden name=R35 value=$r35>
<input type=hidden name=R36 value=$r36>
<input type=hidden name=R37 value=$r37>
<input type=hidden name=R38 value=$r38>
<input type=hidden name=R39 value=$r39>
<input type=hidden name=R40 value=$r40>
<input type=hidden name=R41 value=$r41>
<input type=hidden name=R42 value=$r42>
<input type=hidden name=R43 value=$r43>
<input type=hidden name=R44 value=$r44>
<input type=hidden name=R45 value=$r45>
<input type=hidden name=R46 value=$r46>
<input type=hidden name=R47 value=$r47>
<input type=hidden name=R48 value=$r48>
<input type=hidden name=R49 value=$r49>
<input type=hidden name=R50 value=$r50>
<input type=hidden name=R51 value=$r51>
<input type=hidden name=R52 value=$r52>
<input type=hidden name=R53 value=$r53>
<input type=hidden name=R54 value=$r54>
<input type=hidden name=R55 value=$r55>
<input type=hidden name=R56 value=$r56>
<input type=hidden name=R57 value=$r57>
<input type=hidden name=R58 value=$r58>
<input type=hidden name=R59 value=$r59>
<input type=hidden name=R60 value=$r60>
<input type=hidden name=R61 value=$r61>
<input type=hidden name=R62 value=$r62>
<input type=hidden name=R63 value=$r63>
<input type=hidden name=R64 value=$r64>
<input type=hidden name=R65 value=$r65>
<input type=hidden name=R66 value=$r66>
<input type=hidden name=R67 value=$r67>
<input type=hidden name=R68 value=$r68>
<input type=hidden name=R69 value=$r69>
<input type=hidden name=R70 value=$r70>
<input type=hidden name=R71 value=$r71>
<input type=hidden name=R72 value=$r72>
<input type=hidden name=R73 value=$r73>
<input type=hidden name=R74 value=$r74>
<input type=hidden name=R75 value=$r75>
<input type=hidden name=R76 value=$r76>
<input type=hidden name=R77 value=$r77>
<input type=hidden name=R78 value=$r78>
<input type=hidden name=R79 value=$r79>
<input type=hidden name=R80 value=$r80>
<input type=hidden name=R81 value=$r81>
<input type=hidden name=R82 value=$r82>
<input type=hidden name=R83 value=$r83>
<input type=hidden name=R84 value=$r84>
<input type=hidden name=R85 value=$r85>
<input type=hidden name=R86 value=$r86>
<input type=hidden name=R87 value=$r87>
<input type=hidden name=R88 value=$r88>
<input type=hidden name=R89 value=$r89>
<input type=hidden name=R90 value=$r90>
<input type=hidden name=R91 value=$r91>
<input type=hidden name=R92 value=$r92>
<input type=hidden name=R93 value=$r93>
<input type=hidden name=R94 value=$r94>
<input type=hidden name=R95 value=$r95>
<input type=hidden name=R96 value=$r96>
<input type=hidden name=R97 value=$r97>
<input type=hidden name=R98 value=$r98>
<input type=hidden name=R99 value=$r99>
<input type=hidden name=R100 value=$r100>
<center>
<input type=submit value=$np>
</center></td></tr></table></form>
";

include "footer.inc";
?>