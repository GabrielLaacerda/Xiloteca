<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../View/css/index.css">
    <link rel="stylesheet" type="text/css" href="../View/css/navbar.css">
    <link rel="stylesheet" type="text/css" href="../View/Font-awesome/css/font-awesome.css">
    <!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> -->
    <link rel="stylesheet" type="text/css" href="../View/css/datatables.css">
    <title>Xiloteca</title>
    <script src="js/jquery-3.6.0.js"></script>
    <script src="../Bootstrap/js/bootstrap.min.js"></script>
    <!-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->
    <script src="js/datatables.js"></script>
    <script src="js/Index.js"></script>
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
  

  // include('navbar.php');
  ?>

    <div class="container-fluid" id="consultas">
        <center>
            <article>
                <h1>Consultas</h1>
                <p>Filtre as informações clicando nos botões abaixo</p>
            </article>
        </center><br>

        <div class="container-fluid opcoes">
            <button type="button" id="opTb" class="btn btn-success btn-lg">Tabelas Separadas <i class="fa fa-leaf"
                    aria-hidden="true"></i></button>
            <button type="button" id="botaoEspecie" class="btn m btn-lg">Dados de Espécies <i class="fa fa-leaf"
                    aria-hidden="true"></i></button>
            <button type="button" id="botaoAmostra" class="btn btn-success btn-lg">Dados de Amostras <i
                    class="fa fa-leaf" aria-hidden="true"></i></button>
            <button type="button" id="botaoLamina" class="btn m btn-lg">Dados de Lâminas <i class="fa fa-leaf"
                    aria-hidden="true"></i></button>
        </div>

        <hr size="4" width="98%">

        <div class="container-fluid w-100">
            <div id="opcoesSeparadas" class="row hidd">
                <div id="TabelasSeparadas" class="col-2">
                    <center>
                        <h1 class="display-6">Opções</h1>
                    </center>
                    <button type="button" id="botaoRaios" class="btn btn-success btn-lg w-100">Raios</button>
                    <button type="button" id="botaoVasos" class="btn m btn-lg w-100">Vasos</button>
                    <button type="button" id="botaoParenquimas"
                        class="btn btn-success btn-lg w-100">Parênquimas</button>
                    <button type="button" id="botaoOrganolepticas" class="btn m btn-lg w-100">Organolépticas</button>
                    <button type="button" id="botaoCaracEsp" class="btn btn-success btn-lg w-100">Caracteres
                        Especiais</button>
                </div>

                <div id="BuscaPrincipal" class="col-md-10">
                    <h1 class="display-6">Selecione ao lado a tabela desejada</h1>
                    <center><img src="Imagens/lupa.png" style="width:425px;height:425px;margin-top:-5%"></center>
                </div>

                <!-- Tabela Organolepticas--><br>
                <div id="TabOrganolepticas" class="col-md-10 t">
                    <h1 class="display-6">Tabela de Organolepticas</h1><br>
                    <table id="table_id4" class="display">
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

                <!-- Tabela Parenquimas --><br>
                <div id="TabParenquimas" class="col-md-10 t">
                    <h1 class="display-6">Tabela de Parenquimas</h1><br>
                    <table id="table_id5" class="display">
                        <thead>
                            <tr>
                                <th style="text-align: center">Ver Mais</th>
                                <th style="text-align: center">Id</th>
                                <th style="text-align: center">tipo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
              include("../controller/connBD.php");

              $stmt = $PDO->query("select * from Parenquima;");

              while ($lam5 = $stmt->fetch()) {
              ?>
                            <tr>
                                <td style="text-align: center">
                                    <button type="submit" class="btn b btn-success" onclick="chamaVerParenquima()">
                                        <i class="fa fa-search-plus" aria-hidden="true"></i>
                                    </button>
                                </td>
                                <td style="text-align: center">
                                    <?= $lam5['id']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $lam5['tipo']; ?>
                                </td>
                            </tr>
                            <?php
              }
              ?>
                        </tbody>
                    </table>
                </div>
                <div id="parenquimaCom" class="d-none mt-4">
                    <table id="table_id9" class="display">
                        <thead>
                            <tr>
                                <th style="text-align: center">ID Parenquima</th>
                                <th style="text-align: center">Tipo</th>
                                <th style="text-align: center">Nome</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
              include("../controller/connBD.php");

                $stmt = $PDO->query("select p.id as idparen, p.tipo, cp.nome
                from parenquima as p, carac_parenquima as cp
                where p.id = cp.fk_parenquima_id;");

                while ($lam10 = $stmt->fetch()) {
                ?>
                            <tr>
                                <td style="text-align: center">
                                    <?= $lam10['idparen']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $lam10['tipo']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $lam10['nome']; ?>
                                </td>
                            </tr>
                            <?php
              }
              ?>
                        </tbody>
                    </table>
                </div>
                <!-- Tabela Caracteres Especiais --><br>
                <div id="TabCaracEsp" class="col-md-10 t">
                    <h1 class="display-6">Tabela de Caracteres Especiais</h1><br>
                    <table id="table_id6" class="display">
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

              while ($lam6 = $stmt->fetch()) {
              ?>
                            <tr>
                                <td style="text-align: center">
                                    <?= $lam6['id']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $lam6['descricao']; ?>
                                </td>
                            </tr>
                            <?php
              }
              ?>
                        </tbody>
                    </table>
                </div>

                <!-- Tabela Raios--><br>
                <div id="TabRaios" class="col-md-10 t">
                    <h1 class="display-6">Tabela de Raios</h1><br>
                    <table id="table_id8" class="display">
                        <thead>
                            <tr>
                                <th style="text-align: center">Ver Mais</th>
                                <th style="text-align: center">Id</th>
                                <th style="text-align: center">Tipo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
              include("../controller/connBD.php");

              $stmt = $PDO->query("select * from raio;");

              while ($lam8 = $stmt->fetch()) {
              ?>
                            <tr>
                                <td style="text-align: center">
                                    <button type="button" class="btn b btn-success" onclick="chamaVerRaios()">
                                        <i class="fa fa-search-plus" aria-hidden="true"></i>
                                    </button>
                                </td>
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
                <div id="raiosCom" class="d-none mt-4">
                    <table id="table_id10" class="display">
                        <thead>
                            <tr>
                                <th style="text-align: center">ID Raio</th>
                                <th style="text-align: center">Tipo</th>
                                <th style="text-align: center">Id Carac</th>
                                <th style="text-align: center">Nome</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
              include("../controller/connBD.php");

                $stmt = $PDO->query("select raio.id as idraio, raio.tipo, carac_raio.id as idcarac,carac_raio.nome from carac_raio
                join raio on carac_raio.fk_raio_id = raio.id;");

                while ($lam11 = $stmt->fetch()) {
                ?>
                            <tr>
                                <td style="text-align: center">
                                    <?= $lam11['idraio']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $lam11['tipo']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $lam11['idcarac']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $lam11['nome']; ?>
                                </td>
                            </tr>
                            <?php
              }
              ?>
                        </tbody>
                    </table>
                </div>

                <!-- Tabela Caracteres Vasos --><br>
                <div id="TabVasos" class="col-md-10 t">
                    <h1 class="display-6">Tabela de Vasos</h1><br>
                    <table id="table_id7" class="display">
                        <thead>
                            <tr>
                                <th style="text-align: center">Ver Mais</th>
                                <th style="text-align: center">Id</th>
                                <th style="text-align: center">Nome</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
              include("../controller/connBD.php");

              $stmt = $PDO->query("select * from tipo_dado_vasos;");

              while ($lam7 = $stmt->fetch()) {
              ?>
                            <tr>
                                <td style="text-align: center">
                                    <button type="button" class="btn b btn-success" onclick="chamaVerVasos()">
                                        <i class="fa fa-search-plus" aria-hidden="true"></i>
                                    </button>
                                </td>
                                <td style="text-align: center">
                                    <?= $lam7['id']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $lam7['nome']; ?>
                                </td>
                            </tr>
                            <?php
              }
              ?>
                        </tbody>
                    </table>
                </div>
                <div id="vasosCom" class="d-none mt-4">
                    <table id="table_id11" class="display">
                        <thead>
                            <tr>
                                <th style="text-align: center">ID Vaso</th>
                                <th style="text-align: center">Nome Vaso</th>
                                <th style="text-align: center">Id Carac</th>
                                <th style="text-align: center">Nome Carac</th>
                                <th style="text-align: center">Id Defin</th>
                                <th style="text-align: center">Nome Defin</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
              include("../controller/connBD.php");

                $stmt = $PDO->query("select tdv.id as idvaso, tdv.nome as nomevaso, cv.id as idcarac, cv.nome as nomecarac,
                dv.id as iddef, dv.nome as nomedef from tipo_dado_vasos tdv join carac_vasos as cv on 
                tdv.id = cv.fk_tipo_dado_vasos_id join defin_vasos dv on dv.fk = cv.id;");

                while ($lam12 = $stmt->fetch()) {
                ?>
                            <tr>
                                <td style="text-align: center">
                                    <?= $lam12['idvaso']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $lam12['nomevaso']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $lam12['idcarac']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $lam12['nomecarac']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $lam12['iddef']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $lam12['nomedef']; ?>
                                </td>
                            </tr>
                            <?php
              }
              ?>
                        </tbody>
                    </table>
                </div>
    
                <!-- Tabela Laminas --><br>
                <div id="TabLaminas" class="col-md-12 t">
                    <h1 class="display-6">Tabela de Laminas</h1><br>
                    <table id="table_id1" class="display">
                        <thead>
                            <tr>
                                <th style="text-align: center">Ver Mais</th>
                                <th style="text-align: center">Numero</th>
                                <th style="text-align: center">Armario</th>
                                <th style="text-align: center">Gaveta</th>
                                <th style="text-align: center">ID Amostra</th>
                                <th style="text-align: center">Nome Vulgar</th>
                                <th style="text-align: center">Familia</th>
                                <th style="text-align: center">Gênero</th>
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
                                    <button type="button" class="btn b btn-success" onclick="">
                                        <i class="fa fa-search-plus" aria-hidden="true"></i>
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
                <!-- Tabela Espécies --><br>
                <div id="TabEspecies" class="col-md-12 t">
                    <h1 class="display-6">Tabela de Espécies</h1><br>
                    <table id="table_id3" class="display">
                        <thead>
                            <tr>
                                <th style="text-align: center">Ver Mais</th>
                                <th style="text-align: center">Id</th>
                                <th style="text-align: center">Familia</th>
                                <th style="text-align: center">Genero</th>
                                <th style="text-align: center">Nome</th>
                                <th style="text-align: center">Nome Vulgar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
              include("../controller/connBD.php");

              $stmt = $PDO->query("select * from especie;");

              while ($lam2 = $stmt->fetch()) {
              ?>
                            <tr>
                                <td style="text-align: center">
                                    <button type="button" class="btn b btn-success" onclick="">
                                        <i class="fa fa-search-plus" aria-hidden="true"></i>
                                    </button>
                                </td>
                                <td style="text-align: center">
                                    <?= $lam2['id']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $lam2['familia']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $lam2['genero']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $lam2['especie_esp']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $lam2['nome_vulgar']; ?>
                                </td>
                            </tr>
                            <?php
              }
              ?>
                        </tbody>
                    </table>
                </div>

                <!-- Tabela Amostras -->
                <div id="TabAmostras" class="col-md-12 t">
                    <h1 class="display-6">Tabela de Amostras</h1><br>
                    <table id="table_id2" class="display">
                        <thead>
                            <tr>
                                <th style="text-align: center">Ver Mais</th>
                                <th style="text-align: center">Numero</th>
                                <th style="text-align: center">Armario</th>
                                <th style="text-align: center">Gaveta</th>
                                <th style="text-align: center">Data Cadastro</th>
                                <th style="text-align: center">Formato</th>
                                <th style="text-align: center">Origem</th>
                                <th style="text-align: center">Bioma</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
              include("../controller/connBD.php");

              $stmt = $PDO->query("select * from amostra;");

              while ($lam3 = $stmt->fetch()) {
              ?>
                            <tr>
                                <td style="text-align: center">
                                    <button type="button" class="btn b btn-success" onclick="">
                                        <i class="fa fa-search-plus" aria-hidden="true"></i>
                                    </button>
                                </td>
                                <td style="text-align: center">
                                    <?= $lam3['numero']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $lam3['armario']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $lam3['gaveta']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $lam3['data_cadastro']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $lam3['formato']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $lam3['origem']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $lam3['bioma']; ?>
                                </td>
                            </tr>
                            <?php
              }
              ?>
                        </tbody>
                    </table>
                </div>

                <div id="amostraCom" class="mt-4 d-none">
                <?php
              include("../controller/connBD.php");

                $stmt = $PDO->query("select * from varAmostra2");

                while ($amos1 = $stmt->fetch()) {
                ?>
                <hr size="10" width="100%" style="color: DarkGreen">
                                <h4 >Numero</h4>
                                <span><?= $amos1['numamostra']; ?></span>
                                <h4 >Gaveta</h4>
                                <span> <?= $amos1['numgaveta']; ?>  </span>
                                <h4 >Armário</h4>
                                <span> <?= $amos1['numarmario']; ?> </span>
                                <h4 >Data de cadastro</h4>
                                <span> <?= $amos1['data_cadastro']; ?> </span>
                                <h4 >Formato</h4>
                                <span>  <?= $amos1['formato']; ?></span>
                                <h4 >Origem</h4>
                                <span> <?= $amos1['origem']; ?> </span>
                                <h4 >Bioma</h4>
                                <span> <?= $amos1['bioma']; ?> </span>
                                <h4 >Num_lamina</h4>
                                <span> <?= $amos1['numlamina']; ?> </span>
                                <h4 >Armário_l</h4>
                                <span> <?= $amos1['armariolamina']; ?> </span>
                                <h4 >Gaveta_l</h4>
                                <span> <?= $amos1['gavetalamina']; ?> </span>
                                <h4 >Família_esp</h4>
                                <span> <?= $amos1['familia']; ?> </span>
                                <h4 >Genero_esp</h4>
                                <span> <?= $amos1['genero']; ?> </span>
                                <h4 >Nome Científico</h4>
                                <span>  <?= $amos1['nome']; ?> </span>
                                <h4 >Nome Vulgar</h4>
                                <span> <?= $amos1['nomevulgar']; ?> </span>
                                <h4 >Parenquima nome</h4>
                                <span> <?= $amos1['tipoparen']; ?> </span>
                                <h4 >Parenquima Carac</h4>
                                <span>  <?= $amos1['nomeparen']; ?> </span>
                                <h4 >Odor</h4>
                                <span> <?= $amos1['odor']; ?> </span>
                                <h4 >Gosto</h4>
                                <span> <?= $amos1['gosto']; ?> </span>
                                <h4 >Brilho</h4>
                                <span> <?= $amos1['brilho']; ?> </span>
                                <h4 >Textura</h4>
                                <span> <?= $amos1['textura']; ?> </span>
                                <h4 >Cor</h4>
                                <span> <?= $amos1['cor']; ?> </span>
                                <h4 >Caracteres Especiais</h4>
                                <span> <?= $amos1['caracdesc']; ?> </span>
                                <h4 >Raio Nome</h4>
                                <span>  <?= $amos1['tiporaio']; ?></span>
                                <h4 >Raio Carac</h4>
                                <span>   <?= $amos1['nomecarac']; ?></span>
                                <h4 >Vaso nome</h4>
                                <span>  <?= $amos1['nomevaso']; ?> </span>
                                <h4 >Vaso Carac</h4>
                                <span> <?= $amos1['caracvaso']; ?> </span>
                                <h4 >Vaso Defin</h4>
                                <span> <?= $amos1['definnome']; ?></span>
                                <hr size="10" width="100%" style="color: DarkGreen">

                                
                            <?php
              }
              ?>

                </div>

                <!-- <div id="amostraCom" class="mt-4">
                    <table id="table_id12" class="display" style="width: 100%;">
                        <thead>
                            <tr>
                                <th style="text-align: center">Numero</th>
                                <th style="text-align: center">Gaveta</th>
                                <th style="text-align: center">Armário</th>
                                <th style="text-align: center">Data de cadastro</th>
                                <th style="text-align: center">Formato</th>
                                <th style="text-align: center">Origem</th>
                                <th style="text-align: center">Bioma</th>
                                <th style="text-align: center">Num_lamina</th>
                                <th style="text-align: center">Armário_l</th>
                                <th style="text-align: center">Gaveta_l</th>
                                <th style="text-align: center">Família_esp</th>
                                <th style="text-align: center">Genero_esp</th>
                                <th style="text-align: center">Nome Científico</th>
                                <th style="text-align: center">Nome Vulgar</th>
                                <th style="text-align: center">Parenquima nome</th>
                                <th style="text-align: center">Parenquima Carac</th>
                                <th style="text-align: center">Odor</th>
                                <th style="text-align: center">Gosto</th>
                                <th style="text-align: center">Brilho</th>
                                <th style="text-align: center">Textura</th>
                                <th style="text-align: center">Cor</th>
                                <th style="text-align: center">Caracteres Especiais</th>
                                <th style="text-align: center">Raio Nome</th>
                                <th style="text-align: center">Raio Carac</th>
                                <th style="text-align: center">Vaso nome</th>
                                <th style="text-align: center">Vaso Carac</th>
                                <th style="text-align: center">Vaso Defin</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
              include("../controller/connBD.php");

                $stmt = $PDO->query("select * from varAmostra2");

                while ($amos1 = $stmt->fetch()) {
                ?>
                            <tr>
                                <td style="text-align: center">
                                    <?= $amos1['numamostra']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $amos1['numgaveta']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $amos1['numarmario']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $amos1['data_cadastro']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $amos1['formato']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $amos1['origem']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $amos1['bioma']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $amos1['numlamina']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $amos1['armariolamina']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $amos1['gavetalamina']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $amos1['familia']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $amos1['genero']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $amos1['nome']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $amos1['nomevulgar']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $amos1['tipoparen']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $amos1['nomeparen']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $amos1['odor']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $amos1['gosto']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $amos1['brilho']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $amos1['textura']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $amos1['cor']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $amos1['caracdesc']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $amos1['tiporaio']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $amos1['nomecarac']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $amos1['nomevaso']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $amos1['caracvaso']; ?>
                                </td>
                                <td style="text-align: center">
                                    <?= $amos1['definnome']; ?>
                                </td>
                            </tr>
                            <?php
              }
              ?>
                        </tbody>
                    </table>
                </div> -->
            </div>
        </div>


    </div>




</body>

</html>