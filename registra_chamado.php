<?php 
session_start();

//estamos trabalhando na montagem do texto
$titulo =  str_replace('#', '-', $_POST['titulo']);
$categoria  =  str_replace('#', '-', $_POST['categoria']);
$descricao  =  str_replace('#', '-', $_POST['descricao']);
//abrindo arquivo
$arquivo= fopen('../../app_help_desk/arquivo.txt', 'a');

$texto = $_SESSION['id'].' # '. $titulo  . ' # ' . $categoria . ' # ' . $descricao . PHP_EOL;
//escrevendo o texto
fwrite($arquivo, $texto);
//fechando o texto
fclose($arquivo);
// echo $texto;
header('location: abrir_chamado.php');

?>