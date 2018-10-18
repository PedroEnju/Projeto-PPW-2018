<?php
include_once '../Functions/validator.php';
include_once '../../config/config.dba.php';
include_once '../Include/url.inc.php';

$title = "Perfil";
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
<main>
    <form id="form-usuario" name="form-usuario" action="../Functions/finalizarCadastroUser.php" method="POST" class="bg-light">
        <table border="0" align="center" cellpadding="2" cellspacing="2" width="600">
            <thead>
                <tr>
                    <th colspan="2">
                        <font name="tabela_title" size="5" class="form-control text-center bg-dark text-light"> PERFIL </font>
                    </th>
                </tr>
            </thead>
            <colgroup width="210"></colgroup>
            <colgroup width="390"></colgroup>
            <tbody>
                <tr>
                    <td colspan="2">
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control text-capitalize" id="nome" placeholder="Nome completo">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="cpf">CPF</label>
                                <input type="text" class="form-control" id="cpf" placeholder="xxx.xxx.xxx-xx">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="data_nascimento">Data de Nascimento</label>
                                <input type="date" class="form-control" id="data_nascimento" maxlength="10">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" placeholder="Email">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="estado">Estado</label>
                                <select id="estado" name="estado" class="form-control" required>
                                    <option value="" selected disabled="disabled" hidden>Selecione um estado</option>
                                    <?php
                                    $sqlE = "select * from estado where status = 'A'";
                                    $resE = mysqli_query($conn, $sqlE);
                                    while ($row = mysqli_fetch_assoc($resE)) {
                                        ?>
                                        <option value="<?php
                                        echo $row['id_estado'];
                                        $id_estado[] = $row['id_estado'];
                                        ?>"><?php echo $row["nome_estado"]; ?></option>
                                                <?php
                                            }
                                            ?>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="cidade">Cidade</label>
                                <input name="cidade" id="cidade" type="text" class="form-control text-capitalize autocomplete">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputZip">Zip</label>
                                <input type="text" class="form-control" id="inputZip">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="cpf">Sexo</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="form-control bg-light">
                                            <input type="radio" id="sexo" name="sexo" value="M" checked = "check"> Masculino 
                                            <input type="radio" id="sexo" name="sexo" value="F"> Feminino
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="data_nascimento">Data de Nascimento</label>
                                <input type="date" class="form-control" id="data_nascimento" maxlength="10">
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="2" align="right" style="padding: 1%">
                        <button type="button" id="cancelar" name="cancelar" class="btn btn-danger btn-sm">
                            Pular etapa
                        </button> 
                        <button type="button" id="cadastrar" name="cadastrar" class="btn btn-primary btn-lg" data-toggle="modal">
                            Continuar
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
                        <button type="button" id="continuar"  class="btn btn-primary"> Finalizar </button>
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
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.js"></script>
<script src="<?php echo $URL['JS'] ?>default.js"></script>
<script src="<?php echo $URL['JS'] ?>perfilUser.js"></script>

<script>
    $("#estado").on('change', function () {
        $.ajax({
            url: "<?= $URL["FUNCTIONS"] ?>buscarCidade.php",
            type: "POST",
            data: {id_estado: id},
            success: function (cidade) {
                $("#cidade").autocomplete({
                    source: cidade;
                });
            }
        });

    });
</script>
</html>
<?php
mysqli_close($conn);
