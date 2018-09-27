<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title> Tela de Login </title>
        <script src="../../public/JS/login.js"></script>
        <link href="../../public/CSS/login.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>

    <body>
        <form name="login" id="login" method="post" action="logon.php" class="form-signin">
            <table id="tbl-principal" align="center" width="300">
                <thead>
                    <tr>
                        <td align="center">
                            <img id="logo" src="../../public/img/LOGO.png" alt="Logo" width="200">
                        </td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <table id="tbl-login" align="center" width="100%">
                                <tr>
                                    <td class="form-control">
                                        <img src="../../public/img/login.png" alt="Login" width="30">
                                    </td>
                                    <td>
                                        <input name="usuario" type="text" placeholder="usuario" size="70%" maxlength="120" class="form-control" autofocus>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="form-control">
                                        <img class="img" src="../../public/img/password.png" alt="Senha" width="30">
                                    </td>
                                    <td>
                                        <input name="senha" type="password" placeholder="senha" maxlength="64" class="form-control">
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="right">
                            <button formaction="cadastroUser.php" class="btn btn-outline-info my-2 my-sm-7" type="submit">Cadastrar</button>
                            <button class="btn btn-lg btn-primary" type="submit" onclick="return verificaLogin();" >Entrar</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </body>
</html>