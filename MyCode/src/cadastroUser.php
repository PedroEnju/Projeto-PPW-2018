<html>
    <head>
        <title> Cadastro Usuário </title>
        <script src="../../public/JS/cadastroUser.js"></script>
        <link href="../../public/CSS/style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <form name="usuario" action="finalizarCadastroUser.php" method="post" onSubmit="return verificaUser();">
            <table border="1" align="center" cellpadding="0" cellspacing="1" width="500">
                <tr>
                    <td colspan="2" align="center">
                        <img id="logo" src="../../public/img/LOGO.png" alt="LOGO"> <br>
                        <font size="5" face="arial black">CADASTRO DE USUÁRIOS</font>
                    </td>
                </tr>
                <tr>
                    <td align="right" width="200">
                        <font size="3" face="arial">Usuário.:</font>
                    </td>
                    <td width="300">
                        <input name="usuario" type="text" size="40%" maxlength="120">
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        <font size="3" face="arial">Senha.:</font>
                    </td>
                    <td>
                        <input name="senha" type="password" size="40%" maxlength="64">
                    </td>
                <tr>
                    <td align="right">
                        <font size="3" face="arial">Confirmação da Senha.:</font>
                    </td>
                    <td>
                        <input name="senhaC" type="password" size="40%" maxlength="64">
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        <font size="3" face="arial">CPF.:</font>
                    </td>
                    <td>
                        <input name="cpf" type="text" size="40%" maxlength="14" placeholder="xxx.xxx.xxx-xx">
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        <font size="3" face="arial">Status.:</font>
                    </td>
                    <td>
                        <input type="radio" name="status" value="A" checked="check">Ativo
                        <input type="radio" name="status" value="I">Inativo
                    </td>
                </tr>
                <tr>
                    <td colspan="2"  align="right">
                        <input type="submit" name="cadastrar" value="Cadastrar">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>