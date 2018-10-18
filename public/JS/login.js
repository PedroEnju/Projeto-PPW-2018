$(document).ready(function () {
    $(".entrar").on('click', function () {
        if ($("#usuario").val() === '') {
            $(".alert").addClass("show");
            $("#campo").text("USUÁRIO");
            $("#usuario").addClass("border-danger");
            $("#usuario").focus();
            return false;
        }
        if ($("#senha").val() === '') {
            $(".alert").addClass("show");
            $("#campo").text("SENHA");
            $("#senha").addClass("border-danger");
            $("#senha").focus();
            return false;
        }
        $(".alert").removeClass("show");
        $("#login").submit();
    });
    $("#usuario").on('change', function () {
        $("#usuario").removeClass("border-danger");
    });
    $("#senha").on('change', function () {
        $("#senha").removeClass("border-danger");
    });
    $(".cadastrar").on('click', function () {
        window.location.href = 'CadastroUsuario.php';
    });
    $(".alertClose").on('click', function () {
        $(".alert").removeClass("show");
    });
});
