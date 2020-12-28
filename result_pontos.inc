<?php
//ABRE A TABELA GERAL
echo "<title>Resultado do Seu teste de Personalidade</title>";


<table align=center cellspacing=0 border=1 cellpadding=2><tr>
<td align=center bgcolor=lightblue><font face=verdana size=1>Estabilidade</td>
<td align=center><font face=verdana size=1>Felicidade</td>
<td align=center  bgcolor=lightblue><font face=verdana size=1>Calma</td>
<td align=center><font face=verdana size=1>Certeza</td>
<td align=center  bgcolor=lightblue><font face=verdana size=1>Atividade</td>
</tr>

<tr>
<td align=center><font face=verdana size=2><b>$a</b></td>
<td align=center><font face=verdana size=2><b>$b</b></td>
<td align=center><font face=verdana size=2><b>$c</b></td>
<td align=center><font face=verdana size=2><b>$d</b></td>
<td align=center><font face=verdana size=2><b>$e</b></td>
</tr>

<tr bgcolor=darkblue>
<td height=1></td><td height=1></td><td height=1></td><td height=1></td><td height=1></td>
</tr>

<tr>
<td align=center><font face=verdana size=1>Aberto</td>
<td align=center  bgcolor=lightblue><font face=verdana size=1>ReponsÃ¡vel</td>
<td align=center><font face=verdana size=1>Analise</td>
<td align=center  bgcolor=lightblue><font face=verdana size=1>Acordo</td>
<td align=center><font face=verdana size=1>ComunicaÃ§Ã£o</td>
</tr>

<tr>
<td align=center><font face=verdana size=2><b>$f</b></td>
<td align=center><font face=verdana size=2><b>$g</b></td>
<td align=center><font face=verdana size=2><b>$h</b></td>
<td align=center><font face=verdana size=2><b>$i</b></td>
<td align=center><font face=verdana size=2><b>$j</b></td>
</tr>
<table>

";

echo "<table width=500 border=0 align=center><tr><td><font face=verdana>
<b><center><font size=2 color=green>Anote os resultados ACIMA para <br> comparar com um futuro teste.</font></center></b>";

