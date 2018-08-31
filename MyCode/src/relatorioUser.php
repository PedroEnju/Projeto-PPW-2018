<?php
include('../config/config.dba.php');

$conexao = mysql_pconnect($host, $user, $pass);
mysql_select_db($base, $conexao);

$sql = "select * from usuario";
$sql_query = mysql_query($sql, $conexao); //Faz o select no banco
$sql_max = mysql_num_rows($sql_query); //Retorna a quantidade de linhas no banco

if ($sql_max != 0) {
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <table border="0" align="center" cellpadding="0" cellspacing="0" width="600">
        <tr>
            <td width="100">
        <center><img src="../../public/img/LOGO.png" alt="LOGO"></center>
    </td>
    <td align="top" width="500">
        <table height="76" cellpadding="0" cellspacing="0" border="0" align="center">
            <tr>
                <td height="46"><i><u><center><font size="2" face="verdana"><?php echo "RELATÓRIO DE USUÁRIOS"; ?></font></center></u></i></td>
            </tr>
            <tr>
                <td height="30" align="bottom">
                    <table cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td align="right" width="250">
                                <font size="-2" face="verdana">
                                <?php
                                $data = date("d/m/Y");
                                $hora = date("H") - 3;
                                $minseg = date("i:s");
                                echo "Acessado em: $data ás $hora:$minseg";
                                ?>
                                </font>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </td>
    </tr>
    </table>
    <table border="0" align="center" cellpadding="0" cellspacing="0" width="800" align="center">
        <tr>
            <td width="100"><font size="-2" face="verdana">Código</font></td>
            <td width="500"><font size="-2" face="verdana"><center>Nome</center></font></TD>
    <td width="200"><font size="-2" face="verdana">CPF</font></td>
    <td width="100"><font size="-2" face="verdana"><center>Status</center></font></TD>
    </tr>
    <tr>
        <td colspan="2"><hr size="1" noshade></td>
    </tr>

    <?php
    for ($x = 0; $x < $sql_max; $x++) {
        ?>
        <tr
        <?php
        if ($x % 2 == 0) {
            echo " bgcolor=#EAEAEA";
        }
        ?>
            >
            <td><font size="-1" face="arial"><?php echo mysql_result($sql_query, $x, 'id_usuario'); ?></font></td>
            <td><font size="-1" face="arial"><?php echo mysql_result($sql_query, $x, 'nome_usuario'); ?></font></td>
            <td><font size="-1" face="arial"><?php echo mysql_result($sql_query, $x, 'cpf_usuario'); ?></font></td>
            <td><font size="-1" face="arial"><?php echo mysql_result($sql_query, $x, 'status'); ?></font></td>
        </tr>
        <tr><td colspan="2"><hr size="1" noshade></td></tr>
        <?php
    }
}
?>