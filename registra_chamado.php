<?php

session_start();

//Trabando com a formaçao do texto
$titulo = str_replace('|','-',$_POST['titulo']);
$categoria = str_replace('|','-',$_POST['categoria']);
$descricao = str_replace('|','-',$_POST['descricao']);

$texto = $_SESSION['id'] . '|' . $titulo . '|' . $categoria . '|'. $descricao . PHP_EOL;

//Abrindo o arquivo
$arquivo = fopen('arquivo.txt', 'a'); //abrir arquivo para escrita

//Escrevendo o texto
fwrite($arquivo, $texto);

//Fechando o arquivo
fclose($arquivo);

/* echo $texto; */


//Redirecionar o usuario

header('Location: abrir_chamado.php');


?>