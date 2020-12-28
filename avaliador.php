<?php
// INICIO
$sinmsg .= "<p><center><strong><font size=5 color=darkblue>SINDROMES</font></strong>
<br>Informação sobre comparaçãoo das colunas<br><br></center>";

//MAYBE
if ($mc >100)
{$sinmsg .="<br>O teste não é válido, exceto para mostrar que o indivíduo está preso solidamente em vários 'talvez' e incertezas, ou não está disposto a passar pela pergunta (retardo de comunicação). Geralmente, nestes casos, você está com uma verdadeira inabilidade por parte da pessoa que está sendo testada.<br>";
$suppress =1;
$reason ="maybe";} 
 
//SINDROMES SEÇÃO A
if ($a >69 AND $b >69 AND $c >69 AND $d >69 AND $e >69 AND $f >69 AND $g >69 AND $h >69 AND $i >69 AND $j >69)
{$sinmsg .="<br>Todos os pontos do gráfico estão altos. Mas a pessoa não tem realidade = gráfico theetie-weetie. �Do�ura e luz� (mas eles não podem encarar MEST ou nenhuma extrovers�o). A pessoa esta totalmente subjulgada com um thetan.<br>";
$suppress =1;
$reason ="teetie";}

if ($a >-96 AND $a <-39 AND $b >-101 AND $b <-66 AND $c >-95 AND $c <-64 AND $d >-84 AND $d <36 AND $e >2 AND $e <46 AND $f >21 AND $f <73 AND $g >-93 AND $g <-54 AND $h >-99 AND $h < -34 AND $i >-91 AND $i <19 AND $j >-73 AND $j <23)
{$sinmsg .="<br><font color=red>O gr�fico rand�mico. Isto acontece quando uma pessoa responde ao OCA randomicamente. OU porque eles n�o entendem as quest�esou porque por alguma raz�o pura e simplesmente não ligam, uma pessoa com este gráfico respondeu ao questionário randomicamente e não é possível analisa-lo mais que isto.</font><br>";
$suppress =1;
$reason ="ramdom";}

if ($g >89 and $i >89)
{$sinmsg .="<br><font color=red>Complexo de m�rtir ou de persegui��o. <strong>A pessoa está provavelmente mentindo.</strong></font><br>";}

//SUPRESSOR
if ($suppress ==1)
{$sinmsg .= "<br><center><strong><font color=red>Avaliação interrompida por causa do padrão apresentado acima.</font></center></strong><br>";}

