<?php

session_start();

include('../../config/config.dba.php');

//Cadastro de Usuário
$usuario = $_POST["usuario"];
$senha = md5($_POST["senha"]);

$sql = "select 
            u.id_usuario,
            c.nome_cliente,
            u.tipo_usuario
        from usuario u
            inner join cliente c
		on c.id_cliente = u.id_cliente 
        where nome_usuario = '$usuario'
        and senha_usuario = '$senha'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) == 1) {
    $row = $result->fetch_assoc();
    $_SESSION["id"] = $row["id_usuario"];
    $_SESSION["usuario"] = ucfirst($row["nome_cliente"]);
    $_SESSION["tipo"] = $row["tipo_usuario"];
}
header('location: ../../../public/index.php');

mysqli_close($conn);
