<!-- <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-success">
    <div class="container-fluid">
        <a id="inicio" class="navbar-brand" href="index.php">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-tree"
                viewBox="0 0 16 16">
                <path
                    d="M8.416.223a.5.5 0 0 0-.832 0l-3 4.5A.5.5 0 0 0 5 5.5h.098L3.076 8.735A.5.5 0 0 0 3.5 9.5h.191l-1.638 3.276a.5.5 0 0 0 .447.724H7V16h2v-2.5h4.5a.5.5 0 0 0 .447-.724L12.31 9.5h.191a.5.5 0 0 0 .424-.765L10.902 5.5H11a.5.5 0 0 0 .416-.777l-3-4.5zM6.437 4.758A.5.5 0 0 0 6 4.5h-.066L8 1.401 10.066 4.5H10a.5.5 0 0 0-.424.765L11.598 8.5H11.5a.5.5 0 0 0-.447.724L12.69 12.5H3.309l1.638-3.276A.5.5 0 0 0 4.5 8.5h-.098l2.022-3.235a.5.5 0 0 0 .013-.507z" />
            </svg>Xiloteca
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin:0 auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="cadastros.php">Cadastrar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="deletaIndex.php">Deletar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="atualizaIndex.php">Atualizar Dados</a>
                </li>
            </ul>
            <div class="nav-item dropdown-menu-left">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span><i class="fa fa-sign-out"></i> Sair</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav> -->
<?php
function navAdm(){
    echo '<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-success">
    <div class="container-fluid">
        <a id="inicio" class="navbar-brand" href="index.php">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-tree" viewBox="0 0 16 16">
                <path d="M8.416.223a.5.5 0 0 0-.832 0l-3 4.5A.5.5 0 0 0 5 5.5h.098L3.076 8.735A.5.5 0 0 0 3.5 9.5h.191l-1.638 3.276a.5.5 0 0 0 .447.724H7V16h2v-2.5h4.5a.5.5 0 0 0 .447-.724L12.31 9.5h.191a.5.5 0 0 0 .424-.765L10.902 5.5H11a.5.5 0 0 0 .416-.777l-3-4.5zM6.437 4.758A.5.5 0 0 0 6 4.5h-.066L8 1.401 10.066 4.5H10a.5.5 0 0 0-.424.765L11.598 8.5H11.5a.5.5 0 0 0-.447.724L12.69 12.5H3.309l1.638-3.276A.5.5 0 0 0 4.5 8.5h-.098l2.022-3.235a.5.5 0 0 0 .013-.507z" />
            </svg>Xiloteca
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin:0 auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="cadastros.php">Cadastrar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="deletaIndex.php">Deletar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="atualizaIndex.php">Atualizar Dados</a>
                </li>
            </ul>
            <div class="nav-item dropdown-menu-left">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="../controller/sessionDestroy.php"><span class="glyphicon glyphicon-log-in"></span><i class="fa fa-sign-out"></i> Sair</a></li>
            </ul>
            </div>
        </div>
    </div>
</nav>';
}
function navCom(){
    echo '<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-success">
    <div class="container-fluid">
        <a id="inicio" class="navbar-brand" href="index.php">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-tree" viewBox="0 0 16 16">
                <path d="M8.416.223a.5.5 0 0 0-.832 0l-3 4.5A.5.5 0 0 0 5 5.5h.098L3.076 8.735A.5.5 0 0 0 3.5 9.5h.191l-1.638 3.276a.5.5 0 0 0 .447.724H7V16h2v-2.5h4.5a.5.5 0 0 0 .447-.724L12.31 9.5h.191a.5.5 0 0 0 .424-.765L10.902 5.5H11a.5.5 0 0 0 .416-.777l-3-4.5zM6.437 4.758A.5.5 0 0 0 6 4.5h-.066L8 1.401 10.066 4.5H10a.5.5 0 0 0-.424.765L11.598 8.5H11.5a.5.5 0 0 0-.447.724L12.69 12.5H3.309l1.638-3.276A.5.5 0 0 0 4.5 8.5h-.098l2.022-3.235a.5.5 0 0 0 .013-.507z" />
            </svg>Xiloteca
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin:0 auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
            </ul>
            <div class="nav-item dropdown-menu-left">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="../controller/sessionDestroy.php"><span class="glyphicon glyphicon-log-in"></span><i class="fa fa-sign-out"></i> Sair</a></li>
            </ul>
            </div>
        </div>
    </div>
</nav>';
}
function navDeslogado(){
    echo '<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-success">
    <div class="container-fluid">
        <a id="inicio" class="navbar-brand" href="index.php">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-tree" viewBox="0 0 16 16">
                <path d="M8.416.223a.5.5 0 0 0-.832 0l-3 4.5A.5.5 0 0 0 5 5.5h.098L3.076 8.735A.5.5 0 0 0 3.5 9.5h.191l-1.638 3.276a.5.5 0 0 0 .447.724H7V16h2v-2.5h4.5a.5.5 0 0 0 .447-.724L12.31 9.5h.191a.5.5 0 0 0 .424-.765L10.902 5.5H11a.5.5 0 0 0 .416-.777l-3-4.5zM6.437 4.758A.5.5 0 0 0 6 4.5h-.066L8 1.401 10.066 4.5H10a.5.5 0 0 0-.424.765L11.598 8.5H11.5a.5.5 0 0 0-.447.724L12.69 12.5H3.309l1.638-3.276A.5.5 0 0 0 4.5 8.5h-.098l2.022-3.235a.5.5 0 0 0 .013-.507z" />
            </svg>Xiloteca
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin:0 auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="cadastros.php">Cadastrar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="deletaIndex.php">Deletar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="atualizaIndex.php">Atualizar Dados</a>
                </li>
            </ul>
            <div class="nav-item dropdown-menu-left">
                <div class="btn-group">
                    <a id="log" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                        </svg>
                    </a>

                    <ul id="divLogin" class="dropdown-menu dropdown-menu-lg-end dropdown-menu-start">
                        <li>
                            <div id="login">
                                <div class="card card-signin">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Seja Bem Vindo</h5>
                                        <h1 class="card-subtitle text-center">Digite suas Credenciais</h1>
                                        <form method="post" action="../controller/session.php" id="formlogin" name="formlogin">
                                            <div class="form-label-group">
                                                <input type="text" id="inputEmail" class="form-control" name="inputEmail" placeholder="Endereço de Email" required autofocus>
                                            </div>
                                            <div class="form-label-group">
                                                <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Senha" required>
                                            </div>
                                            <div class="d-grid gap-2">
                                                <button class="btn btn-success" type="submit">Fazer Login</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>';
}
?>