//ESTÁVEL X INSTÁVEL
if ($a >0 and $asuppress ==0){echo "
<br><img align=left src='good.jpg'><font size=2 color=green><strong>PONTO POSITIVO - Estável, orientado</strong></font>
<font size=1>
<br>Você está com bons padrões, sabe o que quer ser. Tem bons dados estáveis e pode levar planos à completação.<br></font>";}
elseif ($a <1 and $asuppress ==0){echo "
<br><img align=left src='cancel.jpg'><font size=2 color=red><strong>PONTO A MELHORAR - Instável, impulsivo, disperso</strong></font>
<font size=1>
<br>Você não está tomando decisões com facilidade. Não está se preocupando com coisas como o dinheiro, saúde e posses. Está tendo dificuldades em começar coisas em geral e pode falhar ao cumprir compromissos.<br></font>";}

//FELIZ X TRISTE
if ($b >0 and $bsuppress==0){echo "
<br><img align=left src='good.jpg'><font size=2 color=green><strong>PONTO POSITIVO - Feliz</strong></font>
<font size=1>
<br>Você está alegre, sente-se bem e tem disposição para sorrir. Você têm considerado que existem muitas oportunidades e está atingindo seus objetivos.<br></font>";}
elseif ($b <1 and $bsuppress ==0){echo "
<br><img align=left src='cancel.jpg'><font size=2 color=red><strong>PONTO A MELHORAR - Infeliz, deprimido</strong></font>
<font size=1>
<br>Você não está alegre e está perturbado por problemas passados. Tem tido sonhos desagradáveis Não está atingindo suas metas e tem pensado muito em desgostos e doenças.<br></font>";}

//CALMO X NERVOSO
if ($c >0 and $csuppress ==0){echo "
<br><img align=left src='good.jpg'><font size=2 color=green><strong>PONTO POSITIVO - Calmo</strong></font>
<font size=1>
<br>Você é relaxado, calmo, não tem fobias e dorme bem. Tem um bom controle da voz e dos músculos. Você não se surpreende com facilidade, dorme bem à noite e volta ao normal rapidamente depois de um desapontamento. Não tem habitos nervosos e não se distraí com facilidade.<br></font>";}
elseif ($c <1 and $csuppress ==0){echo "
<br><img align=left src='cancel.jpg'><font size=2 color=red><strong>PONTO A MELHORAR - Nervoso</strong></font>
<font size=1>
<br>Você está meio preocupado, tenso e não relaxa com facilidade. Tem tido hábitos nervosos e se distraí com facilidade. Fica muito cansado quando se esforça um pouco e não volta ao normal com facilidade depois de um desapontamento. <a href='http://www.dianeticabrasil.com.br/?url=prod/dianetica#dvd' target=_parent>INDICAÇÃO: DVD DIANÉTICA</a><br></font>";}

//CERTEZA X INCERTEZA
if ($d >0 and $dsuppress ==0){echo "
<br><img align=left src='good.jpg'><font size=2 color=green><strong>PONTO POSITIVO - Certeza, consistência</strong></font>
<font size=1>
<br>Você é confiável e confia em sí próprio, tem um temperamento equilibrado e sabe o que está fazendo. Você pensa logicamente, tem consciência dos valores, é responsável e pode conter-se se quiser.<br></font>";}
elseif ($d <1 and $dsuppress ==0){echo "
<br><img align=left src='cancel.jpg'><font size=2 color=red><strong>PONTO A MELHORAR - Incerto, impulsivo, inconsistente</strong></font>
<font size=1>
<br>Você está sem auto-confiança, e imprevisível. Têm mudado de idéia sem razão aparente e não tem conseguido se conter muito.<br></font>";}

//ATIVO X INATIVO
if ($e >0 and $esuppress ==0){echo "
<br><img align=left src='good.jpg'><font size=2 color=green><strong>PONTO POSITIVO - Ativo, em movimento</strong></font>
<font size=1>
<br>Você tem vigor e tem uma grande variedade de interesses e atividades. É energico, toma responsabilidade e tem iniciativa. É atento, tem muito o que fazer, seus dias estão cheios e não espera os outros te empurrarem, você toma a atitude.<br></font>";}
elseif ($e <1 and $esuppress ==0){echo "
<br><img align=left src='cancel.jpg'><font size=2 color=red><strong>PONTO A MELHORAR - Inativo, Sem movimento</strong></font>
<font size=1>
<br>Você está tendo uma atitude mais passiva, falta iniciativa e a preguiça atrapalha. Tem sido mais reservado. Você está com tendência à esperar que algo aconteça e evitar a responsabilidade. Não tem tido muito o que fazer e a agenda não é muito cheia. <a href='http://www.dianeticabrasil.com.br/?url=prod/dianetica#dvd' target=_parent>INDICAÇÃO: DVD DIANÉTICA</a><br></font>";}

//CAPAZ X INIBIDO
if ($f >0 and $fsuppress ==0){echo "
<br><img align=left src='good.jpg'><font size=2 color=green><strong>PONTO POSITIVO - Capaz, aberto, agressivo</strong></font>
<font size=1>
<br>Você é auto-confiante. Você é aberto, e tem boa idéia das suas próprias capacidades. Expressa livremente opiniões.<br></font>";}
elseif ($f <1 and $fsuppress ==0){echo "
<br><img align=left src='cancel.jpg'><font size=2 color=red><strong>PONTO A MELHORAR - Inibido, submisso</strong></font>
<font size=1>
<br>Você tem duvidado da sua própria capacidade, está inibido. Tem escondido os sentimentos e já foi parado muitas vezes pelos outros. Tem mantido as opiniões para sí próprio.<br></font>";}

//CAUSA X EFEITO
if ($g >0 and $gsuppress ==0){echo "
<br><img align=left src='good.jpg'><font size=2 color=green><strong>PONTO POSITIVO - Responsável, objetivo, causa</strong></font>
<font size=1>
<br>Extrovertido, vê o que causou e admite ter causado sem culpa. Toma decisões sensatas e pode ver o ponto de vista dos outros. É imparcial e não é ciumento, pode tomar decisões se baseando nos fatos e é capaz de iniciativa. É lógico e científico.<br></font>";}
elseif ($g <1 and $gsuppress ==0){echo "
<br><img align=left src='cancel.jpg'><font size=2 color=red><strong>PONTO A MELHORAR - Irresponsável, em efeito</strong></font>
<font size=1>
<br>Você está introvertido, pensando que os demais estão contra você. Tem coisa sobre os quais você prefere não falar no momento e evita grandes responsabilidades. Tem tomado decisões baseadas mais na emoção do que na razão.<br></font>";}

//ESTIMAÇÃO X CRÍTICA
if ($h >0 and $hsuppress ==0){echo "
<br><img align=left src='good.jpg'><font size=2 color=green><strong>PONTO POSITIVO - Lógico, estimação correta</strong></font>
<font size=1>
<br>Não é difícil de agradar, pensa bem das pessoas e não suspeita o tempo todo. Compreende os demais e pode criticar e aceitar crítica. Aceita os outros como são e se não pode fazer o  que quer, arranja um substituto.<br></font>";}
elseif ($h <1 and $hsuppress ==0){echo "
<br><img align=left src='cancel.jpg'><font size=2 color=red><strong>PONTO A MELHORAR - Muito crítico</strong></font>
<font size=1>
<br>Você está intolerante e suspeita dos demais. Não tem tido muito tato e fica ressentido facilmente.<br></font>";}

//APRECIATIVO X DESACORDO
if ($i >0 and $isuppress ==0){echo "
<br><img align=left src='good.jpg'><font size=2 color=green><strong>PONTO POSITIVO - Apreciativo, empatia</strong></font>
<font size=1>
<br>Você é amigável e cortes, responde amavelmante à necessidades dos outros e tem consideração pelos demais. É verdadeiro e pode ver como os outros se sentem em determinadas situações.<br></font>";}
elseif ($i <1 and $isuppress ==0){echo "
<br><img align=left src='cancel.jpg'><font size=2 color=red><strong>PONTO A MELHORAR - Falta de acordo</strong></font>
<font size=1>
<br>Não tem feito amigos com facilidade e não tem pensado muito nas necessidades e nos sentimentos dos demais.<br></font>";}

//COMUNICATIVO X RETRAÍDO
if ($j >0 and $jsuppress ==0){echo "
<br><img align=left src='good.jpg'><font size=2 color=green><strong>PONTO POSITIVO - Comunicativo</strong></font>
<font size=1>
<br>Você é expansivo e acolhedor, amigável e é uma ótima companhia, tem muitos amigos e posses. É cordial e expressa opiniões livremente.<br></font>";}
elseif ($j <1 and $jsuppress ==0){echo "
<br><img align=left src='cancel.jpg'><font size=2 color=red><strong>PONTO A MELHORAR - Retraído</strong></font>
<font size=1>
<br>Você tem sido mais individualizado e introvertido. E tem escondido os seus sentimentos. <a href='http://www.dianeticabrasil.com.br/?url=prod/dianetica#dvd' target=_parent>INDICAÇÃO: DVD DIANÉTICA.</a><br></font>";}

//SINDROMES
include "avaliador2.php";

//MENSAGEM FINAL
echo "<p><font size=2><font color=darkblue><strong>COMPROVE: </strong></font>Volte a fazer esse teste daqui há alguns dias e compare os resultados. USE Dianética e veja os seus traços subirem 50, 70 ou até 150 pontos como em muitos casos que eu vi pessoalmente.</font>";
echo "<p><font size=2><font color=darkblue><strong>ATENÇÃO: </strong></font>A Associação Brasileira de Dianética <b>não tem fins lucrativos</b> e nossos voluntários estão à sua disposição para atendê-lo <b>sem qualquer custo </b>para uma análise completa do seu teste.";

echo "
<b><center>
<form method=post action=endteste.php>
O que você achou do teste e da avaliação?<br>
<font size=1>
<input type=hidden name=nome value='$nome $sobrenome'>
<input type=hidden name=email value='$mail'>
<input type=hidden name=fone value='$telefone . $telefone2'>
<textarea name=opiniao></textarea><br>
<input type=radio name=quero value=QUERO checked>Quero colocar meu nome na lista para ganhar convites <br>
para eventos da Dianética.<br><br>
<input type=radio name=quero value='NÃO quero' >Não obrigado, vou continuar analisando e depois decido.<br><br>

<input type=submit value='Enviar e Finalizar'>
</font>
</b>
</form>

<br><br></td></tr></table>";
?>