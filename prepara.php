<?php
//BUSCA AS VARIÁVEIS
include "buscavars.inc";
include "header.inc";

if ($nome ==null or $mail ==null)
{echo "<br><center><font face=verdana color=red size=2><strong>
Por favor, verifique os campos em vermelho</strong></center></font>";
include_once "EntraDados.inc";}

if ($nome !=null AND $mail !=null)
{echo "
<form action=teste01.php method=post>
<table align=center width=500>
<tr>
<td>
<center>
<br>
  <strong>TESTE DE PERSONALIDADE OXFORD</strong>
<br />
<ol>
 Este teste tem como propsito, proporcionar dados que nos ajude a orientá-la(o)
em como melhorar as áreas de sua vida, nas quais você possa estar tendo qualquer dificuldade.<br />
<br>
</center>
<center>
<strong>INSTRUÇÕES</strong>
<br>
<br />
<ul>Responda todas as perguntas da maneira como se sente agora.</ul>
<ul>Não fique muito tempo na mesma questão.</ul>
<ul>Responda assim que entender e vá para a próxima.</ul>
<ul>A precisão do resultado depende da sinceridade das suas respostas.</ul>
<br />
</center>
<br><br />
<strong>RESPONDA:</strong>
<br><br />
<strong>(+)</strong> SIM OU NA MAIORIA DAS VEZES SIM.<br />
<strong>(m)</strong> TALVEZ OU EM DÚVIDA.<br />
<strong>(-)</strong> NÂO OU NA MAIORIA DAS VEZES NÃO.<br />


</ol>

<input type='hidden' name='nome' value='$nome' />
<input type='hidden' name='sobrenome' value='$sobrenome' />
<input type='hidden' name='sexo' value='$sexo' />
<input type='hidden' name='idade' value='$idade' />
<input type='hidden' name='ocupacao' value='$ocupacao' />
<input type='hidden' name='empresa' value='$empresa' />
<input type='hidden' name='endereco' value='$endereco' />
<input type='hidden' name='cidade' value='$cidade' />
<input type='hidden' name='uf' value='$uf' />
<input type='hidden' name='cep' value='$cep' />
<input type='hidden' name='telefone' value='$telefone' />
<input type='hidden' name='telefone2' value='$telefone2' />
<input type='hidden' name='mail' value='$mail' />
</td>
</tr>
<tr>
<td>
<br>
<center>
<input type=submit value=Comecar!>
</center>
<br />
</td>
</tr>
</table>
</form>
";}

include "footer.inc";
?>
