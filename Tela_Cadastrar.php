<?php
require 'inc/funcaobanco.php';
if (!empty($_POST)) {

    $nome_usuario = $_POST['nomeusuario'];
    $nivel_usuario = $_POST['nivelusuario'];
    $cpf_usuario = $_POST['cpf'];
    $telefone_aluno = $_POST['telefone_alunos'];
    $tel_tutor = $_POST['teltutor'];
    $tel_tutora = $_POST['teltutora'];
    $login_usuario = $_POST['usuario_login'];
    $senha_usuario = $_POST['senha'];
    $tutor = $_POST['nometutor'];
    $tutora = $_POST['nometutora'];
    $status_usuario = $_POST['status'];
    $id_turma = $_POST['turmas'];
    $idparentesco = $_POST['parente'];

    $valor = $_POST['nivelusuario'];
    $valor = $_POST['turmas'];
    $valor = $_POST['turnos'];
    $valor = $_POST['parente'];
    $valor = $_POST['status'];
    usuario($nome_usuario, $nivel_usuario, $cpf_usuario, $telefone_aluno, $tel_tutor, $tel_tutora, $login_usuario, $senha_usuario, $tutor, $tutora, $status_usuario, $id_turma, $idparentesco);

    header("Location:index.php");
}
?>



<!DOCTYPE html>
<html lang="BR">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TELA CADASTRO</title>


        <link rel="stylesheet" href="style.css" type="text/css"/>
        <link rel="stylesheet" href="bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="bootstrap.min.css" type="text/css"/>





        <link rel="stylesheet" href="bootstrap.min.css" type="text/css">





    <div class="box-parent-cadastrar">
        <div class="well bg-white box-login" style="background-color:#008B00;">
            <h4 class="cadastro">CADASTRAR USUÁRIOS</h4>
            <form  action="Tela_Cadastrar.php" method="post">
                <fieldset style="width: 700px; height: 600px;">

                    <div class="container">

                        <div class="form-group nome1">
                            <label>NOME  </label> 
                            <input class="form-control nome-bg input-lg" name="nomeusuario"  style="height: 30px;" type="text" required="campo obrigatório">
                        </div>

                    </div>



                    <div class="container">
                        <div class="form-group cpf">
                            <label>CPF</label>
                            <input class="form-control  input-lg" name="cpf"  style="height: 30px" type="text"  required="campo obrigatório">
                        </div>
                    </div>

                    <div class="container">


                        <div class="form-group tel">
                            <label>TEL - ALUNO</label>
                            <input class="form-control input-lg"  name="telefone_alunos"  style="height: 30px" type="text" required="campo obrigatório">
                        </div>
                    </div>

                    <div class="container">
                        <div class="form-group user">
                            <label>USUÁRIO</label>
                            <input class="form-control input-lg" name="usuario_login"  style="height: 30px" type="text" required="campo obrigatório">
                        </div>
                    </div>

                    <div class="container">
                        <div class="form-group senha1">
                            <label for="senha">SENHA</label>
                            <input class="form-control  input-lg" name="senha"  style="height: 30px" type="text" required="campo obrigatório">
                        </div>
                    </div>



                    <div class="container">
                        <select class="form-group1" name="nivelusuario" style="height: 30px; background-color:cadetblue" required="campo obrigatório">
                            <option value="ESCOLHA">NIVÉL DO USUÁRIO</option>
                            <option value="1">ADMINISTRADOR</option>
                            <option value="2">PROFESSOR</option>
                            <option value="3">ALUNO</option>


                        </select>

                        <select class="form-group2" name="turmas" style="height: 30px; background-color:cadetblue" required="campo obrigatório">
                            <option value="ESCOLHA">ESCOLHA A TURMA</option>
                            <option value="1">INFORMATICA</option>
                            <option value="2">QUIMICA</option>
                            <option value="3">SECRETARIADO</option>
                            <option value="4">ALIMENTOS</option>

                        </select>


                        <select class="form-group5" name="status" style="height: 30px; background-color:cadetblue" required="campo obrigatório">                              
                            <option value ="OPÇÃO">STATUS</option>
                            <option value="1">ATIVO</option>
                            <option value="2">INATIVO</option>


                        </select>



                        <select class="form-group3"  name="turnos" style="height: 30px; background-color: cadetblue">
                            <option value="ESCOLHA">ESCOLHA O TURNO</option>
                            <option value="1">MATUTINO</option>
                            <option value="2">VESPERTINO</option>
                        </select>




                        <select class="form-group4"  name="parente" style="height: 30px; background-color:cadetblue" required="campo obrigatório">
                            <option value="ESCOLHA">PARENTESCO</option>
                            <option value="1">PAI E MÃE</option>
                            <option value="2">AVÔ E AVÓ</option>
                            <option value="3">TIO E TIA</option>


                        </select>

                    </div>

                   


                    <div class="container">

                        <div class="form-group nomeres1">
                            <label for="nomeres1">NOME DO TUTOR</label>
                            <input class="form-control  input-lg" name="nometutor" style="height: 30px" type="text" placeholder="Nome do Tutor..." required="campo obrigatório"> 
                        </div>
                    </div>

                    <div class="container">
                        <div class="form-group tel1">
                            <label for="telefone1">TEL - TUTOR</label>
                            <input class="form-control input-lg" name="teltutor" style="height: 30px" type="text" placeholder="Tel do Tutor..." required="campo obrigatório">  
                        </div>
                    </div>

                    <div class="container">
                        <div class="form-group nomeres2">
                            <label for="nomeres2">NOME DA TUTORA</label>
                            <input class="form-control  input-lg" name="nometutora" style="height: 30px" type="text"  placeholder="Nome da Tutora..." required="campo obrigatório"> 
                        </div>
                    </div>

                    <div class="container">
                        <div class="form-group tel2">
                            <label for="telefone2">TEL - TUTORA</label>
                            <input class="form-control input-lg" name="teltutora"  style="height: 30px" type="text"  placeholder="Nome da Tutora..." required="campo obrigatório"> 
                        </div>
                    </div>




                    <div class="container">
                        <div class="box-actions">
                            <button type="submit"  class="btn btn-primary">CADASTRAR</button>
                            <button type="submit" class="btn btn-primary">ALTERAR</button>
                            <button type="submit" class="btn btn-primary">EXCLUIR</button>
                            <a href="index.php" class="btn btn-primary">VOLTAR</a>
                        </div>

                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</head>
</html>