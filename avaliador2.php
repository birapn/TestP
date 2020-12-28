<?php
// INICIO
$bsinmsg .= "
<br><hr width=90% align=left>
<p><center><strong><font size=2 color=darkblue>Outros Pontos a Observar</font></strong>
<br></center>
<font size=1>";

//MAYBE
if ($mc >100)
{$bsinmsg .="<br>Muitas respostas incertas. O teste não é válido, exceto para mostrar que você está preso em muitas dúvidas na vida ou não está disposto a passar pelas perguntas. Isso geralemtne indica uma inabilidade de lidar com as coisas.<br>";
$suppress =1;
$reason ="maybe";} 
 
//SINDROMES SEÃ‡ÃƒO A
if ($a >69 AND $b >69 AND $c >69 AND $d >69 AND $e >69 AND $f >69 AND $g >69 AND $h >69 AND $i >69 AND $j >69)
{$bsinmsg .="<br>Todos os pontos do teste estão altos. Isso é bom ou pode indicar que você pessoa não tem um contato real com o universo físico. Se esse for o caso, você pode estar muito suprimido pelo seu ambiente.<br>";
$suppress =1;
$reason ="teetie";}

if ($a >-96 AND $a <-39 AND $b >-101 AND $b <-66 AND $c >-95 AND $c <-64 AND $d >-84 AND $d <36 AND $e >2 AND $e <46 AND $f >21 AND $f <73 AND $g >-93 AND $g <-54 AND $h >-99 AND $h < -34 AND $i >-91 AND $i <19 AND $j >-73 AND $j <23)
{$bsinmsg .="<br><font color=red>O gráfico randômico. Isto acontece quando uma pessoa responde ao OCA randomicamente. OU porque eles não entendem as questões ou porque por alguma razão pura e simplesmente não ligam, uma pessoa com este gráfico respondeu ao questionário randomicamente e não é possível analisa-lo mais que isto.</font><br>";
$suppress =1;
$reason ="ramdom";}

if ($g >89 and $i >89)
{$bsinmsg .="<br><font color=red>Você pode ter um complexo de mártir ou de perseguição.</font><br>";}

//SUPRESSOR
if ($suppress ==1)
{$bsinmsg .= "<br><center><strong><font color=red>Avaliação concluida.</font></center></strong><br>";}

