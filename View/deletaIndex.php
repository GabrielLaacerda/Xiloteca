<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../View/css/deletaIndex.css">
    <link rel="stylesheet" type="text/css" href="../View/css/navbar.css">
    <link rel="stylesheet" type="text/css" href="../View/Font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../View/css/datatables.css">
    <script src="../View/js/jquery-3.6.0.js"></script>
    <script src="../Bootstrap/js/bootstrap.min.js"></script>
    <script src="js/datatables.js"></script>
    <script src="js/deletaDados.js"></script>
    <title>Xiloteca</title>
</head>

<body>

<?php
  include_once "navbar.php";
  session_start();
  if(!isset($_SESSION["login"])){
    navDeslogado();
  }
  else if($_SESSION["login"] == 'administrador'){
    navAdm();
  }else if($_SESSION["login"] == 'convidado'){
    navCom();
  }else{
    navDeslogado();
  }
  ?>

    <div class="container-fluid" id="remocoes">

        <div class="container-fluid w-100">
            <blockquote class="blockquote">
                <p>Deletar Dados</p>
            </blockquote>
            <hr size="3">
        </div>

        <form class="container-fluid row g-3" method="POST">
            <div id="container" class="col-md-10 bt"><br>
                <div id="botoesT">
                    <h1 class="display-6 especies d">Selecione a tabela desejada</h1><Br>
                    <button type="button" class="btn marrom" onclick="escolheAmostra()">Amostras</button>
                    <button type="button" class="btn btn-success" onclick="escolheLamina()">Lamina</button>
                    <button type="button" class="btn marrom col-md-2" onclick="escolheEspecie()">Espécies</button>
                    <button type="button" class="btn btn-success" onclick="escolheCaracEsp()">Características da Espécies</button>
                </div>
                <div id="botoesT">
                    <br>
                    <button type="button" class="btn btn-success" onclick="escolheVaso()">Vasos</button>
                    <button type="button" class="btn marrom" onclick="escolheParenquima()">Parenquimas</button>
                    <button type="button" class="btn btn-success" onclick="escolheOrganoleptica()">Organolépticas</button>
                    <button type="button" class="btn marrom" onclick="escolheCEspeciais()">Caracteres Especiais</button>
                    <button type="button" class="btn btn-success col-md-2" onclick="escolheRaio()">Raios</button>
                </div>
            </div>
            <hr size="3">
        </form>
        <!-- Tabela Amostras -->
        <div id="tabelaAmostra" class="tabelaAmostra d-none">
            <center>

                <div class="col-md-10">
                    <br>
                    <div class="container-fluid w-100">
                        <blockquote class="blockquote">
                            <p>Tabela Amostras</p>
                        </blockquote>
                        <hr size="3">
                    </div>
                    <small id="prin" style="display: none; color: red;" class="pb-2"></small>
                    <table id="table_id1" class="display">
                        <thead>
                            <tr>
                                <th style="text-align: center"><em class="fa fa-cog"></em></th>
                                <th style="text-align: center">Numero</th>
                                <th style="text-align: center">Gaveta</th>
                                <th style="text-align: center">Armario</th>
                                <th style="text-align: center">Data de Cadastro</th>
                                <th style="text-align: center">Formato</th>
                                <th style="text-align: center">Origem</th>
                                <th style="text-align: center">Bioma</th>
                                <th style="text-align: center">Espécie</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                include("../controller/connBD.php");

                                $stmt = $PDO->query("select * from amostra;");

                                while ($amos = $stmt->fetch()) {
                                ?>
                            <tr>
                                <td style="text-align: center">
                                    <button type="button" class="btn btn-danger"
                                        onclick="chamaDeleteAmostra(<?= $amos['numero']?>,this)">
                                        <em class="fa fa-trash"></em>
                                    </button>
                                </td>
                                <td style="text-align: center">
                                    <?= $amos['numero']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $amos['gaveta']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $amos['armario']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $amos['data_cadastro']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $amos['formato']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $amos['origem']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $amos['bioma']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $amos['fk_especie_id']; ?>
                                </td>
                            </tr>
                            <?php
                                }
                                ?>
                        </tbody>
                    </table>

                </div>
            </center>
        </div>
        <!-- Tabela Lamina -->
        <div id="tabelaLamina" class="tabelaLamina d-none">
            <center>
                <div class="col-md-10">
                    <br>
                    <div class="container-fluid w-100">
                        <blockquote class="blockquote">
                            <p>Tabela Laminas</p>
                            <p style="color: DarkGreen">(Consulte a tabela de amostras abaixo)</p>
                            <p style="color: DarkRed">Lembrando que ao remover a lâmina, as imagens relacionadas a ela também serão removidas!!</p>
                        </blockquote>
                        <hr size="3">
                    </div>
                    <small id="prin1" style="display: none; color: red;" class="pb-2"></small>
                    <table id="table_id2" class="display">
                        <thead>
                            <tr>
                                <th style="text-align: center"><em class="fa fa-cog"></em></th>
                                <th style="text-align: center">Numero</th>
                                <th style="text-align: center">Armario</th>
                                <th style="text-align: center">Gaveta</th>
                                <th style="text-align: center">ID Amostra</th>
                                <th style="text-align: center">Nome Vulgar</th>
                                <th style="text-align: center">Familia</th>
                                <th style="text-align: center">Genero</th>
                                <th style="text-align: center">Espécie</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                include("../controller/connBD.php");

                                $stmt = $PDO->query("select * from verLamina;");

                                while ($lam = $stmt->fetch()) {
                                ?>
                            <tr>
                                <td style="text-align: center">
                                    <button type="button" class="btn btn-danger"
                                        onclick="chamaDeleteLamina(<?= $lam['numero']?>,this)">
                                        <em class="fa fa-trash"></em>
                                    </button>
                                </td>
                                <td style="text-align: center">
                                    <?= $lam['numero']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $lam['armario']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $lam['gaveta']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $lam['idamostra']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $lam['nome_vulgar']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $lam['familia']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $lam['genero']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $lam['especie']; ?>
                                </td>
                            </tr>
                            <?php
                                }
                                ?>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-10">
                    <br>
                    <div class="container-fluid w-100">
                        <blockquote class="blockquote">
                            <p>Tabela Amostras</p>
                        </blockquote>
                        <hr size="3">
                    </div>
                    <table id="table_id3" class="display">
                        <thead>
                            <tr>
                                <th style="text-align: center">Numero</th>
                                <th style="text-align: center">Gaveta</th>
                                <th style="text-align: center">Armario</th>
                                <th style="text-align: center">Data de Cadastro</th>
                                <th style="text-align: center">Formato</th>
                                <th style="text-align: center">Origem</th>
                                <th style="text-align: center">Bioma</th>
                                <th style="text-align: center">Espécie</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                include("../controller/connBD.php");

                                $stmt = $PDO->query("select * from amostra;");

                                while ($amos = $stmt->fetch()) {
                                ?>
                            <tr>
                                <td style="text-align: center">
                                    <?= $amos['numero']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $amos['gaveta']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $amos['armario']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $amos['data_cadastro']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $amos['formato']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $amos['origem']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $amos['bioma']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $amos['fk_especie_id']; ?>
                                </td>
                            </tr>
                            <?php
                                }
                                ?>
                        </tbody>
                    </table>

                </div>

            </center>
        </div>
        <!-- Tabela Caracteres Especiais  -->
        <div id="tabelaCaracEspeciais" class="tabelaCaracEspeciais d-none">
            <center>

                <div class="col-md-10">
                    <br>
                    <div class="container-fluid w-100">
                        <blockquote class="blockquote">
                            <p>Tabela Caracteres Especiais</p>
                        </blockquote>
                        <hr size="3">
                    </div>
                    <small id="prin2" style="display: none; color: red;" class="pb-2"></small>
                    <table id="table_id4" class="display">
                        <thead>
                            <tr>
                                <th style="text-align: center"><em class="fa fa-cog"></em></th>
                                <th style="text-align: center">ID</th>
                                <th style="text-align: center">Descrição</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                include("../controller/connBD.php");

                                $stmt = $PDO->query("select * from caracteres_especiais;");

                                while ($cesp = $stmt->fetch()) {
                                ?>
                            <tr>
                                <td style="text-align: center">
                                    <button type="button" class="btn btn-danger"
                                        onclick="chamaDeleteCEspeciais(<?= $cesp['id']?>,this)">
                                        <em class="fa fa-trash"></em>
                                    </button>
                                </td>
                                <td style="text-align: center">
                                    <?= $cesp['id']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $cesp['descricao']; ?>
                                </td>
                            </tr>
                            <?php
                                }
                                ?>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-10">
                    <br>
                    <div class="container-fluid w-100">
                        <blockquote class="blockquote">
                            <p>Tabela Espécies</p>
                            <p style="color: DarkGreen">(A primeira coluna é referente ao ID de Caracteres Especiais)</p>
                            <p style="color: DarkRed">(Caso tenha removido algum dado, para essa tabela ser atualizada é preciso "atualizar" a página)</p>
                        </blockquote>
                        <hr size="3">
                    </div>
                    <table id="table_id5" class="display">
                        <thead>
                            <tr>
                                <th style="text-align: center">ID CaracEsp</th>
                                <th style="text-align: center">Familia</th>
                                <th style="text-align: center">Genero</th>
                                <th style="text-align: center">Nome Científico</th>
                                <th style="text-align: center">Nome Vulgar</th>
                                <th style="text-align: center">ID Especie</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                include("../controller/connBD.php");

                                $stmt = $PDO->query("select * from verEsp;");

                                while ($Cespecie = $stmt->fetch()) {
                                ?>
                            <tr>
                                <td style="text-align: center">
                                    <?= $Cespecie['idcaracesp']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $Cespecie['familia']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $Cespecie['genero']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $Cespecie['especie_esp']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $Cespecie['nome_vulgar']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $Cespecie['idesp']; ?>
                                </td>
                            </tr>
                            <?php
                                }
                                ?>
                        </tbody>
                    </table>

                </div>
            </center>
        </div>
        <!-- Tabela Especies -->
        <div id="tabelaEspecies" class="tabelaEspecies d-none">
            <center>

                <div class="col-md-10">
                    <br>
                    <div class="container-fluid w-100">
                        <blockquote class="blockquote">
                            <p>Tabela Espécies</p>
                        </blockquote>
                        <hr size="3">
                    </div>
                    <small id="prin3" style="display: none; color: red;" class="pb-2"></small>
                    <table id="table_id6" class="display">
                        <thead>
                            <tr>
                                <th style="text-align: center"><em class="fa fa-cog"></em></th>
                                <th style="text-align: center">ID</th>
                                <th style="text-align: center">Familia</th>
                                <th style="text-align: center">Genero</th>
                                <th style="text-align: center">Nome Científico</th>
                                <th style="text-align: center">Nome Vulgar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                include("../controller/connBD.php");

                                $stmt = $PDO->query("select * from especie;");

                                while ($esp = $stmt->fetch()) {
                                ?>
                            <tr>
                                <td style="text-align: center">
                                    <button type="button" class="btn btn-danger"
                                        onclick="chamaDeleteEspecie(<?= $esp['id']?>,this)">
                                        <em class="fa fa-trash"></em>
                                    </button>
                                </td>
                                <td style="text-align: center">
                                    <?= $esp['id']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $esp['familia']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $esp['genero']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $esp['especie_esp']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $esp['nome_vulgar']; ?>
                                </td>
                            </tr>
                            <?php
                                }
                                ?>
                        </tbody>
                    </table>

                </div>
            </center>
        </div>
        <!-- Tabela Raios -->
        <div id="tabelaRaios" class="tabelaRaios d-none">
            <center>

                <div class="col-md-10">
                    <br>
                    <div class="container-fluid w-100">
                        <blockquote class="blockquote">
                            <p>Tabela Raios</p>
                        </blockquote>
                        <hr size="3">
                    </div>
                    <small id="prin4" style="display: none; color: red;" class="pb-2"></small>
                    <table id="table_id7" class="display">
                        <thead>
                            <tr>
                                <th style="text-align: center"><em class="fa fa-cog"></em></th>
                                <th style="text-align: center">ID</th>
                                <th style="text-align: center">Nome</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                include("../controller/connBD.php");

                                $stmt = $PDO->query("select * from raio;");

                                while ($rai = $stmt->fetch()) {
                                ?>
                            <tr>
                                <td style="text-align: center">
                                    <button type="button" class="btn btn-danger"
                                        onclick="chamaDeleteRaio(<?= $rai['id']?>,this)">
                                        <em class="fa fa-trash"></em>
                                    </button>
                                </td>
                                <td style="text-align: center">
                                    <?= $rai['id']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $rai['tipo']; ?>
                                </td>
                            </tr>
                            <?php
                                }
                                ?>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-10">
                    <br>
                    <div class="container-fluid w-100">
                        <blockquote class="blockquote">
                            <p>Tabela Completa Raios</p>
                            <p style="color: DarkGreen">(A primeira coluna é referente ao ID da Espécie)</p>
                            <p style="color: DarkRed">(Caso tenha removido algum dado, para essa tabela ser atualizada é preciso "atualizar" a página)</p>
                        </blockquote>
                        <hr size="3">
                    </div>
                    <table id="table_id8" class="display">
                        <thead>
                            <tr>
                                <th style="text-align: center">ID Espécie</th>
                                <th style="text-align: center">Nome</th>
                                <th style="text-align: center">ID Raio</th>
                                <th style="text-align: center">Tipo</th>
                                <th style="text-align: center">ID Tipo Raio</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                include("../controller/connBD.php");

                                $stmt = $PDO->query("select * from verRaios;");

                                while ($verR = $stmt->fetch()) {
                                ?>
                            <tr>
                                <td style="text-align: center">
                                    <?= $verR['idespecie']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $verR['tipo']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $verR['idraio']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $verR['nome']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $verR['idcraio']; ?>
                                </td>
                            </tr>
                            <?php
                                }
                                ?>
                        </tbody>
                    </table>

                </div>
                <div class="col-md-10">
                    <br>
                    <div class="container-fluid w-100">
                        <blockquote class="blockquote">
                            <p>Tabela Espécies</p>
                        </blockquote>
                        <hr size="3">
                    </div>
                    <table id="table_id9" class="display">
                    <thead>
                            <tr>
                                <th style="text-align: center">ID</th>
                                <th style="text-align: center">Familia</th>
                                <th style="text-align: center">Genero</th>
                                <th style="text-align: center">Nome Científico</th>
                                <th style="text-align: center">Nome Vulgar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                include("../controller/connBD.php");

                                $stmt = $PDO->query("select * from especie;");

                                while ($esp = $stmt->fetch()) {
                                ?>
                            <tr>
                                <td style="text-align: center">
                                    <?= $esp['id']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $esp['familia']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $esp['genero']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $esp['especie_esp']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $esp['nome_vulgar']; ?>
                                </td>
                            </tr>
                            <?php
                                }
                                ?>
                        </tbody>
                    </table>

                </div>
            </center>
        
        </div>
         <!-- Tabela Organolepticas -->
         <div id="tabelaOrganolepticas" class="tabelaOrganolepticas d-none">
            <center>

                <div class="col-md-10">
                    <br>
                    <div class="container-fluid w-100">
                        <blockquote class="blockquote">
                            <p>Tabela Organolépticas</p>
                        </blockquote>
                        <hr size="3">
                    </div>
                    <small id="prin5" style="display: none; color: red;" class="pb-2"></small>
                    <table id="table_id10" class="display">
                        <thead>
                            <tr>
                                <th style="text-align: center"><em class="fa fa-cog"></em></th>
                                <th style="text-align: center">ID</th>
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

                                while ($org = $stmt->fetch()) {
                                ?>
                            <tr>
                                <td style="text-align: center">
                                    <button type="button" class="btn btn-danger"
                                        onclick="chamaDeleteOrganolepticas(<?= $org['id']?>,this)">
                                        <em class="fa fa-trash"></em>
                                    </button>
                                </td>
                                <td style="text-align: center">
                                    <?= $org['id']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $org['odor']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $org['gosto']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $org['brilho']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $org['textura']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $org['cor']; ?>
                                </td>
                            </tr>
                            <?php
                                }
                                ?>
                        </tbody>
                    </table>

                </div>
                <div class="col-md-10">
                    <br>
                    <div class="container-fluid w-100">
                        <blockquote class="blockquote">
                            <p>Tabela Espécie</p>
                            <p style="color: DarkGreen">(A primeira coluna é referente ao ID de Organolépticas)</p>
                            <p style="color: DarkRed">(Caso tenha removido algum dado, para essa tabela ser atualizada é preciso "atualizar" a página)</p>
                        </blockquote>
                        <hr size="3">
                    </div>
                    <table id="table_id11" class="display">
                        <thead>
                            <tr>
                                <th style="text-align: center">ID Organolépticas</th>
                                <th style="text-align: center">ID Espécie</th>
                                <th style="text-align: center">Familia</th>
                                <th style="text-align: center">Genero</th>
                                <th style="text-align: center">Nome Científico</th>
                                <th style="text-align: center">Nome Vulgar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                include("../controller/connBD.php");

                                $stmt = $PDO->query("select * from verOrg;");

                                while ($verO = $stmt->fetch()) {
                                ?>
                            <tr>
                                <td style="text-align: center">
                                    <?= $verO['idorgano']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $verO['idesp']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $verO['familia']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $verO['genero']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $verO['especie_esp']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $verO['nome_vulgar']; ?>
                                </td>
                            </tr>
                            <?php
                                }
                                ?>
                        </tbody>
                    </table>

                </div>
            </center>
        </div>
        <!-- Tabela Parenquimas -->
        <div id="tabelaParenquimas" class="tabelaParenquimas d-none">
            <center>

                <div class="col-md-10">
                    <br>
                    <div class="container-fluid w-100">
                        <blockquote class="blockquote">
                            <p>Tabela Parenquimas</p>
                        </blockquote>
                        <hr size="3">
                    </div>
                    <small id="prin6" style="display: none; color: red;" class="pb-2"></small>
                    <table id="table_id12" class="display">
                        <thead>
                            <tr>
                                <th style="text-align: center"><em class="fa fa-cog"></em></th>
                                <th style="text-align: center">ID</th>
                                <th style="text-align: center">Nome</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                include("../controller/connBD.php");

                                $stmt = $PDO->query("select * from parenquima;");

                                while ($par = $stmt->fetch()) {
                                ?>
                            <tr>
                                <td style="text-align: center">
                                    <button type="button" class="btn btn-danger"
                                        onclick="chamaDeleteParenquima(<?= $par['id']?>,this)">
                                        <em class="fa fa-trash"></em>
                                    </button>
                                </td>
                                <td style="text-align: center">
                                    <?= $par['id']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $par['tipo']; ?>
                                </td>
                            </tr>
                            <?php
                                }
                                ?>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-10">
                    <br>
                    <div class="container-fluid w-100">
                        <blockquote class="blockquote">
                            <p>Tabela Completa Parenquimas</p>
                            <p style="color: DarkGreen">(A primeira coluna é referente ao ID da Espécie)</p>
                            <p style="color: DarkRed">(Caso tenha removido algum dado, para essa tabela ser atualizada é preciso "atualizar" a página)</p>
                        </blockquote>
                        <hr size="3">
                    </div>
                    <table id="table_id13" class="display">
                        <thead>
                            <tr>
                                <th style="text-align: center">ID Espécie</th>
                                <th style="text-align: center">Nome</th>
                                <th style="text-align: center">ID Parenquima</th>
                                <th style="text-align: center">Tipo</th>
                                <th style="text-align: center">ID Tipo Parenquima</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                include("../controller/connBD.php");

                                $stmt = $PDO->query("select * from verparenquimas;");

                                while ($verP = $stmt->fetch()) {
                                ?>
                            <tr>
                                <td style="text-align: center">
                                    <?= $verP['idespecie']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $verP['tipo']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $verP['idparen']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $verP['nome']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $verP['idcparen']; ?>
                                </td>
                            </tr>
                            <?php
                                }
                                ?>
                        </tbody>
                    </table>

                </div>
                <div class="col-md-10">
                    <br>
                    <div class="container-fluid w-100">
                        <blockquote class="blockquote">
                            <p>Tabela Espécies</p>
                        </blockquote>
                        <hr size="3">
                    </div>
                    <table id="table_id14" class="display">
                    <thead>
                            <tr>
                                <th style="text-align: center">ID</th>
                                <th style="text-align: center">Familia</th>
                                <th style="text-align: center">Genero</th>
                                <th style="text-align: center">Nome Científico</th>
                                <th style="text-align: center">Nome Vulgar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                include("../controller/connBD.php");

                                $stmt = $PDO->query("select * from especie;");

                                while ($esp = $stmt->fetch()) {
                                ?>
                            <tr>
                                <td style="text-align: center">
                                    <?= $esp['id']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $esp['familia']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $esp['genero']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $esp['especie_esp']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $esp['nome_vulgar']; ?>
                                </td>
                            </tr>
                            <?php
                                }
                                ?>
                        </tbody>
                    </table>

                </div>
            </center>
        
        </div>
        <!-- Tabela Vasos -->
        <div id="tabelaVasos" class="tabelaVasos d-none">
            <center>

                <div class="col-md-10">
                    <br>
                    <div class="container-fluid w-100">
                        <blockquote class="blockquote">
                            <p>Tabela Vasos</p>
                        </blockquote>
                        <hr size="3">
                    </div>
                    <small id="prin7" style="display: none; color: red;" class="pb-2"></small>
                    <table id="table_id15" class="display">
                        <thead>
                            <tr>
                                <th style="text-align: center"><em class="fa fa-cog"></em></th>
                                <th style="text-align: center">ID</th>
                                <th style="text-align: center">Nome</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                include("../controller/connBD.php");

                                $stmt = $PDO->query("select * from tipo_dado_vasos;");

                                while ($vaso = $stmt->fetch()) {
                                ?>
                            <tr>
                                <td style="text-align: center">
                                    <button type="button" class="btn btn-danger"
                                        onclick="chamaDeleteVaso(<?= $vaso['id']?>,this)">
                                        <em class="fa fa-trash"></em>
                                    </button>
                                </td>
                                <td style="text-align: center">
                                    <?= $vaso['id']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $vaso['nome']; ?>
                                </td>
                            </tr>
                            <?php
                                }
                                ?>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-10">
                    <br>
                    <div class="container-fluid w-100">
                        <blockquote class="blockquote">
                            <p>Tabela Completa Vasos</p>
                            <p style="color: DarkGreen">(A primeira coluna é referente ao ID da Espécie)</p>
                            <p style="color: DarkRed">(Caso tenha removido algum dado, para essa tabela ser atualizada é preciso "atualizar" a página)</p>
                        </blockquote>
                        <hr size="3">
                    </div>
                    <table id="table_id16" class="display">
                        <thead>
                            <tr>
                                <th style="text-align: center">ID Espécie</th>
                                <th style="text-align: center">Nome</th>
                                <th style="text-align: center">ID Vaso</th>
                                <th style="text-align: center">Tipo</th>
                                <th style="text-align: center">ID Tipo vaso</th>
                                <th style="text-align: center">Definição</th>
                                <th style="text-align: center">ID Definição vaso</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                include("../controller/connBD.php");

                                $stmt = $PDO->query("select * from vervasos;");

                                while ($verV = $stmt->fetch()) {
                                ?>
                            <tr>
                                <td style="text-align: center">
                                    <?= $verV['idespecie']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $verV['nometdv']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $verV['idvaso']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $verV['nomecv']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $verV['idcvaso']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $verV['nomedv']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $verV['iddvaso']; ?>
                                </td>
                            </tr>
                            <?php
                                }
                                ?>
                        </tbody>
                    </table>

                </div>
                <div class="col-md-10">
                    <br>
                    <div class="container-fluid w-100">
                        <blockquote class="blockquote">
                            <p>Tabela Espécies</p>
                        </blockquote>
                        <hr size="3">
                    </div>
                    <table id="table_id17" class="display">
                    <thead>
                            <tr>
                                <th style="text-align: center">ID</th>
                                <th style="text-align: center">Familia</th>
                                <th style="text-align: center">Genero</th>
                                <th style="text-align: center">Nome Científico</th>
                                <th style="text-align: center">Nome Vulgar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                include("../controller/connBD.php");

                                $stmt = $PDO->query("select * from especie;");

                                while ($esp = $stmt->fetch()) {
                                ?>
                            <tr>
                                <td style="text-align: center">
                                    <?= $esp['id']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $esp['familia']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $esp['genero']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $esp['especie_esp']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $esp['nome_vulgar']; ?>
                                </td>
                            </tr>
                            <?php
                                }
                                ?>
                        </tbody>
                    </table>

                </div>
            </center>
        
        </div>
        <!-- Caracterisca Especie -->
        <div id="tabelaCaraEsp" class="tabelaCaraEsp d-none">
            <center>

                <div class="col-md-10">
                    <br>
                    <div class="container-fluid w-100">
                        <blockquote class="blockquote">
                            <p>Tabela Caracteristica Especie</p>
                        </blockquote>
                        <hr size="3">
                    </div>
                    <small id="prin8" style="display: none; color: red;" class="pb-2"></small>
                    <table id="table_id18" class="display">
                        <thead>
                            <tr>
                                <th style="text-align: center"><em class="fa fa-cog"></em></th>
                                <th style="text-align: center">ID</th>
                                <th style="text-align: center">fk_especie_id</th>
                                <th style="text-align: center">fk_parenquima_id</th>
                                <th style="text-align: center">fk_organolepticas_id</th>
                                <th style="text-align: center">fk_caracteres_especiais_id</th>
                                <th style="text-align: center">fk_raio_id</th>
                                <th style="text-align: center">fk_tipo_dado_vasos_id</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                include("../controller/connBD.php");

                                $stmt = $PDO->query("select * from caracteristica_especie;");

                                while ($caresp = $stmt->fetch()) {
                                ?>
                            <tr>
                                <td style="text-align: center">
                                    <button type="button" class="btn btn-danger"
                                        onclick="chamaDeleteCaracEsp(<?= $caresp['id']?>,this)">
                                        <em class="fa fa-trash"></em>
                                    </button>
                                </td>
                                <td style="text-align: center">
                                    <?= $caresp['id']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $caresp['fk_especie_id']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $caresp['fk_parenquima_id']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $caresp['fk_organolepticas_id']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $caresp['fk_caracteres_especiais_id']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $caresp['fk_raio_id']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $caresp['fk_tipo_dado_vasos_id']; ?>
                                </td>
                            </tr>
                            <?php
                                }
                                ?>
                        </tbody>
                    </table>

                </div>
            </center>
        </div>
    </div>




</body>

</html>