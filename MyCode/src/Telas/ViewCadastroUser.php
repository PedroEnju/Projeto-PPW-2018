<?php
include_once '../Functions/validator.php';
include_once '../../config/config.dba.php';
include_once '../Include/url.inc.php';

$title = "Cadastro Usuário";
include_once '../Include/head.inc.php';
?>
</head>
<body class="bg-light">
    <?php
    include_once '../Include/menu-var.inc.php';
    $active['CADASTRO'] = ' text-primary';
    include_once '../Include/menu.inc.php';
    ?>
</header>
<main style="margin-top: 7%;">
    <form id="form-usuario" name="form-usuario" action="../Functions/finalizarCadastroUser.php" method="POST" class="bg-light">
        <table border="0" align="center" cellpadding="2" cellspacing="2" width="600">
            <thead>
                <tr>
                    <td class="text-center">
                        <img id="logo" src="<?php echo $URL["IMG"] ?>LOGO.png" alt="LOGO" width="150">
                    </td>
                    <td class="align-bottom">
                        <label class="form-control bg-light text-info">
                            <?php
                            date_default_timezone_set("America/Sao_Paulo");
                            $data = date("d/m/Y H:i:s");
                            ?>
                            <b>Acessado em: </b>
                            <?php
                            echo $data;
                            ?>
                        </label>
                    </td>
                </tr>
                <tr hidden>
                    <td colspan="2">
                        <input id="cadTipo" name="cadTipo" type="text" value="1">
                    </td>
                </tr>
                <tr>
                    <th colspan="2">
                        <font name="tabela_title" size="5" class="form-control text-center">CADASTRO DE USUÁRIOS</font>
                    </th>
                </tr>
            </thead>
            <colgroup width="210"></colgroup>
            <colgroup width="390"></colgroup>
            <tbody>
                <tr>
                    <th class="form-control text-right">Login.:</th>
                    <td>
                        <input id="usuario" name="usuario" type="text" size="40%" maxlength="120" class="form-control bg-light">
                    </td>
                </tr>
                <tr>
                    <th class="form-control text-right">Senha.:</th>
                    <td>
                        <input id="senha" name="senha" type="password" size="40%" maxlength="64" class="form-control bg-light">
                    </td>
                </tr>
                <tr>
                    <th class="form-control text-right">Confirmação da Senha.:</th>
                    <td>
                        <input id="senhaC" name="senhaC" type="password" size="40%" maxlength="64" class="form-control bg-light">
                    </td>
                </tr>
                <?php
                if ($_SESSION["tipo"] === 'A') {
                    ?>
                    <tr>
                        <th class = "form-control text-right">Tipo.:</th>
                        <td>
                            <div class = "input-group">
                                <div class = "input-group-prepend">
                                    <div class = "form-control bg-light">
                                        <input type = "radio" id = "tipo" name = "tipo" value = "U" checked = "check"> Usuário 
                                        <input type = "radio" id = "tipo" name = "tipo" value = "A"> Admin
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="2" align="right" style="padding: 1%">
                        <button type="button" id="cancelar" name="cancelar" class="btn btn-danger btn-sm">
                            Cancelar
                        </button> 
                        <button type="button" id="cadastrar" name="cadastrar" class="btn btn-primary btn-lg" data-toggle="modal">
                            Cadastrar
                        </button>
                    </td>
                </tr>
            </tfoot>
        </table>
        <div class="modal fade" id="modalCadastro" tabindex="-1" role="dialog" aria-labelledby="labelModalCadastro" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalRegistrar">Informações sobre o Cadastro</h5>
                    </div>
                    <div class="modal-body bg-info">
                        <h1 align="center">Deseja confirmar o cadastro?</h1>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="cancelar"  class="btn btn-danger" data-dismiss="modal"> Cancelar </button>
                        <button type="button" id="continuar"  class="btn btn-primary"> Confirmar </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</main>
</body> 
<?php
include_once '../Include/scripts.inc.php';
?>  
<script src="<?php echo $URL['JS'] ?>default.js"></script>
<script src="<?php echo $URL['JS'] ?>cadastroUser.js"></script>
</html>
<?php
mysqli_close($conn);
