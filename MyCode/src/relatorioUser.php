<?php
session_start();

if (!$_SESSION["usuario"]) {
    ?><script>window.location.replace('logout.php');</script><?php
}

include('../config/config.dba.php');




$conn = new mysqli($host, $user, $pass, $base);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "select * from usuario where status = 'A' order by id_usuario";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) != 0) {
    ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Relatório de Usuário </title>
    <link href="../../public/CSS/logo.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <?php 
        include ("header.inc.php");
    ?>
    
    <table cellpadding="0" cellspacing="0" border="0" align="center" width="500" style="margin-top: 5%">
        <tr>
            <td rowspan="2">
                <img src="../../public/img/LOGO.png" alt="LOGO" width="200">
            </td>
            <td height="46">
                <i><u><center><font size="2" face="verdana"><?php echo "RELATÓRIO DE USUÁRIOS"; ?></font></center></u></i>
                <p>
                    <font size="-2" face="verdana">
                    <?php
                    date_default_timezone_set("America/Sao_Paulo");
                    $data = date("d/m/Y");
                    $hora = date("H:i:s");
                    echo "Acessado em: $data ás $hora";
                    ?>
                    </font>
                </p>
            </td>
        </tr>
    </table>
    <table border="0" align="center" cellpadding="4" cellspacing="4" width="800" align="center">
        <tr>
            <th width="100" align="center">Código</th>
            <th width="500">Nome</th>
            <th width="200">CPF</th>
            <th width="100">Status</th>
        </tr>
        <?php
        $row = 0;
        $x = 0;
        while ($row = $result->fetch_assoc()) {
            $x++;
            ?>
            <tr
            <?php
            if ($x % 2 == 0) {
                echo " bgcolor=#EAEAEA";
            }
            ?>
                >
                <td align="right">
                    <font size="-1" face="arial">
                    <?php echo ($row["id_usuario"]); ?>
                    </font>
                </td>
                <td>
                    <font size="-1" face="arial">
                    <?php echo ($row["nome_usuario"]); ?>
                    </font>
                </td>
                <td>
                    <font size="-1" face="arial">
                    <?php echo ($row["cpf_usuario"]); ?>
                    </font>
                </td>
                <td align="center">
                    <font size="-1" face="arial">
                    <?php echo ($row["status"]); ?>
                    </font>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
    <?php
}
mysqli_close($conn);
?>