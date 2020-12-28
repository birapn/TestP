<?php
//CONFIGURAÇÃO

$root = 'https://dianeticabrasil.com.br/testep/';

//BUSCA AS VARIÁVEIS
include "buscavars.inc";

//FAZ O CÁLCULO DA TRANPARENCIA
include "transparencia.inc";

//ESCOLHE  O GABARITO COM BASE NO SEXO E IDADE E GERA O RESULTADO FINAL DE CADA COLUNA
if ($sexo ==MASC AND $idade ==MAIOR)
{include "h_maior.inc";}
elseif ($sexo ==MASC AND $idade ==MENOR)
{include "h_menor.inc";}
elseif ($sexo ==FEM AND $idade ==MAIOR)
{include "f_maior.inc";}
elseif ($sexo ==FEM AND $idade ==MENOR)
{include "f_menor.inc";}

/*//TESTA FUNC
$a = 80;
$b = 80;
$c = 80;
$d = 60;
$e = 80;
$f = 80;
$g = 80;
$h = 80;
$i = 80;
$j = 80;*/


//1 -  FAZ O GRAFICO PARA MENSAGEM
include "grafico.inc";
//2 - PUXA OS CARTÕES
include "avaliador.php";
//3 - MANDA E-MAILS 
include "emails.inc";

//CABEÇALHO
include "header.inc";

//RESULTADO

{include "endtest.inc";}

//if ($suppress ==2)
//{include "resp_novoteste.inc";}
//else
//{include "result_falha.inc";}
//RODAPÉ
include "footer.inc";

/*echo "$msg";*/

?>