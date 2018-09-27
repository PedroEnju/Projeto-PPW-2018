
function verificaLogin() {

    if (document.login.usuario.value === "") {
        alert('Usuário em branco ou incorreto!!!\r\nPor favor digite novamente.');
        document.login.usuario.focus();
        return (false);
        die();
    }

    if (document.login.senha.value === "") {
        alert('Senha em branco ou incorreto!!!\r\nPor favor digite novamente.');
        document.login.senha.focus();
        window.history.go(-1);
        return (false);
    }
    return (true);
}
