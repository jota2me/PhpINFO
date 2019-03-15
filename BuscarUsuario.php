<?php
if (isset($_GET['acao']) == 'adicionar') {
    //echo $_GET['acao'];
    session_start();
    $_SESSION['ids'][] = $_GET['id'];
}//if
?>


<!DOCTYPE html>
<html lang="pt-br">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>TELA BUSCAR USUÁRIO</title>


        <link rel="stylesheet" href="style.css" type="text/css"/>
        <link rel="stylesheet" href="bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="bootstrap.min.css" type="text/css"/>





        <link rel="stylesheet" href="bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <style>
        body {
            background-color: #008B00;
        }
    </style>
    <body>

        <div class="box-parent-buscar">
            <div class="well bg-white box-buscar" style="background-color:#008B00;">
                <h4 class="buscar">BUSCAR USUÁRIOS</h4>
                <form  action="BuscarUsuario.php" method="post" id="form1">
                    <fieldset style="width: 700px; height: 600px;">



                        <div class="py-3">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="input-group w-100">
                                            <input type="text" name="desc" style="width: 1050px; margin-left: 20px; margin-top: 25px;" class="form-control" placeholder="Informe o nome do usuario que deseja procurar">
                                            <div class="input-group-append">
                                                <button class="btn btn-light" style="margin-left: 1080px; margin-top: -55px;" type="submit">Buscar</button>
                                            </div>
                                        </div>

                                        <div class="py-2">
                                            <div class="container">
                                                <div class="row">
                                                    <div  class="col-md-12">           
                                                        <table class="table table-bordered table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th ><FONT COLOR="ffffff">ID USUARIO</FONT></th>              
                                                                    <th width="20%"><FONT COLOR="ffffff">NOME USUARIO</FONT></th>
                                                                    <th ><FONT COLOR="ffffff">CPF</FONT></th>              
                                                                    <th width="20%"><FONT COLOR="ffffff">TELEFONE DO ALUNO</FONT></th>
                                                                    <th width="20%"><FONT COLOR="ffffff">SELECIONAR</FONT></th>

                                                            </thead> 

                                                            <tbody>

                                                                <?php
                                                                include 'inc/funcaoBanco.php';
                                                                if (!empty($_POST)) {

                                                                    $pst = buscaUsuario($_POST['desc']);
                                                                    $rs = $pst->fetchAll(PDO::FETCH_ASSOC);
                                                                    if ($rs == NULL) {
                                                                        echo '<tr>';
                                                                        echo '<td colspan="6">Nenhum usuario encontrado</td>';
                                                                        echo '</tr>';
                                                                    }

                                                                    foreach ($rs as $coluna) {
                                                                        echo'<tr>';
                                                                        echo '<td>' . $coluna['id_usuario'] . '</td>';
                                                                        echo '<td>' . $coluna['nome_usuario'] . '</td>';
                                                                        echo '<td>' . $coluna['cpf_usuario'] . '</td>';
                                                                        echo '<td>' . $coluna['telefone_aluno'] . '</td>';


                                                                        echo'<td>';
                                                                        echo'<a href="AlterarCadastro.php?acao=adicionar&id=' . $coluna['id_usuario'] . '" style="margin-left:70px;"  class="btn btn-warning "> Alterar</a>';
                                                                        echo '</td>';


                                                                        echo'</tr>';
                                                                    }//foreach
                                                                } else {
                                                                    echo '<tr>';
                                                                    echo '<td colspan="7">Nenhum usuario encontrado</td>';
                                                                    echo '</tr>';
                                                                }//else
                                                                ?>  



                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <a class="btn btn-success" href="AlterarCadastro.php">Confirmar</a>
                                                        <a class="btn btn-danger" href="index.php">Cancelar </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </body>
</html>
