<!DOCTYPE HTML>
<html lang="pt-br">

<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="estilo.css">
<title>discursiva 2 resposta - resultado
</title>
</head>

<body>

<?php

if (!($_POST['peso'] > 0 && $_POST['altura'] > 0)) {
  echo "<script language=\"JavaScript\">";
  echo "alert('Informe valores válidos.');";
  echo "location.href='index.php';";
  echo "</script>";
}

?>
<table>
<tr>
<th>Cálculo de IMC
</th>
</tr>
</table>

<table cellspacing="10">
<tr>
<th class="th2" colspan="3">Resultado da Avaliação
</th>
</tr>
<tr>
<td>
<?php
require ("internauta.php");

$internauta = new Internauta ();
$internauta->setNomeCompleto($_POST['nomecompleto']);
$internauta->setDataNascimento($_POST['datanascimento']);
$internauta->setSexo($_POST['sexo']);
$internauta->setPeso(str_replace(",",".",$_POST['peso']));
$internauta->setAltura(str_replace(",",".",$_POST['altura']));
$internauta->calculaIMC();

echo "Seja bem-vindo ".$internauta->getNomeCompleto().", indivíduo ".$internauta->getSexo().", nascido em ".$internauta->getDataNascimento().".";
echo "<br>Seu IMC é ".number_format($internauta->buscaIMC(),2,',','.')." e você está com \"".$internauta->buscaCategoria()."\".";
echo "<br>Resultado obtido a partir do peso ".number_format($internauta->getPeso(),2,',','.')."kg e da altura ".number_format($internauta->getAltura(),2,',','.')."m.";

?>
</td>
</tr>
</table>

</body>

</html>