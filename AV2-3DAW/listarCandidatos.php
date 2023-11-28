<?php

$servidor = "localhost";
$username = "root";
$senha = "";
$database = "av2";
$conn = new mysqli($servidor,$username,$senha,$database);
$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$identidade = $_POST["identidade"];
$email = $_POST["email"];
$cargo = $_POST["cargo"];
$sala = $_POST["sala"];

if($conn->connect_error)
{
    die("Falha ao se conectar!");
}

$SQL = "SELECT * from `candidatos`";
$resul = $conn->query($SQL);
  
?>