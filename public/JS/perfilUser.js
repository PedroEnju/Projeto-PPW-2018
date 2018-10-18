$(document).ready(function () {
    $("#nome").focus();
    $("#cadastrar").on('click', function () {
        if ($("#usuario").val() === '' || $.isNumeric($("#usuario").val())) {
            alert("O USUÁRIO está em incorreto!!");
            $("#usuario").focus();
            return false;
        }
        if ($("#senha").val() === '') {
            alert("A SENHA está em branco!!");
            $("#senha").focus();
            return false;
        } else if ($("#senhaC").val() === '') {
            alert("A CONFIRMAÇÃO da SENHA está em branco!!");
            $("#senhaC").focus();
            return false;
        } else if ($("#senha").val() !== $("#senhaC").val()) {
            alert("A CONFIRMAÇÃO da SENHA está incorreta!!");
            $("#senhaC").focus();
            return false;
        }
        $("#modalCadastro").modal('show');
        $("#continuar").on('click', function () {
            $("#form-usuario").submit();
        });
    });
    $("#cancelar").on('click', function () {
        window.location.replace("ViewPrincipal.php");
    });
});