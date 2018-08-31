<html>
    <head>
        <title> Tela de Login </title>
    </head>

    <body>

        <form name="login" action=""  id="main_table_form" method="_POST">
            <div align="center"> 
                <center><h3><b>Login</b></h3></center>
                <table border="1" cellspacing="0" cellpadding="0">
                    <tr>
                        <td width="150" bgcolor="#ff0000" colspan="0">Usuário:</td> 
                        <td><input type="text" name="user" maxlength="20"></td>
                    </tr>
                    <tr>
                        <td width="150" bgcolor="#ff0000" colspan="0">Senha:</td> 
                        <td>
                            <input type="password" name="pin" size="20" maxlength="10">
                        </td>
                    </tr>
                    <tr>
                        <td align="center" colspan=7>
                            <input type="submit" value="Entrar">
                        </td>
                    </tr>
                </table>
            </div>
        </form>

    </body>
</html>
<?php
include ("include/rodape.inc.php");
?>