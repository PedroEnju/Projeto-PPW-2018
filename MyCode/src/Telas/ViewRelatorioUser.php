<?php
include_once '../Functions/validator.php';
include_once '../../config/config.dba.php';
include_once '../Include/url.inc.php';

$title = "Relatório de Usuário";
include_once '../Include/head.inc.php';
?>
</head>
<body class="bg-light">
    <?php
    include_once '../Include/menu-var.inc.php';
    $active['RELATORIO'] = ' text-primary';
    include_once '../Include/menu.inc.php';

    $sql = "select 
                u.id_usuario,
                c.nome_cliente,
                u.nome_usuario,
                u.tipo_usuario,
                c.cpf,
                u.data_cadastro,
                u.status
            from usuario u
                inner join cliente c
                    on c.id_cliente = u.id_cliente
            order by id_usuario";
    $res = mysqli_query($conn, $sql);

    if (mysqli_num_rows($res) != 0) {
        include ("../Include/head.inc.php");
        ?>
        <table cellpadding="5" cellspacing="0" border="0" align="center" width="1000">
            <thead>
                <tr>
                    <td colspan="2" class="text-center">
                        <img src="<?php echo $URL["IMG"] ?>LOGO.png" alt="LOGO" width="150">
                    </td>
                    <td colspan="4" class="align-bottom">
                        <label class="form-control bg-light text-info">
                            Relatório de usuário
                            <?php
                            date_default_timezone_set("America/Sao_Paulo");
                            $data = date("d/m/Y H:i:s");
                            ?>
                            <b>Gerado em: </b>
                            <?php
                            echo $data;
                            ?>
                        </label>
                    </td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th width="100">Código</th>
                    <th width="300">Cliente</th>
                    <th width="200">Usuário</th>
                    <th width="50">Tipo</th>
                    <th width="150">CPF</th>
                    <th width="150">Data Cadastro</th>
                    <th width="50">Status</th>
                </tr>
                <?php
                $row = 0;
                $x = 0;
                while ($row = $res->fetch_assoc()) {
                    $x++;
                    ?>
                    <tr
                    <?php
                    if ($x % 2 == 0) {
                        echo " bgcolor=#EAEAEA";
                    }
                    ?>
                        >
                        <td>
                            <?php echo ($row["id_usuario"]); ?>
                        </td>
                        <td>
                            <?php echo ($row["nome_cliente"]); ?>
                        </td>
                        <td>
                            <?php echo ($row["nome_usuario"]); ?>
                        </td>
                        <td align="center">
                            <?php echo ($row["tipo_usuario"]); ?>
                        </td>
                        <td>
                            <?php echo ($row["cpf"]); ?>
                        </td>
                        <td>
                            <?php
                            $data = date_create($row["data_cadastro"]);
                            echo date_format($data, "d/m/Y H:i:s");
                            ?>
                        </td>
                        <td align="center">
                            <?php echo ($row["status"]); ?>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </body>
   
<?php
    }
    include_once '../Include/scripts.inc.php';
?>  
<script src="<?php echo $URL['JS'] ?>default.js"></script>
</html>
<?php
mysqli_close($conn);
