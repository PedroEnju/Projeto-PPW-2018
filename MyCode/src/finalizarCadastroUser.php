<?php

include('../config/config.dba.php');

$conn = new mysqli($host, $user, $pass, $base);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//Cadastro de Usuário
$usuario = $_POST["usuario"];
$senha = md5($_POST["senha"]);
$cpf = $_POST["cpf"];
$status = $_POST["status"];

$sql = "select * from usuario where nome_usuario = '$usuario'";
if (mysqli_query($conn, $sql)) {
    $sql = "insert into usuario (nome_usuario,senha_usuario,cpf_usuario,status) values ('$usuario','$senha','$cpf','$status')";
    if (mysqli_query($conn, $sql)) {
        echo "Cadastro efetuado com sucesso";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
mysqli_close($conn);
