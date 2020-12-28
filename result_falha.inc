<?php
echo "
<table width=500 border=0 align=center>
<tr><td>
<font face=verdana>";


echo "<br><font color=darkblue size=5><center><strong>Resultado</font></strong>;

//Nova Resposta do Teste
echo "<title>Resposta do Teste de Personalidade</title>";
<br><center><font size=2>Não é possível mostrar a análise</font></center><br>";

if ($reason =='maybe')
{echo "<br><br>O teste não foi completamente avaliado pelo sistema, por que o número de respostas como 'incertas' ou em branco ultrapassou o limite máximo permitido pelo sistema. Se você respondeu este teste sinceramente, entre em contato conosoco.<br>";}

if ($reason =='teetie')
{echo "<br><br>O seu teste foi avaliado pelo sistema e o padrão 'Todos os pontos altos' foi gerado como resultado. Nesse caso, não entregamos a resposta via internet. É necessário um contato pessoal.<br>";}

if ($reason =='ramdom')
{echo "<br><br>O teste não foi completamente avaliado pelo sistema, por que apresenta um padrão aleatório. Se você respondeu este teste sinceramente, entre em contato conosoco.<br>";}

echo "</td></tr></table><br>";
?>