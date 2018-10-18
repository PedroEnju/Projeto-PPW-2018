<?php
$title = "Tela de Login";
include_once "../Include/head.inc.php";
?>
</head>
<body class="bg-dark text-light text-center">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="masthead mb-auto">
            <div class="alert alert-danger text-dark alert-dismissible fade" role="alert">
                O campo <strong id="campo"></strong> está em branco. 
                <button type="button" class="alertClose close" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </header>
        <main role="main" class="inner cover">
            <form name="login" id="login" action="../Functions/logon.php" method="post">
                <table align="center" width="250">
                    <thead>
                        <tr>
                            <td align="center">
                                <img id="logo" src="../../../public/img/LOGO.png" alt="Logo" width="150">
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="align-bottom">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="span-login"><img src="../../../public/img/login.png" alt="Login" width="20"></span>
                                    </div>
                                    <input id="usuario" name="usuario" type="text" placeholder="Login" maxlength="60" class="form-control text-primary" autofocus>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="span-senha"><img class="img" src="../../../public/img/password.png" alt="Senha" width="20"></span>
                                    </div>
                                    <input id="senha" name="senha" type="password" placeholder="Senha" maxlength="64" class="form-control">
                                </div>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="2">
                                <table width='300'>
                                    <tr>
                                        <td hidden>
                                            <button class="cadastrar btn btn-outline-info my-2 my-sm-7" type="button">Cadastrar</button>
                                        </td>
                                        <td align="right">
                                            <button class="entrar btn btn-lg btn-success" type="button">Entrar</button>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </form>
        </main>
        <?php
        include_once '../Include/footer.inc.php';
        ?>
    </div>
</body> 
<?php
include_once '../Include/scripts.inc.php';
?>
<script src="../../../public/JS/login.js"></script>
</html>