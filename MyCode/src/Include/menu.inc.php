<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="<?php echo ($aba['HOME']); ?>"><img src="<?php echo $URL["IMG"] ?>LOGO.png" width="35"></a>
        <div class="collapse navbar-collapse" id="navbarPrincipal">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link <?php echo ($active['HOME']); ?>" href="<?php echo ($aba['HOME']); ?>">Home</a>
                </li>
                <!-- Cadastro -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?php echo ($active['CADASTRO']); ?>" href="#" id="navbarCadastro" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Cadastros
                    </a>
                    <div class="dropdown-menu bg-dark text-light" aria-labelledby="navbarCadastro">
                        <a class="dropdown-item bg-dark text-light" href="<?php echo ($aba['CAD_USER']); ?>">Usuário</a>
                        <a class="dropdown-item bg-dark text-light" href="<?php echo ($aba['CAD_NUM1']); ?>"></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item bg-dark text-light" href="<?php echo ($aba['CAD_NUM2']); ?>"></a>
                    </div>
                </li>
                <!-- Relatórios -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?php echo ($active['RELATORIO']); ?>" href="#" id="navbarRelatorio" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Relatórios
                    </a>
                    <div class="dropdown-menu bg-dark text-light" aria-labelledby="navbarRelatorio">
                        <a class="dropdown-item bg-dark text-light" href="<?php echo ($aba['REL_USER']); ?>">Usuário</a>
                        <a class="dropdown-item bg-dark text-light" href="<?php echo ($aba['REL_NUM1']); ?>"></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item bg-dark text-light" href="<?php echo ($aba['REL_NUM2']); ?>"></a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-warning mr-sm-2" href="#" id="navbarCadastro" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION["usuario"]; ?> </a>
                        <div class="dropdown-menu bg-dark text-light" aria-labelledby="navbarCadastro">
                            <a class="dropdown-item bg-dark text-light" href="<?php echo ($aba['USER_EDIT']); ?>">Perfil</a>
                            <div class="dropdown-divider"></div>
                        </div>
                    </li>
                </ul>
                <button type="button" class="sair btn btn-outline-danger my-2 my-sm-0">Sair</button>
            </form>
        </div>
    </nav>