else {
//SINDROMES SE�AO C
if ($a <-39 AND $b <-39 AND $c <-39)
{$sinmsg .= "<br>'A', 'B' e 'C' baixos - Neurótico. Obcecado pesadamente com perdas do passado. Frequentemente indicam um abandono na infância.<br>";}

if ($a <-39 AND $e >69)
{$sinmsg .= "<br>'A' Baixo e 'E' alto - Ativamente disperso.<br>";}

if ($e >69 AND $a <-39 AND $b <-39 AND $c <-39)
{$sinmsg .= "<br>'E' alto e 'A', 'B' e 'C' baixos - Pessoa provavelmente inclinada ao suicídio.<br>";}

if ($a <-39 AND $j <-39 AND $b >-40 AND $b <70 AND $c >-40 AND $c <70 AND $d >-40 AND $d <70 AND $e >-40 AND $e <70 AND $f >-40 AND $f <70 AND $g >-40 AND $g <70 AND $h >-40 AND $h <70 AND $i >-40 AND $i <70)
{$sinmsg .= "<br>'A' e 'J' Baixos e o restante médio (entre -40 e 70) - A pessoa está em um ambiente 1.1, onde sua realidade é reduzida, e ele não pode comunicar por que isso será distorcido e usado contra ela.<br>";}

if ($f >69 AND $a <-39 AND $c <-39 AND $g <-39)
{$sinmsg .= "<br>'F' alto e 'A', 'C' e 'G' baixos - �mpetos de ira. Temperamental.<br>";}

if ($a >69 AND $h <-39)
{$sinmsg .= "<br>'A' alto e 'H' Baixo  - Perfeccionista.<br>";}

if ($a >69 AND $d >-40 AND $d <70)
{$sinmsg .= "<br>'A' alto e 'D' Medio  - Ela opera individualmente sob dados est�veis, em vez de certeza pessoal. <br> Eis aqui a compreens�o intelectual. A maioria dos estudantes opera assim quando os dados não são completamente compreendidos por eles.<br>";}

if ($f >69 AND $b <-39 AND $g <-39)
{$sinmsg .= "<br>'F' alto e 'B' e 'G' baixos - Complexo de inferioridade.<br>";}

if ($b >69 AND $d <-39)
{$sinmsg .= "<br>'B' alto e 'D' baixo  - Man�aco � riso de insanidade.<br>";}

if ($c <-39 AND $h <-39)
{$sinmsg .= "<br>'C' e 'H' baixos - Problema de tempo presente.<br>";}

if ($d <-39 AND $j >69)
{$sinmsg .= "<br>'D' baixo e 'J' alto - Não pode conter-se. Compulsivo.<br>";}

if ($d <-39 AND $g >69)
{$sinmsg .= "<br>'D' baixo e 'G' alto - Extrovertido compulsivo.<br>";}

if ($a <-39 AND $b <-39 AND $c <-39 AND $d >69 AND $e >69 AND $f >69 AND $g <-39 AND $h <-39 AND $i <-39 AND $j <-39)
{$sinmsg .= "<br>'D','E' e 'F' altos e o restante baixo - Caprichoso, irresponsável e egocêntrico, invertido em todas as dinâmicas. Potencialmente destrutivo.<br>";}

if ($d <-39 AND $g <-39 AND $h <-39 AND $i <-39)
{$sinmsg .= "<br>'D', 'G', 'H' e 'I' baixos - Não concede beingness.<br>";}

if ($e <-39 AND $f <-39 AND $j <-39)
{$sinmsg .= "<br>'E', 'F' e 'J' baixos - Pessoa pode ter uma deficiência hormonal e deveria consultar um médico.<br>";}

if ($e <-39 AND $f <-39 AND $a >-40 AND $a <70 AND $b >-40 AND $b <70 AND $c >-40 AND $c <70 AND $d >-40 AND $d <70 AND $g >-40 AND $g <70 AND $h >-40 AND $h <70 AND $i >-40 AND $i <70 AND $j >-40 AND $j <70)
{$sinmsg .= "<br>'E' e 'F' baixos e o restante médio - A pessoa poder ser drogada ou alcoólatra ou estar sendo pesadamente suprimida.<br>";}

if ($e >69 AND $g <-39)
{$sinmsg .= "<br>'E' alto e 'G' baixo - Falta de iniciativa.<br>";}

if ($f >69 AND $g <-39 AND $h <-39)
{$sinmsg .= "<br>'F' alto e 'G' e 'H' baixos - Difícil de lidar com essa pessoa.<br>";}

if ($f <70 AND $i >69 AND $j >69 AND $b >69)
{$sinmsg .= "<br>'F' médio e 'I', 'J' e 'B' altos - Sweetness and light (Do�ura e Luz)<br>";}

if ($i >69 AND $j <-39)
{$sinmsg .= "<br>'I' alto e 'J' baixo - Propiciação<br>";}

if ($a <-39 AND $c <-39 AND $d <-39 AND $g <-39 AND $h <-39 AND $i <-39 AND $j <-39)
{$sinmsg .= "<br>'A', 'C', 'D', 'G', 'H', 'I' e 'J' baixos - Péssimos empregados.<br>";}


//SINDROMES SE��O D
if ($c >$a AND $c >$b AND $c >$d AND $c >$e AND $c >$f AND $c >$g AND $c >$h AND $c >$i AND $c >$j)
{$sinmsg .= "<br>'C' ACIMA DE TODOS OS DEMAIS - Auto controle condicionada devido a educação severa, onde a pessoa não podia demonstrar emoçãoo de espécie alguma ou expressar nenhuma opinião.<br>";}

if ($d >$a AND $d >$b AND $d >$c AND $d >$e AND $d >$f AND $d >$g AND $d >$h AND $d >$i AND $d >$j)
{$sinmsg .= "<br>'D' ACIMA DE TODOS OS DEMAIS - Euforia. Dê o máximo de só numa situação onde ele se encontra. Lutando com a vida e obetendo poucos resultados. O presente social permite que o indiv�duo encubra bastante bem e apresente um verniz de 'Não há nada errado comigo'.<br>";}

if ($e >$f)
{$sinmsg .= "<br>'E' MAIS ALTO QUE 'F' - A pessoa está fazendo mais do que ela c�moda e competentemente pode manejar. D E F precisam estar absolutamente alinhados, indicando que a pessoa est� manejando sua atividade com capacidade e certeza.<br>";}

if ($f >$e)
{$sinmsg .= "<br>'F' MAIS ALTO QUE 'E' - Não está fazendo tanto quanto poderia.<br>";}

if ($i >$a AND $i >$b AND $i >$c AND $i >$d AND $i >$e AND $i >$f AND $i >$g AND $i >$h AND $i >$j)
{$sinmsg .= "<br>'I' ACIMA DE TODOS OS DEMAIS - Pessoa é muito coração mole, alvo fácil ou tolo.<br>";}

//NENHUMA S�NDROME NO GR�FICO
if ($sinmsg == "<p><center><strong><font size=5 color=darkblue>SÍNDROMES</font></strong>
 <br>Informação sobre comparação das colunas<br><br></center>")
{$sinmsg .= "<center>NENHUMA SÍNDROME FOI ENCONTRADA</center>";}

$sinmsg .="</p><br><hr width=700 align=left><br>";

//PUXA O RESTO DOS CARTÕES
include "cards.inc";

$colmsg .= "<p><center><strong><font size=5 color=darkblue>COLUNAS</font></strong>
<br>Detalhes sobre cada coluna<br>
<font size=1>NOTA: Caso haja síndrome da seção B, ela estará disposta 
<br>aqui e suprime a avaliação do cartão da coluna referenciada.</font><br><br></center>";

// SINDROMES SE��O B
if ($a >69 AND $b <20)
{$colmsg .= "$a1b34";
$asuppress = 1;
$bsuppress = 1;}  

if ($a >69 AND $c <20)
{$colmsg .= "$a1c34"; 
$asuppress = 1;
$csuppress = 1;}

if ($b >69 AND $a <20)
{$colmsg .= "$b1a34";
$bsuppress = 1;
$asuppress = 1;}

if ($b >69 AND $c <20)
{$colmsg .= "$b1c34";
$bsuppress = 1;
$csuppress = 1;}

if ($c >69 AND $a <20)
{$colmsg .= "$c1a34";
$csuppress = 1;
$asuppress = 1;}

if ($c >69 AND $b <20)
{$colmsg .= "$c1b34";
$csuppress = 1;
$bsuppress = 1;}

if ($d >69 AND $a <20)
{$colmsg .= "$d1a34";
$dsuppress = 1;
$asuppress = 1;}

if ($e >69 AND $d <20)
{$colmsg .= "$e1d34";
$esuppress = 1;
$dsuppress = 1;}

if ($e >69 AND $f <20)
{$colmsg .= "$e1f34";
$esuppress = 1;
$fsuppress = 1;}

if ($f >69 AND $e <20)
{$colmsg .= "$f1e34";
$fsuppress = 1;
$esuppress = 1;}

if ($f >69 AND $g <20)
{$colmsg .= "$f1g34";
$fsuppress = 1;
$gsuppress = 1;}

if ($g >69 AND $f <20)
{$colmsg .= "$g1f34";
$gsuppress = 1;
$fsuppress = 1;}

if ($h >69 AND $i <20)
{$colmsg .= "$h1i34";
$hsuppress = 1;
$isuppress = 1;}

if ($i >69 AND $h <20)
{$colmsg .= "$i1h34";
$isuppress = 1;
$hsuppress = 1;}

include "novacoluna.inc";
}
?>