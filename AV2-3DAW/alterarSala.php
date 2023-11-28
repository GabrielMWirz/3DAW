<?php

$servidor = "localhost";
$username = "root";
$senha = "";
$database = "av2";
$conn = new mysqli($servidor,$username,$senha,$database);
$sala = $_POST["sala"];
$nome = $_POST["nome"];

if($conn->connect_error)
{
   die("Falha ao se conectar!");
}

function alterarSala($sala, $nome)
{
  $SQL = "UPDATE `Candidatos` SET sala=$sala WHERE nome='$nome'";
  
  if ($conn->query($SQL) == TRUE)
  {
    echo "Dados atualizados com sucesso!";
  }
    
  else
  {
    echo "Erro ao atualizar dados.";
  }
}
$conn->close();

?>