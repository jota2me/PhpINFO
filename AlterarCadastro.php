<?php
require 'inc/funcaobanco.php';

$id = null;
session_start();
$_SESSION["idsession"];

//preencher todos os campos de acordo com o registro selecionado (id)
if (!empty($_GET['id'])) {
    $id = $_REQUEST['id']; //armazenar o id para evitar ser limpo pelo botão submit
    $pst = buscarUsuarioId($id);
    $rs = $pst->fetch(PDO::FETCH_ASSOC);
    $nome_usuarios = $rs['nome_usuario'];
    $nivel_usuarios = $rs['nivel_usuario'];
    $cpf_usuarios = $rs['cpf_usuario'];
    $telefone_alunos = $rs['telefone_aluno'];
    $tel_tutors = $rs['tel_tutor'];
    $tel_tutoras = $rs['tel_tutora'];
    $login_usuarios = $rs['login_usuario'];
    $senha_usuarios = $rs['senha_usuario'];
    $tutors = $rs['tutor'];
    $tutoras = $rs['tutora'];
    $status_usuarios = $rs['status_usuario'];
    $id_turmas = $rs['id_turma'];
    $idparentescos = $rs['idparentesco'];


    $_SESSION['idsession'] = $id;
} else {
    header("Location: index.php");
}
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
    atualizaUsuario($nome_usuario, $nivel_usuario, $cpf_usuario, $telefone_aluno, $tel_tutor, $tel_tutora, $login_usuario, $senha_usuario, $tutor, $tutora, $status_usuario, $id_turma, $idparentesco, $_SESSION['idsession']);

    header("Location:index.php");
}
?>

<!DOCTYPE html>
<html lang="br">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TELA DE ATUALIZAR CADASTRO</title>


        <link rel="stylesheet" href="style.css" type="text/css"/>
        <link rel="stylesheet" href="bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="bootstrap.min.css" type="text/css"/>


    </head>

    <body>	
        <div class="box-parent-alterar">
            <div class="well bg-white box-alterar" style="background-color:#008B00;">
                <h4 class="alterar">ALTERAR USUÁRIOS</h4>
                <form  action="AlterarCadastro.php" method="post">
                    <fieldset style="width: 700px; height: 600px;">

                        <div class="container">

                            <div class="form-group nome1">
                                <label>NOME  </label> 
                                <input class="form-control  input-lg" name="nomeusuario" value="<?php echo!empty($nome_usuarios) ? $nome_usuarios : '' ?>" style="height: 30px;" type="text">
                            </div>

                        </div>



                        <div class="container">
                            <div class="form-group cpf">
                                <label>CPF</label>
                                <input class="form-control  input-lg" name="cpf" value="<?php echo!empty($cpf_usuarios) ? $cpf_usuarios : '' ?>" style="height: 30px" type="text">
                            </div>
                        </div>

                        <div class="container">


                            <div class="form-group tel">
                                <label>TEL - ALUNO</label>
                                <input class="form-control input-lg"  name="telefone_alunos" value="<?php echo!empty($telefone_alunos) ? $telefone_alunos : '' ?>" style="height: 30px" type="text" >
                            </div>
                        </div>

                        <div class="container">
                            <div class="form-group user">
                                <label>USUÁRIO</label>
                                <input class="form-control input-lg" name="usuario_login" value="<?php echo!empty($login_usuarios) ? $login_usuarios : '' ?>" style="height: 30px" type="text">
                            </div>
                        </div>

                        <div class="container">
                            <div class="form-group senha1">
                                <label>SENHA</label>
                                <input class="form-control  input-lg" name="senha" value="<?php echo!empty($senha_usuarios) ? $senha_usuarios : '' ?>" style="height: 30px" type="text" >
                            </div>
                        </div>



                        <div class="container">
                            <select class="form-group1" name="nivelusuario" value="<?php echo!empty($nivel_usuarios) ? $nivel_usuarios : '' ?>" style="height: 30px; background-color:cadetblue">

                                <option value="1">ADMINISTRADOR</option>
                                <option value="2">PROFESSOR</option>
                                <option value="3">ALUNO</option>


                            </select>

                            <select class="form-group2" name="turmas"  value="<?php echo!empty($id_turmas) ? $id_turmas : '' ?>" style="height: 30px; background-color:cadetblue">

                                <option value="1">INFORMATICA</option>
                                <option value="2">QUIMICA</option>
                                <option value="3">SECRETARIADO</option>
                                <option value="4">ALIMENTOS</option>

                            </select>


                            <select class="form-group2" name="status"  value="<?php echo!empty($status_usuarios) ? $status_usuarios : '' ?>" style="height: 30px; background-color:cadetblue">                              

                                <option value="1">ATIVO</option>
                                <option value="2">INATIVO</option>


                            </select>



                            <select class="form-group3"  name="turnos"  style="height: 30px; background-color: cadetblue" >

                                <option value="1">MATUTINO</option>
                                <option value="2">VESPERTINO</option>
                            </select>




                            <select   name="parente" value="<?php echo!empty($idparentescos) ? $idparentescos : '' ?>"  style="height: 30px; background-color:cadetblue">

                                <option value="1">PAI E MÃE</option>
                                <option value="2">AVÔ E AVÓ</option>                       
                                <option value="3">TIO E TIA</option>
                            </select>



                        </div>




                        <div class="container">

                            <div class="form-group nomeres1">
                                <label for="nomeres1">NOME DO TUTOR</label>
                                <input class="form-control  input-lg" name="nometutor" value="<?php echo!empty($tutors) ? $tutors : '' ?>" style="height: 30px" type="text" > 
                            </div>
                        </div>

                        <div class="container">
                            <div class="form-group tel1">
                                <label for="telefone1">TEL - TUTOR</label>
                                <input class="form-control input-lg" name="teltutor" value="<?php echo!empty($tel_tutors) ? $tel_tutors : '' ?>" style="height: 30px" type="text">  
                            </div>
                        </div>

                        <div class="container">
                            <div class="form-group nomeres2">
                                <label for="nomeres2">NOME DA TUTORA</label>
                                <input class="form-control  input-lg" name="nometutora" value="<?php echo!empty($tutoras) ? $tutoras : '' ?>" style="height: 30px" type="text"> 
                            </div>
                        </div>

                        <div class="container">
                            <div class="form-group tel2">
                                <label for="telefone2">TEL - TUTORA</label>
                                <input class="form-control input-lg" name="teltutora" value="<?php echo!empty($tel_tutoras) ? $tel_tutoras : '' ?>" style="height: 30px" type="text" > 
                            </div>
                        </div>




                        <div class="container">
                            <div class="box-actions">
                                <button type="submit"  class="btn btn-primary">SALVAR</button>

                                <a href="index.php" class="btn btn-primary">VOLTAR</a>
                            </div>

                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </body>
</html>