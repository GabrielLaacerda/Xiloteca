<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../View/css/navbar.css">
    <link rel="stylesheet" type="text/css" href="../View/css/cadastros.css">
    <link rel="stylesheet" type="text/css" href="../View/css/datatables.css">
    <link rel="stylesheet" type="text/css" href="../View/Font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <title>Cadastros</title>
    <script src="js/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="../Bootstrap/js/bootstrap.min.js"></script>
    <script src="js/datatables.js"></script>
    <script src="js/cadastros.js"></script>
    <script src="js/clonaCampos.js"></script>
    <script src="js/removeCampo.js"></script>
    <script src="js/gerenciaTabelas.js"></script>
    <script src="js/AjaxImagensLamina.js"></script>
    <script src="js/AjaxImagensAmostra.js"></script>
</head>

<body>

    <!-- Navbar -->
    <?php
    include_once "navbar.php";
    session_start();
    if (!isset($_SESSION["login"])) {
        navDeslogado();
    } else if ($_SESSION["login"] == 'administrador') {
        navAdm();
    } else if ($_SESSION["login"] == 'convidado') {
        navCom();
    } else {
        navDeslogado();
    }
    ?>
    <!-- Cadastros -->

    <div id="geral" class="container-fluid">
        <div class="row">
            <div class="col-2">
                <h1 class="display-6">Opções</h1>

                <!-- Opções -->
                <div class="">
                    <button type="submit" id="amostra" class="btn btn-success btn-lg">Amostra <i class="fa fa-leaf" aria-hidden="true"></i></button>
                    <button type="submit" id="lamina" class="btn marrom btn-lg">Lamina</button>
                    <button type="submit" id="parenquima" class="btn btn-success btn-lg">Parenquima <i class="fa fa-leaf" aria-hidden="true"></i></button>
                    <button type="submit" id="especie" class="btn marrom btn-lg">Espécie</button>
                    <button type="submit" id="vasos" class="btn btn-success btn-lg">Vasos <i class="fa fa-leaf" aria-hidden="true"></i></button>
                    <button type="submit" id="organolepticas" class="btn marrom  btn-lg">Organolépticas</button>
                    <button type="submit" id="raios" class="btn btn-success btn-lg">Raios <i class="fa fa-leaf" aria-hidden="true"></i></button>
                    <button type="submit" id="imagens" class="btn marrom btn-lg">Imagens</button>
                    <button type="submit" id="caracE" class="btn btn-success btn-lg">Caracteres Especiais <i class="fa fa-leaf" aria-hidden="true"></i></button>
                    <button type="submit" id="caracteristicas" class="btn marrom btn-lg">Caracteristicas
                        Espécie</button>
                </div>
            </div>

            <!-- Divs Cadastro -->
            <div class="col-10 t">
                <h1 class="display-6 especies d">Cadastro de "Dinamico"</h1>
                <h1 class="display-6 especies d2">Escolha ao lado o que deseja cadastrar</h1>

                <!--Formulario Especies -->
                <form id="FormEspecies" action="../controller/cadastraEspecieController.php" method="POST" class="row g-3 needs-validation">
                    <div class="col-md-10">
                        <label for="idFamilia" class="form-label">Família</label>
                        <input type="text" class="form-control mb-3" id="idFamilia" name="familia" placeholder="Digite o nome da Familia" aria-describedby="inputGroup-sizing-lg" required>
                    </div>
                    <div class="col-md-10">
                        <label for="idGenero" class="form-label">Gênero</label>
                        <input type="text" class="form-control mb-3" id="idGenero" name="genero" placeholder="Digite o gênero da amostra" required>
                    </div>
                    <div class="col-md-10">
                        <label for="idCientifico" class="form-label">Nome Científico</label>
                        <input type="text" class="form-control mb-3" id="idCientifico" name="cientifico" placeholder="Digite o nome científico" required>
                    </div>
                    <div class="col-md-10">
                        <label for="idVulgar" class="form-label">Nome Vulgar</label>
                        <input type="text" class="form-control" id="idVulgar" name="vulgar" placeholder="Digite o nome vulgar" required>
                    </div>

                    <div class="d-grid gap-2 col-3 mx-left">
                        <button class="btn b btn-success" type="submit" id="BotaoCadastroEspecie">Cadastrar</button>
                    </div>
                </form>

                <!-- Formulario Amostra -->

                <form id="FormAmostra" method="POST" action="../controller/cadastraAmostraController.php" class="row g-3 needs-validation">
                    <div class="row" id="armgav">
                        <div class="col-md-3">
                            <div>
                                <label for="gaveta" class="form-label">Gaveta</label>
                                <input type="number" min='0' class="form-control mb-3" name="gaveta" placeholder="Selecione o número da gaveta" aria-describedby="inputGroup-sizing-lg" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div>
                                <label for="armario" class="form-label">Armário</label>
                                <input type="number" min='0' class="form-control mb-3" name="armario" placeholder="Selecione o número do armário" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div>
                                <label for="dataCad" class="form-label">Data de Cadastro </label> <i class="fa fa-calendar" aria-hidden="true"></i>
                                <input type="text" id="datepicker" class="form-control mb-3" name="dataCad" placeholder="Selecione a data" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <label for="formato" class="form-label">Formato</label>
                        <input type="text" class="form-control" name="formato" placeholder="Digite o formato da amostra" required>
                    </div>
                    <div class="col-md-10">
                        <label for="origem" class="form-label">Origem</label>
                        <input type="text" class="form-control" name="origem" placeholder="Digite a origem da amostra" required>
                    </div>
                    <div class="col-md-10">
                        <label for="bioma" class="form-label">Bioma</label>
                        <input type="text" class="form-control" name="bioma" placeholder="Digite o bioma da amostra" required>
                    </div>

                    <div class="col-md-10">
                        <label for="especie" class="form-label">ID da Espécie</label>
                        <select class="form-select" name="especie" aria-label="Default select example">

                            <?php
                            include("../controller/connBD.php");

                            $stmt = $PDO->query("select id from especie;");

                            while ($esp2 = $stmt->fetch()) {
                            ?>
                                <option value="<?= $esp2['id'] ?>"><?= $esp2['id'] ?></option>
                            <?php }
                            ?>
                        </select>
                    </div>

                    <div class="col-md-10 tabelaEspecies">
                        <table id="table_id1" class="display">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Familia</th>
                                    <th>Genero</th>
                                    <th>Nome Científico</th>
                                    <th>Nome Vulgar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include("../controller/connBD.php");

                                $stmt = $PDO->query("select * from especie;");

                                while ($esp = $stmt->fetch()) {
                                ?>
                                    <tr>
                                        <td>
                                            <?= $esp['id']; ?>
                                        </td>
                                        <td>
                                            <?= $esp['familia']; ?>
                                        </td>
                                        <td>
                                            <?= $esp['genero']; ?>
                                        </td>
                                        <td>
                                            <?= $esp['especie_esp']; ?>
                                        </td>
                                        <td>
                                            <?= $esp['nome_vulgar']; ?>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>

                    <div class="d-grid gap-2 col-3 mx-left">
                        <button class="btn b btn-success" type="submit" id="BotaoCadastroAmostra">Cadastrar</button>
                    </div>
                </form>

                <!--Formulario Laminas -->
                <form id="FormLamina" method="POST" action="../controller/cadastraLaminaController.php" class="row g-3 needs-validation">
                    <div class="col-md-10">
                        <label for="armario2" class="form-label">Armário</label>
                        <input type="number" min='0' class="form-control mb-3" name="armario2" placeholder="Selecione o número da gaveta" aria-describedby="inputGroup-sizing-lg" required>
                    </div>

                    <div class="col-md-10">
                        <label for="gaveta2" class="form-label">Gaveta</label>
                        <input type="number" min='0' class="form-control mb-3" name="gaveta2" placeholder="Selecione o número da gaveta" aria-describedby="inputGroup-sizing-lg" required>
                    </div>

                    <div class="col-md-10">
                        <label for="bioma" class="form-label">ID da Amostra</label>
                        <select class="form-select" name="amostraID" aria-label="Default select example">
                            <?php
                            include("../controller/connBD.php");

                            $stmt = $PDO->query("select numero from amostra;");

                            while ($amos2 = $stmt->fetch()) {
                            ?>
                                <option value="<?= $amos2['numero'] ?>"><?= $amos2['numero'] ?></option>
                            <?php }
                            ?>
                        </select>
                        <hr size="10" style="color: DarkGreen">
                    </div>
                    <div class="col-md-10">
                        <label for="nome_vul" class="form-label">Nome Vulgar</label>
                        <input type="text" class="form-control mb-3" name="nome_vul" aria-describedby="inputGroup-sizing-lg" required>
                    </div>
                    <div class="col-md-10">
                        <label for="fami" class="form-label">Familia</label>
                        <input type="text" class="form-control mb-3" name="fami" aria-describedby="inputGroup-sizing-lg" required>
                    </div>
                    <div class="col-md-10">
                        <label for="gen" class="form-label">Genero</label>
                        <input type="text" class="form-control mb-3" name="gen" aria-describedby="inputGroup-sizing-lg" required>
                    </div>
                    <div class="col-md-10">
                        <label for="espe" class="form-label">Espécie</label>
                        <input type="text" class="form-control mb-3" name="espe" aria-describedby="inputGroup-sizing-lg" required>
                        <hr size="10" style="color: DarkGreen">
                    </div>            
                    <div class="col-md-10 tabelaAmostras">
                        <table id="table_id2" class="display">
                            <thead>
                                <tr>
                                    <th>Numero</th>
                                    <th>Gaveta</th>
                                    <th>Armario</th>
                                    <th>Data de Cadastro</th>
                                    <th>Formato</th>
                                    <th>Origem</th>
                                    <th>Bioma</th>
                                    <th>Espécie</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include("../controller/connBD.php");

                                $stmt = $PDO->query("select * from amostra;");

                                while ($amos = $stmt->fetch()) {
                                ?>
                                    <tr>
                                        <td>
                                            <?= $amos['numero']; ?>
                                        </td>
                                        <td>
                                            <?= $amos['gaveta']; ?>
                                        </td>
                                        <td>
                                            <?= $amos['armario']; ?>
                                        </td>
                                        <td>
                                            <?= $amos['data_cadastro']; ?>
                                        </td>
                                        <td>
                                            <?= $amos['formato']; ?>
                                        </td>
                                        <td>
                                            <?= $amos['origem']; ?>
                                        </td>
                                        <td>
                                            <?= $amos['bioma']; ?>
                                        </td>
                                        <td>
                                            <?= $amos['fk_especie_id']; ?>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="d-grid gap-2 col-3 mx-left">
                        <button class="btn b btn-success" type="submit" id="BotaoCadastroLamina">Cadastrar</button>
                    </div>
                </form>

                <!--Formulario Parenquimas -->
                <form id="FormParenquima" action="../controller/cadastraParenquimaController.php" method="POST" class="row g-3 needs-validation">

                    <div class="col-md-10">
                        <label for="tipoP" class="form-label">Tipo</label>
                        <input type="text" class="form-control mb-3" name="tipoP" placeholder="Digite o tipo da parenquima" aria-describedby="inputGroup-sizing-lg" required>
                    </div>
                    <center>
                        <hr size="10" width="83%" style="color: DarkGreen">
                    </center>
                    <div class="Nomes col-md-10">
                        <label for="nomeP" class="form-label">Nome <i class="fa fa-plus-circle" onclick="copiarModelo()" aria-hidden="true"></i></label>
                        <input type="text" class="form-control mb-3" name="nomeP[]" placeholder="Digite o nome da Parenquima" aria-describedby="inputGroup-sizing-lg" required>
                    </div>
                    <div class="d-grid gap-2 col-3 mx-left">
                        <button class="btn b btn-success" type="submit" id="BotaoCadastroPareqnuima">Cadastrar</button>
                    </div>
                </form>
                <!-- ###############-divCopia-############## -->
                <div class="modelo vet1 d-none">
                    <label for="nomeP" class="form-label">Nome <i class="fa fa-minus-circle" onclick="removeParenquima(this)" aria-hidden="true"></i></label></label>
                    <input type="text" class="form-control mb-3" name="nomeP[]" placeholder="Digite o nome da Parenquima" aria-describedby="inputGroup-sizing-lg" required>
                </div>

                <!--Formulario Organolépticas -->
                <form id="FormOrganolepticas" action="../controller/cadastrarOrganolepticasController.php" method="POST" class="row g-3 needs-validation">

                    <div class="col-md-10">
                        <label for="odor" class="form-label">Odor</label>
                        <input type="text" class="form-control mb-1" name="odor" placeholder="Digite o odor da organoléptica" aria-describedby="inputGroup-sizing-lg" required>
                    </div>
                    <div class="col-md-10">
                        <label for="gosto" class="form-label">Gosto</label>
                        <input type="text" class="form-control mb-1" name="gosto" placeholder="Digite o gosto da organoléptica" aria-describedby="inputGroup-sizing-lg" required>
                    </div>
                    <div class="col-md-10">
                        <label for="brilho" class="form-label">Brilho</label>
                        <input type="text" class="form-control mb-1" name="brilho" placeholder="Digite o brilho da organoléptica" aria-describedby="inputGroup-sizing-lg" required>
                    </div>
                    <div class="col-md-10">
                        <label for="textura" class="form-label">Textura</label>
                        <input type="text" class="form-control mb-1" name="textura" placeholder="Digite a textura da organoléptica" aria-describedby="inputGroup-sizing-lg" required>
                    </div>
                    <div class="col-md-10">
                        <label for="cor" class="form-label">Cor</label>
                        <input type="text" class="form-control mb-1" name="cor" placeholder="Digite a cor da organoléptica" aria-describedby="inputGroup-sizing-lg" required>
                    </div>
                    <div class="d-grid gap-2 col-3 mx-left">
                        <button class="btn b btn-success" type="submit" id="BotaoCadastroOrganoleptica">Cadastrar</button>
                    </div>
                </form>

                <!--Formulario Vasos -->
                <form id="FormVasos" action="../controller/cadastrarVasosController.php" method="POST" class="row g-3 needs-validation">
                    <div class="col-md-10">
                        <label for="tipoV" class="form-label">Tipo</label>
                        <input type="text" class="form-control mb-3" name="tipoV" placeholder="Digite o tipo do vaso" aria-describedby="inputGroup-sizing-lg" required>
                    </div>

                    <center>
                        <hr size="10" width="83%" style="color: DarkGreen">
                    </center>
                    <div class="Caracteristica col-md-10">
                        <label for="caracV" class="form-label">Caracteristicas <i id="iconRadio" class="fa fa-plus-circle" onclick="copiarModeloCaracteristica()" aria-hidden="true"></i></label>
                        <input type="text" class="form-control mb-3" name="caracV[]" placeholder="Digite o tipo do vaso" aria-describedby="inputGroup-sizing-lg" required>

                        <div>
                            <label>Definição de Vaso</label>
                            <input type="text" class="form-control mb-3" name="definicaovaso[]" placeholder="" aria-describedby="inputGroup-sizing-lg" required>
                        </div>
                    </div>

                    <div class="d-grid gap-2 col-3 mx-left">
                        <button class="btn b btn-success" type="submit" id="BotaoCadastroEspecie">Cadastrar</button>
                    </div>
                </form>
                <!-- #####--ModeloCaracteristica--##### -->
                <div class="modeloCaracteristica vet3 d-none">
                    <center>
                        <hr size="10" width="100%" style="color: DarkGreen">
                    </center>
                    <label for="caracV" class="form-label">Caracteristicas <i id="iconRadio" class="fa fa-minus-circle" onclick="removeCaracVasos(this)" aria-hidden="true"></i></label>
                    <input type="text" class="form-control mb-3" name="caracV[]" placeholder="Digite o tipo do vaso" aria-describedby="inputGroup-sizing-lg" required>

                    <div>
                        <label>Definição de Vaso</label>
                        <input type="text" class="form-control mb-3" name="definicaovaso[]" placeholder="" aria-describedby="inputGroup-sizing-lg" required>
                    </div>
                </div>
                <!-- #####--ModeloDefinições--##### -->
                <div class="d-none">
                    <label>Definição de Vaso</label>
                    <input type="text" class="form-control mb-3" name="definicaovaso[]" placeholder="" aria-describedby="inputGroup-sizing-lg" required>
                </div>
                <!--Formulario Raios -->
                <form id="FormRaios" method="POST" action="../controller/cadastraRaioController.php" class="row g-3 needs-validation">

                    <div class="col-md-10">
                        <label for="tipoR" class="form-label">Tipo</label>
                        <input type="text" class="form-control mb-3" name="tipoR" placeholder="Digite o tipo do Raio" aria-describedby="inputGroup-sizing-lg" required>
                    </div>
                    <center>
                        <hr size="10" width="83%" style="color: DarkGreen">
                    </center>
                    <div class="NomesRaios col-md-10">
                        <label for="nomeR" class="form-label">Nome <i id="iconRadio" class="fa fa-plus-circle" onclick="copiarModeloRaio()" aria-hidden="true"></i></label>
                        <input type="text" class="form-control mb-3" name="nomeR[]" placeholder="Digite o nome do Raio" aria-describedby="inputGroup-sizing-lg" required>
                    </div>
                    <div class="d-grid gap-2 col-3 mx-left">
                        <button class="btn b btn-success" type="submit" id="BotaoCadastroPareqnuima">Cadastrar</button>
                    </div>
                </form>
                <!-- ###############-divCopia-############## -->
                <div class="modeloRaio vet2 d-none">
                    <label for="nomeR" class="form-label">Nome <i class="fa fa-minus-circle" onclick="removeRaio(this)" aria-hidden="true"></i></label></label>
                    <input type="text" class="form-control mb-3" name="nomeR[]" placeholder="Digite o nome do Raio" aria-describedby="inputGroup-sizing-lg" required>
                </div>
                <!--Formulario Caracteres Especiais -->
                <form id="FormCaracE" action="../controller/cadastrarCaracEspeciaisController.php" method="POST" class="row g-3 needs-validation">
                    <div class="col-md-10"><br>
                        <label for="desc" class="form-label">Descrição</label>
                        <textarea type="text" class="form-control mb-3" name="desc" placeholder="Digite uma descrição" aria-describedby="inputGroup-sizing-lg" required></textarea>
                    </div>
                    <div class="d-grid gap-2 col-3 mx-left">
                        <button class="btn b btn-success" type="submit" id="BotaoCadastroCAracE">Cadastrar</button>
                    </div>
                </form>

                <!--Formulario Caracteristicas Especies -->
                <form id="FormCaracteristicas" action="../controller/cadastraCaracEspecieController.php" method="POST" class="row g-3 needs-validation">
                    <center>
                        <h3><small class="text-muted">Clique nos botões ao final da página para fazer pesquisas</small>
                        </h3>
                    </center>
                    <div class="col-md-4"><br>
                        <label for="desc" class="form-label">Espécie(Id)</label>
                        <select class="form-select" name="espCE" aria-label="Default select example">
                            <?php
                            include("../controller/connBD.php");

                            $stmt = $PDO->query("select id from especie;");

                            while ($espCE = $stmt->fetch()) {
                            ?>
                                <option value="<?= $espCE['id'] ?>"><?= $espCE['id'] ?></option>
                            <?php }
                            ?>
                        </select>
                    </div>
                    <div class="col-md-4"><br>
                        <label for="desc" class="form-label">Parenquima(Id)</label>
                        <select class="form-select" name="parCE" aria-label="Default select example">
                            <?php
                            include("../controller/connBD.php");

                            $stmt = $PDO->query("select id from parenquima;");

                            while ($paraCE = $stmt->fetch()) {
                            ?>
                                <option value="<?= $paraCE['id'] ?>"><?= $paraCE['id'] ?></option>
                            <?php }
                            ?>
                        </select>
                    </div>
                    <div class="col-md-4"><br>
                        <label for="desc" class="form-label">Organoléptica(Id)</label>
                        <select class="form-select" name="orgCE" aria-label="Default select example">
                            <?php
                            include("../controller/connBD.php");

                            $stmt = $PDO->query("select id from organolepticas;");

                            while ($orgCE = $stmt->fetch()) {
                            ?>
                                <option value="<?= $orgCE['id'] ?>"><?= $orgCE['id'] ?></option>
                            <?php }
                            ?>
                        </select>
                    </div>
                    <div class="col-md-4"><br>
                        <label for="desc" class="form-label">Caracteres Especiais(Id)</label>
                        <select class="form-select" name="cespCE" aria-label="Default select example">
                            <option value="0">Não tem</option>
                            <?php
                            include("../controller/connBD.php");

                            $stmt = $PDO->query("select id from caracteres_especiais;");

                            while ($cespCE = $stmt->fetch()) {
                            ?>
                                <option value="<?= $cespCE['id'] ?>"><?= $cespCE['id'] ?></option>
                            <?php }
                            ?>
                        </select>
                    </div>
                    <div class="col-md-4"><br>
                        <label for="desc" class="form-label">Raio(Id)</label>
                        <select class="form-select" name="raiCE" aria-label="Default select example">
                            <?php
                            include("../controller/connBD.php");

                            $stmt = $PDO->query("select id from raio;");

                            while ($raiCE = $stmt->fetch()) {
                            ?>
                                <option value="<?= $raiCE['id'] ?>"><?= $raiCE['id'] ?></option>
                            <?php }
                            ?>
                        </select>
                    </div>
                    <div class="col-md-4"><br>
                        <label for="desc" class="form-label">Vaso(Id)</label>
                        <select class="form-select" name="vasCE" aria-label="Default select example">
                            <?php
                            include("../controller/connBD.php");

                            $stmt = $PDO->query("select id from tipo_dado_vasos;");

                            while ($vasCE = $stmt->fetch()) {
                            ?>
                                <option value="<?= $vasCE['id'] ?>"><?= $vasCE['id'] ?></option>
                            <?php }
                            ?>
                        </select>
                    </div>

                    <div class="d-grid gap-2 col-3 mx-left">
                        <button class="btn btn-success" type="submit" id="BotaoCadastroCAracE">Cadastrar</button>
                    </div>

                    <div id="container" class="col-md-10 bt"><br>
                        <div id="botoesT">
                            <h1 class="display-6 especies d">Selecione a tabela desejada</h1><Br>
                            <button type="button" class="btn marrom col-md-2" onclick="setaVasos()">Vasos</button>
                            <button type="button" class="btn btn-success" onclick="setaEspecie()">Espécies</button>
                            <button type="button" class="btn marrom" onclick="setaParenquima()">Parenquimas</button>
                            <button type="button" class="btn btn-success" onclick="setaOrganolepticas()">Organolépticas</button>
                            <button type="button" class="btn marrom" onclick="setaCaracEspeciais()">Caracteres Especiais</button>
                            <button type="button" class="btn btn-success col-md-2" onclick="setaRaios()">Raios</button>
                        </div>
                    </div>
                    <!-- ###---TabelaVasos---### -->
                    <div id="tableVasos" class="col-md-12 tabelaVasos d-none tb">
                        <br>
                        <table id="table_id6" class="display">
                            <thead>
                                <tr>
                                    <th style="text-align: center">Id</th>
                                    <th style="text-align: center">Nome</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include("../controller/connBD.php");

                                $stmt = $PDO->query("select * from tipo_dado_vasos;");

                                while ($lam6 = $stmt->fetch()) {
                                ?>
                                    <tr>
                                        <td style="text-align: center">
                                            <?= $lam6['id']; ?>
                                        </td>
                                        <td style="text-align: center">
                                            <?= $lam6['nome']; ?>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- ###---TabelaEspecie---### -->
                    <div id="tableEspecie" class="col-md-12 tabelaEsp d-none tb">
                        <br>
                        <table id="table_id7" class="display">
                            <thead>
                                <tr>
                                    <th style="text-align: center">Id</th>
                                    <th style="text-align: center">Familia</th>
                                    <th style="text-align: center">Gênero</th>
                                    <th style="text-align: center">Nome</th>
                                    <th style="text-align: center">Nome Vulgar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include("../controller/connBD.php");

                                $stmt = $PDO->query("select * from especie;");

                                while ($lam7 = $stmt->fetch()) {
                                ?>
                                    <tr>
                                        <td style="text-align: center">
                                            <?= $lam7['id']; ?>
                                        </td>
                                        <td style="text-align: center">
                                            <?= $lam7['familia']; ?>
                                        </td>
                                        <td style="text-align: center">
                                            <?= $lam7['genero']; ?>
                                        </td>
                                        <td style="text-align: center">
                                            <?= $lam7['especie_esp']; ?>
                                        </td>
                                        <td style="text-align: center">
                                            <?= $lam7['nome_vulgar']; ?>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- ###---TabelaParenquima---### -->
                    <div id="tableParenquima" class="col-md-12 tabelaParen d-none tb">
                        <br>
                        <table id="table_id8" class="display">
                            <thead>
                                <tr>
                                    <th style="text-align: center">Id</th>
                                    <th style="text-align: center">Tipo</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include("../controller/connBD.php");

                                $stmt = $PDO->query("select * from parenquima;");

                                while ($lam8 = $stmt->fetch()) {
                                ?>
                                    <tr>
                                        <td style="text-align: center">
                                            <?= $lam8['id']; ?>
                                        </td>
                                        <td style="text-align: center">
                                            <?= $lam8['tipo']; ?>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- ###---TabelaOrganolepticas---### -->
                    <div id="tableOrganolepticas" class="col-md-12 tabelaOrgan d-none tb">
                        <br>
                        <table id="table_id9" class="display">
                            <thead>
                                <tr>
                                    <th style="text-align: center">Id</th>
                                    <th style="text-align: center">Odor</th>
                                    <th style="text-align: center">Gosto</th>
                                    <th style="text-align: center">Brilho</th>
                                    <th style="text-align: center">Textura</th>
                                    <th style="text-align: center">Cor</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include("../controller/connBD.php");

                                $stmt = $PDO->query("select * from organolepticas;");

                                while ($lam4 = $stmt->fetch()) {
                                ?>
                                    <tr>
                                        <td style="text-align: center">
                                            <?= $lam4['id']; ?>
                                        </td>
                                        <td style="text-align: center">
                                            <?= $lam4['odor']; ?>
                                        </td>
                                        <td style="text-align: center">
                                            <?= $lam4['gosto']; ?>
                                        </td>
                                        <td style="text-align: center">
                                            <?= $lam4['brilho']; ?>
                                        </td>
                                        <td style="text-align: center">
                                            <?= $lam4['textura']; ?>
                                        </td>
                                        <td style="text-align: center">
                                            <?= $lam4['cor']; ?>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- ###---TabelaCaracteresEspeciais---### -->
                    <div id="tableCaracEspeciais" class="col-md-12 tabelaCaracEsp d-none tb">
                        <br>
                        <table id="table_id10" class="display">
                            <thead>
                                <tr>
                                    <th style="text-align: center">Id</th>
                                    <th style="text-align: center">Descrição</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include("../controller/connBD.php");

                                $stmt = $PDO->query("select * from caracteres_especiais;");

                                while ($lam10 = $stmt->fetch()) {
                                ?>
                                    <tr>
                                        <td style="text-align: center">
                                            <?= $lam10['id']; ?>
                                        </td>
                                        <td style="text-align: center">
                                            <?= $lam10['descricao']; ?>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>

                     <!-- ###---TabelaRaios---### -->
                     <div id="tableRaios" class="col-md-12 tabelaRaios d-none tb">
                        <br>
                        <table id="table_id11" class="display">
                            <thead>
                                <tr>
                                    <th style="text-align: center">Id</th>
                                    <th style="text-align: center">Tipo</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include("../controller/connBD.php");

                                $stmt = $PDO->query("select * from raio;");

                                while ($lam11 = $stmt->fetch()) {
                                ?>
                                    <tr>
                                        <td style="text-align: center">
                                            <?= $lam11['id']; ?>
                                        </td>
                                        <td style="text-align: center">
                                            <?= $lam11['tipo']; ?>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>

                </form>

                <!--Formulario Imagens-->
                <form id="FormImagens" method="POST" class="row g-3 needs-validation" enctype='multipart/form-data'>
                    <div id="fotosA" class="col-md-6">
                        <center>
                            <h3><small class="text-muted">Imagens da Amostra</small></h3>
                        </center>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Foto da Amostra</label>
                            <input class="form-control" type="file" id="formFile" name="fotoAmostra">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Foto Macroscópica Transversal</label>
                            <input class="form-control" type="file" id="formFile" name="matrans">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Foto Macroscópica Radial</label>
                            <input class="form-control" type="file" id="formFile" name="mar">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Foto Macroscópica Tangencial</label>
                            <input class="form-control" type="file" id="formFile" name="matan">
                        </div>
                        <div>
                            <label for="idA" class="form-label">id da Amostra(Consulte a tabela abaixo)</label>
                            <input type="number" min='0' class="form-control mb-3" name="idA" placeholder="Selecione o id da amostra" aria-describedby="inputGroup-sizing-lg" required>
                        </div>
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button class="btn btn-success" id="BotaoImagensAmostra" type="button">Enviar</button>
                        </div><br>
                    </div>

                    <div id="" class="col-md-1"></div>

                    <div id="fotosL" class="col-md-5">
                        <center>
                            <h3><small class="text-muted">Imagens da Lâmina</small></h3>
                        </center>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Foto Microscópica Radial</label>
                            <input class="form-control" type="file" id="imagemLMRad" name="imagemLMRad">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Foto Microscópica Tangencial</label>
                            <input class="form-control" type="file" id="formFile" name="MTan">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Foto Microscópica Transversal</label>
                            <input class="form-control" type="file" id="formFile" name="MTrans">
                        </div>

                        <div>
                            <label for="idL" class="form-label">id da Lâmina(Consulte a tabela abaixo)</label>
                            <input type="number" min='0' class="form-control mb-3" name="idL" placeholder="Selecione o id da lamina" aria-describedby="inputGroup-sizing-lg" required>
                        </div>
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button class="btn btn-success" type="button" id="BotaoImagensLamina">Enviar</button>
                        </div>
                    </div>

                    <div class="col-md-12 tabelaAmostras">
                        <br><br>
                        <h1 class="display-6 especies d">Tabela de amostras</h1>
                        <table id="table_id3" class="display">
                            <thead>
                                <tr>
                                    <th>Numero</th>
                                    <th>Gaveta</th>
                                    <th>Armario</th>
                                    <th>Data de Cadastro</th>
                                    <th>Formato</th>
                                    <th>Origem</th>
                                    <th>Bioma</th>
                                    <th>Espécie</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include("../controller/connBD.php");

                                $stmt = $PDO->query("select * from amostra;");

                                while ($amos = $stmt->fetch()) {
                                ?>
                                    <tr>
                                        <td>
                                            <?= $amos['numero']; ?>
                                        </td>
                                        <td>
                                            <?= $amos['gaveta']; ?>
                                        </td>
                                        <td>
                                            <?= $amos['armario']; ?>
                                        </td>
                                        <td>
                                            <?= $amos['data_cadastro']; ?>
                                        </td>
                                        <td>
                                            <?= $amos['formato']; ?>
                                        </td>
                                        <td>
                                            <?= $amos['origem']; ?>
                                        </td>
                                        <td>
                                            <?= $amos['bioma']; ?>
                                        </td>
                                        <td>
                                            <?= $amos['fk_especie_id']; ?>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div><br><br>

                    <h1 class="display-6 especies d">Tabela de Lâminas</h1>
                    <div class="col-md-12 tabelaAmostras">
                        <table id="table_id4" class="display">
                            <thead>
                                <tr>
                                    <th>Numero</th>
                                    <th>Armario</th>
                                    <th>Gaveta</th>
                                    <th>Id Amostra</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include("../controller/connBD.php");

                                $stmt2 = $PDO->query("select * from lamina;");

                                while ($amos2 = $stmt2->fetch()) {
                                ?>
                                    <tr>
                                        <td>
                                            <?= $amos2['numero']; ?>
                                        </td>
                                        <td>
                                            <?= $amos2['armario']; ?>
                                        </td>
                                        <td>
                                            <?= $amos2['gaveta']; ?>
                                        </td>
                                        <td>
                                            <?= $amos2['fk_amostra_numero']; ?>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                        </table>
                    </div>


                </form>

            </div>
        </div>
    </div>


</body>

</html>