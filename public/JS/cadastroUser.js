
function verificaUser() {

    if (document.usuario.usuario.value === "") {
        alert('Usuário em branco ou incorreto!!!\r\nPor favor digite novamente.');
        document.getElementById("usuario").focus();
        window.history.go(-1);
        return (false);
    }


    if ((senha = document.usuario.senha.value !== document.usuario.senhaC.value) ||
            (senha = document.usuario.senha.value === "")) {
        alert('Confirmação da SENHA obrigatória!!!\r\nPor favor digite novamente.');
        document.getElementById("senhaC").focus();
        window.history.go(-1);
        return (false);
    }
    //Precisa de uma validação do CPF aqui // Apenas uma função temporária
    if (document.usuario.cpf.value === "") {
        alert('Confirmação da SENHA obrigatória!!!\r\nPor favor digite novamente.');
        document.getElementById("cpf").focus();
        window.history.go(-1);
        return (false);
    }
    window.location.replace("../../MyCode/src/finalizarCadastroUser.php");
    return (true);
}
