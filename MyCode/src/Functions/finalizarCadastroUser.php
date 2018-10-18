<?php
session_start();
if (isset($_SESSION["usuario"])) {
    include_once '../../config/config.dba.php';
    include_once '../Include/url.inc.php';

    if ($_POST["cadTipo"] == 1) {
        $usuario = $_POST["usuario"];
        $senha = md5($_POST["senha"]);

        $tipo = isset($_POST['tipo']) ? $_POST['tipo'] : "U";

        $sql = "select * from usuario where nome_usuario = '$usuario'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 0) {
            $sqlC = "insert into cliente (id_cidade,nome_cliente,cpf,data_nascimento,sexo,estado_civil,email,status) values (
                        1000,
                        '$usuario',
                        '',
                        '0000-00-00',
                        '',
                        '0',
                        '',
                        'A'
                        )";
            try {
                mysqli_query($conn, $sqlC);
            } catch (Exception $e) {
                $msg = "Error: " . $e . "<br>" . mysqli_error($conn);
                $pb_color = " bg-danger";
                $msg_c = " text-danger";
                die;
            }
            $sqlU = "insert into usuario (id_cliente,data_cadastro,tipo_usuario,nome_usuario,senha_usuario,status) values (
                        last_insert_id(),
                        now(),
                        '$tipo',
                        '$usuario',
                        '$senha',
                        'A'
                        )";
            try {
                mysqli_query($conn, $sqlU);
                $msg = "Cadastrado com sucesso!!!";
                $pb_color = " bg-success";
                $msg_c = " text-success";
            } catch (Exception $e) {
                $msg = "Error: " . $e . "<br>" . mysqli_error($conn);
                $pb_color = " bg-danger";
                $msg_c = " text-danger";
                die;
            }
        } else {
            $msg = "Esse usuário já existe!!";
            $pb_c = " bg-info";
            $msg_c = " text-info";
        }
        $title = "Cadastro de Usuário";
        $tela = "ViewCadastroUser.php";
    } else {

        $cpf = $_POST["cpf"];

        if (!validaCPF(str_replace(".", "", str_replace("-", "", $_POST["cpf"])))) {
            $msg = "CPF incorreto!!";
            $pb_c = " bg-warning";
            $msg_c = " text-warning";
        } else {
            
        }
    }
    include_once '../Telas/StatusCadastro.php';
    ?>
    <script>
        setTimeout(function () {
            var url = "<?php echo $URL["TELAS"] . $tela; ?>";
            window.location.replace(url);
        }, 5000);
    </script>
    <?php
}

function validaCPF($cpf = null) {

    if (empty($cpf)) {
        return false;
    }

    $cpf = preg_replace("/[^0-9]/", "", $cpf);
    $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);

    if (strlen($cpf) != 11) {
        return false;
    } else if ($cpf == '00000000000' ||
            $cpf == '11111111111' ||
            $cpf == '22222222222' ||
            $cpf == '33333333333' ||
            $cpf == '44444444444' ||
            $cpf == '55555555555' ||
            $cpf == '66666666666' ||
            $cpf == '77777777777' ||
            $cpf == '88888888888' ||
            $cpf == '99999999999') {
        return false;
    } else {
        for ($t = 9; $t < 11; $t++) {
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf{$c} * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf{$c} != $d) {
                return false;
            }
        }
        return true;
    }

    mysqli_close($conn);
}
