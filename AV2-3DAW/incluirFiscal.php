<?php

$servidor = "localhost";
$username = "root";
$senha = "";
$database = "av2";
$conn = new mysqli($servidor,$username,$senha,$database);
$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$sala = $_POST["sala"];

if($connection->connect_error)
{
    die("Falha ao se conectar!");
}

function inserirFiscais($nome, $cpf, $sala)
{
  $SQL = INSERT INTO `fiscais`(`nome`, `cpf`, `sala`) VALUES ('$nome','$cpf','$sala');

  if ($conn->query($SQL) == TRUE)
  {
    echo "Dados incluidos com sucesso!";
  }
  
  else
  {
    echo "Erro ao incluir dados.";
  }
  
}

$conn->close();

?>