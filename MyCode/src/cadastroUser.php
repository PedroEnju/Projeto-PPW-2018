<?php
session_start();
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title> Cadastro Usuário </title>
        <link href="../../public/CSS/tabela.css" rel="stylesheet" type="text/css"/>
        <link href="../../public/CSS/logo.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body class="bg-light">
        <?php
        include ("header.inc.php");
        ?>
        <form name="usuario" action="finalizarCadastroUser.php" method="post" class="bg-light" onsubmit="verificaUser();">
            <table border="0" align="center" cellpadding="2" cellspacing="2" width="600" style="margin-top: 5%;">
                <tr>
                    <td colspan="2" align="center">
                        <img id="logo" src="../../public/img/LOGO.png" alt="LOGO" class="text-center">
                        <?php
                        date_default_timezone_set("America/Sao_Paulo");
                        $data = date("d/m/Y");
                        $hora = date("H:i:s");
                        echo "Acessado em: $data ás $hora";
                        ?>
                    </td>
                </tr>
                <tr>
                    <th colspan="2">
                        <font name="tabela_title" size="5" class="form-control text-center">CADASTRO DE USUÁRIOS</font>
                    </th>
                </tr>
                <colgroup width="210"></colgroup>
                <colgroup width="390"></colgroup>
                <tr>
                    <th class="form-control text-right">Usuário.:</th>
                    <td>
                        <input name="usuario" type="text" size="40%" maxlength="120" class="form-control bg-light">
                    </td>
                </tr>
                <tr>
                    <th class="form-control text-right">Senha.:</th>
                    <td>
                        <input name="senha" type="password" size="40%" maxlength="64" class="form-control bg-light">
                    </td>
                </tr>
                <tr>
                    <th class="form-control text-right">Confirmação da Senha.:</th>
                    <td>
                        <input name="senhaC" type="password" size="40%" maxlength="64" class="form-control bg-light">
                    </td>
                </tr>
                <tr>
                    <th class="form-control text-right">CPF.:</th>
                    <td>
                        <input name="cpf" type="text" size="40%" maxlength="14" placeholder="xxx.xxx.xxx-xx" class="form-control bg-light">
                    </td>
                </tr>
                <tr>
                    <th class="form-control text-right">Status.:</th>
                    <td>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="form-control bg-light">
                                    <input type="radio" id="status" name="status" value="A" checked="check"> Ativo    
                                    <input type="radio" id="status" name="status" value="I"> Inativo
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="right" style="padding: 1%">
                        <button type="submit" id="cancelar" name="cancelar" onclick="cancelar();" class="btn btn-danger btn-sm">
                            Cancelar
                        </button> 
                        <button type="button" id="cadastrar" name="cadastrar" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#statusCadastro">
                            Cadastrar
                        </button>
                    </td>
                </tr>
            </table>
            <div class="modal fade" id="statusCadastro" tabindex="-1" role="dialog" aria-labelledby="labelStatusCadastro" aria-hidden="true">
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
                            <button type="submit" id="continuar"  class="btn btn-primary"> Confirmar </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </body> 
    <script src="../../public/JS/cadastroUser.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>