<?php

$apx = ($a + 100)*1.5;
$bpx = ($b + 100)*1.5;
$cpx = ($c + 100)*1.5;
$dpx = ($d + 100)*1.5;
$epx = ($e + 100)*1.5;
$fpx = ($f + 100)*1.5;
$gpx = ($g + 100)*1.5;
$hpx = ($h + 100)*1.5;
$ipx = ($i + 100)*1.5;
$jpx = ($j + 100)*1.5;

if ($r22 =='+')
{$bmanic = "S";
$bwavy = "redbar.gif";}
else {
$bmanic = "N";
$ewavy = "bar.gif";}

if ($r197 =='+')
{$emanic = "S";
$ewavy = "redbar.gif";}
else {
$emanic = "N";
$bwavy = "bar.gif";}

$grafmsg .= "
<font color=darkblue size=5><center><strong>GRAFICO OCA</font></strong>
<br>Representação gráfica das colunas</center><br>

<table width=629 height=400 border=0 background='${root}fundo_graf.gif' align=center>
<tr height=51>
<td width=28></td>
<td align=center width=60></td>
<td align=center width=60></td>
<td align=center width=60></td>
<td align=center width=60></td>
<td align=center width=60></td>
<td align=center width=60></td>
<td align=center width=60></td>
<td align=center width=60></td>
<td align=center width=60></td>
<td align=center width=60></td>
</tr>

<tr height=300>
<td></td>
<td valign=bottom align=center><font size=2 color=darkblue><strong>$a</strong><br><IMG SRC='${root}bar.gif' width=10 height=$apx></td>
<td valign=bottom align=center><font size=2 color=darkblue><strong>$b</strong><br><IMG SRC='${root}$bwavy' width=10 height=$bpx></td>
<td valign=bottom align=center><font size=2 color=darkblue><strong>$c</strong><br><IMG SRC='${root}bar.gif' width=10 height=$cpx></td>
<td valign=bottom align=center><font size=2 color=darkblue><strong>$d</strong><br><IMG SRC='${root}bar.gif' width=10 height=$dpx></td>
<td valign=bottom align=center><font size=2 color=darkblue><strong>$e</strong><br><IMG SRC='${root}$ewavy' width=10 height=$epx></td>
<td valign=bottom align=center><font size=2 color=darkblue><strong>$f</strong><br><IMG SRC='${root}bar.gif' width=10 height=$fpx></td>
<td valign=bottom align=center><font size=2 color=darkblue><strong>$g</strong><br><IMG SRC='${root}bar.gif' width=10 height=$gpx></td>
<td valign=bottom align=center><font size=2 color=darkblue><strong>$h</strong><br><IMG SRC='${root}bar.gif' width=10 height=$hpx></td>
<td valign=bottom align=center><font size=2 color=darkblue><strong>$i</strong><br><IMG SRC='${root}bar.gif' width=10 height=$ipx></td>
<td valign=bottom align=center><font size=2 color=darkblue><strong>$j</strong><br><IMG SRC='${root}bar.gif' width=10 height=$jpx></td>
</tr>

<tr height=49>
<td></td><td></td><td></td><td></td><td></td><td></td>
<td></td><td></td><td></td><td></td><td></td></tr></table>

<font size=1>
<br><img width=15 height=15 src='${root}bar.gif'> TRAÇO NORMAL <font size=3>|</font>
<img width=15 height=15 src='${root}redbar.gif'> TRAÇO VARIÁVEL

<br><br><img width=15 height=15 src='${root}pixgray.gif'> ACEITÁVEL EM CONDIÇÕES NORMAIS <font size=3>|</font>
<img width=15 height=15 src='${root}pixdgray.gif'> ATENÇÃO DESEJÁVEL <font size=3>|</font>
<strong>ABAIXO DO PONTILHADO</strong> - ATENÇÃO URGENTE</font>

<br><br><hr width=700 align=left><br>
";
?>