else {
//SINDROMES SEÇAO C
if ($a <-39 AND $b <-39 AND $c <-39)
{$bsinmsg .= "<br>'A', 'B' e 'C' baixos - Você está fixo em perdas do passado. Frequentemente indicam um abandono na infância.<br>";}

if ($a <-39 AND $e >69)
{$bsinmsg .= "<br>'A' Baixo e 'E' alto - Atenção muito dispersa.<br>";}

if ($e >69 AND $a <-39 AND $b <-39 AND $c <-39)
{$bsinmsg .= "<br>'E' alto e 'A', 'B' e 'C' baixos - Pode pensar que a vida não vale a pena.<br>";}

if ($a <-39 AND $j <-39 AND $b >-40 AND $b <70 AND $c >-40 AND $c <70 AND $d >-40 AND $d <70 AND $e >-40 AND $e <70 AND $f >-40 AND $f <70 AND $g >-40 AND $g <70 AND $h >-40 AND $h <70 AND $i >-40 AND $i <70)
{$bsinmsg .= "<br>'A' e 'J' Baixos e o restante médio (entre -40 e 70) - A pessoa está em um ambiente supressivo, onde sua realidade é reduzida, e não pode comunicar por que isso será distorcido e usado contra você.<br>";}

if ($f >69 AND $a <-39 AND $c <-39 AND $g <-39)
{$bsinmsg .= "<br>'F' alto e 'A', 'C' e 'G' baixos - Provavelmente você está propenso a ímpetos de ira. Temperamental.<br>";}

if ($a >69 AND $h <-39)
{$bsinmsg .= "<br>'A' alto e 'H' Baixo  - Perfeccionista.<br>";}

if ($a >69 AND $d >-40 AND $d <70)
{$bsinmsg .= "<br>'A' alto e 'D' Medio  - Você opera individualmente sob dados que aprendeu, em vez de certeza pessoal. <br> Você tem compreensão intelectual. A maioria dos estudantes opera assim quando os dados não são completamente compreendidos por eles.<br>";}

if ($f >69 AND $b <-39 AND $g <-39)
{$bsinmsg .= "<br>'F' alto e 'B' e 'G' baixos - Complexo de inferioridade.<br>";}

if ($b >69 AND $d <-39)
{$bsinmsg .= "<br>'B' alto e 'D' baixo  - Alegria e tristeza muito variáveis.<br>";}

if ($c <-39 AND $h <-39)
{$bsinmsg .= "<br>'C' e 'H' baixos - Você está lidando com um problema em tempo presente.<br>";}

if ($d <-39 AND $j >69)
{$bsinmsg .= "<br>'D' baixo e 'J' alto - Não pode conter-se. Compulsivo.<br>";}

if ($d <-39 AND $g >69)
{$bsinmsg .= "<br>'D' baixo e 'G' alto - Está extrovertido compulsivamente, não pode se conter.<br>";}

if ($a <-39 AND $b <-39 AND $c <-39 AND $d >69 AND $e >69 AND $f >69 AND $g <-39 AND $h <-39 AND $i <-39 AND $j <-39)
{$bsinmsg .= "<br>'D','E' e 'F' altos e o restante baixo - Caprichoso, um tanto irresponsável e pensa demais em sí próprio. Pode ter uma inclinação à destruição.<br>";}

if ($d <-39 AND $g <-39 AND $h <-39 AND $i <-39)
{$bsinmsg .= "<br>'D', 'G', 'H' e 'I' baixos - Não admite que as pessoas sejam que elas são. Gostaria de mudar a forma de pensar dos outros.<br>";}

if ($e <-39 AND $f <-39 AND $j <-39)
{$bsinmsg .= "<br>'E', 'F' e 'J' baixos - Você pode ter uma deficiência hormonal e deveria consultar um médico.<br>";}

if ($e <-39 AND $f <-39 AND $a >-40 AND $a <70 AND $b >-40 AND $b <70 AND $c >-40 AND $c <70 AND $d >-40 AND $d <70 AND $g >-40 AND $g <70 AND $h >-40 AND $h <70 AND $i >-40 AND $i <70 AND $j >-40 AND $j <70)
{$bsinmsg .= "<br>'E' e 'F' baixos e o restante médio - Geralmente este perfil indica uma pessoa drogada ou alcoólatra ou uma pessoa que esta sendo pesadamente suprimida por outra.<br>";}

if ($e >69 AND $g <-39)
{$bsinmsg .= "<br>'E' alto e 'G' baixo - Falta de iniciativa.<br>";}

if ($f >69 AND $g <-39 AND $h <-39)
{$bsinmsg .= "<br>'F' alto e 'G' e 'H' baixos - É difícil de lidar com você. Gênio forte.<br>";}

if ($f <70 AND $i >69 AND $j >69 AND $b >69)
{$bsinmsg .= "<br>'F' médio e 'I', 'J' e 'B' altos - Doçura e Luz, pouco contato real com o universo físico.<br>";}

if ($i >69 AND $j <-39)
{$bsinmsg .= "<br>'I' alto e 'J' baixo - Você gosta de agradar os outros para demonstrar compaixão.<br>";}

if ($a <-39 AND $c <-39 AND $d <-39 AND $g <-39 AND $h <-39 AND $i <-39 AND $j <-39)
{$bsinmsg .= "<br>'A', 'C', 'D', 'G', 'H', 'I' e 'J' baixos - Você tem dificuldades no trabalho, principalmente se ocupa cargos de líder.<br>";}


//SINDROMES SEÇÃO D
if ($c >$a AND $c >$b AND $c >$d AND $c >$e AND $c >$f AND $c >$g AND $c >$h AND $c >$i AND $c >$j)
{$bsinmsg .= "<br>'C' ACIMA DE TODOS OS DEMAIS - Auto controle. Você está condicionado(a) devido a educação severa, onde você não podia demonstrar emoção de espécie alguma ou expressar nenhuma opinião.<br>";}

if ($d >$a AND $d >$b AND $d >$c AND $d >$e AND $d >$f AND $d >$g AND $d >$h AND $d >$i AND $d >$j)
{$bsinmsg .= "<br>'D' ACIMA DE TODOS OS DEMAIS - Euforia. Você dá o máximo de sí numa situação onde se encontra. Lutando com a vida e obtém poucos resultados. O presente social permite que você encubra bastante bem e apresente um verniz de 'Não há nada errado comigo'.<br>";}

if ($e >$f)
{$bsinmsg .= "<br>'E' MAIS ALTO QUE 'F' - Você tem feito mais do que cômoda e competentemente pode manejar. D E F precisam estar absolutamente alinhados, indicando que a você está manejando sua atividade com capacidade e certeza.<br>";}

if ($f >$e)
{$bsinmsg .= "<br>'F' MAIS ALTO QUE 'E' - Você não está fazendo tanto quanto poderia.<br>";}

if ($i >$a AND $i >$b AND $i >$c AND $i >$d AND $i >$e AND $i >$f AND $i >$g AND $i >$h AND $i >$j)
{$bsinmsg .= "<br>'I' ACIMA DE TODOS OS DEMAIS - Pessoa é muito coração mole, alvo fácil ou tolo.<br>";}
}
$bsinmsg .="</p><br><hr width=90% align=left><br>";

echo $bsinmsg;

?>