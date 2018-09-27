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

if (validaCPF($cpf)) {

    $sql = "select * from usuario where nome_usuario = '$usuario'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 0) {
        $sql = "insert into usuario (nome_usuario,senha_usuario,cpf_usuario,status) values ('$usuario','$senha','$cpf','$status')";
        try {
            mysqli_query($conn, $sql);
            ?><script> window.location = "../../public/index.php";</script><?php
        } catch (Exception $e) {
            echo "Error: " . $e . "<br>" . mysqli_error($conn);
        }
    } else {
        ?><script> window.location = "../../public/index.php";</script><?php
    }
} else {
    ?>
    <script>
        alert("CPF inválido");
        window.location = "../../public/index.php";
    </script>
    <?php
}

function validaCPF($cpf = null) {

    if (empty($cpf)) {
        return false;
    }

    $cpf = preg_replace("/[^0-9]/", "", $cpf);
    $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);

    if (strlen($cpf) != 11) {
        return false;
    } else if ($cpf == '00000000000' ||
            $cpf == '11111111111' ||
            $cpf == '22222222222' ||
            $cpf == '33333333333' ||
            $cpf == '44444444444' ||
            $cpf == '55555555555' ||
            $cpf == '66666666666' ||
            $cpf == '77777777777' ||
            $cpf == '88888888888' ||
            $cpf == '99999999999') {
        return false;
    } else {
        for ($t = 9; $t < 11; $t++) {
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf{$c} * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf{$c} != $d) {
                return false;
            }
        }
        return true;
    }
}

mysqli_close($conn);
?>