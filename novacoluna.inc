<?php
//NOVA RESPOSTA DO TESTE DE PERSONALIDADE
if ($asuppress ==2)
{if ($a >69)
 {$colmsg .= "$a1";}
 elseif ($a >19)
 {$colmsg .= "$a2";}
 elseif ($a >-38)
 {$colmsg .= "$a3";}
 elseif ($a >-110)
 {$colmsg .= "$a4";}}

//COLUNA B 
if ($bsuppress == 2)
{if ($bmanic =="S")
 {$colmsg .= "$bm";}
 else{
 if ($b >69)
 {$colmsg .= "$b1";}
 elseif ($b >19)
 {$colmsg .= "$b2";}
 elseif ($b >-38)
 {$colmsg .= "$b3";}
 elseif ($b >-100)
 {$colmsg .= "$b4";}}}

//COLUNA C
if ($csuppress == 2)
{if ($c >69)
 {$colmsg .= "$c1";}
 elseif ($c >19)
 {$colmsg .= "$c2";}
 elseif ($c >-38)
 {$colmsg .= "$c3";}
 elseif ($c >-100)
 {$colmsg .= "$c4";}}
 
//COLUNA D
if ($dsuppress == 2)
{if ($d >69)
 {$colmsg .= "$d1";}
 elseif ($d >19)
 {$colmsg .= "$d2";}
 elseif ($d >-38)
 {$colmsg .= "$d3";}
 elseif ($d >-100)
 {$colmsg .= "$d4";}}
 
//COLUNA E 
if ($esuppress == 2)
{if ($emanic =="S")
 {$colmsg .= "$em";}
 else{
 if ($e >69)
 {$colmsg .= "$e1";}
 elseif ($e >19)
 {$colmsg .= "$e2";}
 elseif ($e >-38)
 {$colmsg .= "$e3";}
 elseif ($e >-100)
 {$colmsg .= "$e4";}}}
 
//COLUNA F 
if ($fsuppress == 2)
{
 if ($f >69)
 {$colmsg .= "$f1";}
 elseif ($f >19)
 {$colmsg .= "$f2";}
 elseif ($f >-38)
 {$colmsg .= "$f3";}
 elseif ($f >-100)
 {$colmsg .= "$f4";}}
 
//COLUNA G
if ($gsuppress == 2)
{
 if ($g >69)
 {$colmsg .= "$g1";}
 elseif ($g >19)
 {$colmsg .= "$g2";}
 elseif ($g >-38)
 {$colmsg .= "$g3";}
 elseif ($g >-100)
 {$colmsg .= "$g4";}}
 
//COLUNA H
if ($hsuppress == 2)
{if ($h >69)
 {$colmsg .= "$h1";}
 elseif ($h >19)
 {$colmsg .= "$h2";}
 elseif ($h >-38)
 {$colmsg .= "$h3";}
 elseif ($h >-100)
 {$colmsg .= "$h4";}}
 
//COLUNA I
if ($isuppress == 2)
{if ($i >69)
 {$colmsg .= "$i1";}
 elseif ($i >19)
 {$colmsg .= "$i2";}
 elseif ($i >-38)
 {$colmsg .= "$i3";}
 elseif ($i >-100)
 {$colmsg .= "$i4";}}
 
//COLUNA J
if ($jsuppress == 2)
{if ($j >69)
 {$colmsg .= "$j1";}
 elseif ($j >19)
 {$colmsg .= "$j2";}
 elseif ($j >-38)
 {$colmsg .= "$j3";}
 elseif ($j >-100)
 {$colmsg .= "$j4";}}
 
 if ($bmanic == 'S' or $emanic == 'S')
 {$colmsg .="$manicdef";}

//FIM
 $colmsg .= "<br><br><hr width=700 align=left><br>";
?>