<?php

session_start();

include('../config/config.dba.php');

$conn = new mysqli($host, $user, $pass, $base);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//Cadastro de Usuário
$usuario = $_POST["usuario"];
$senha = md5($_POST["senha"]);

$sql = "select * from usuario where nome_usuario = '$usuario' and senha_usuario = '$senha'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) === 1) {

    $row = $result->fetch_assoc();
    $_SESSION["usuario"] = strtoupper($row["nome_usuario"]);
    $_SESSION["logado"] = true;
    $_SESSION["id"] = $row["_usuario"];
    ?>
        <script> window.location = "../../public/index.php"; </script>
    <?php
} else {
    ?>
        <script> 
            alert("Login incorreto!!!");
            window.location = "login.php"; 
        </script>
    <?php
}
mysqli_close($conn);
?>
