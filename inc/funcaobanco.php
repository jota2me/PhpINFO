<?php

function conexao() {
    $pdo = new PDO('mysql:dbname=infos', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
}

//conexao

function usuario($nome_usuario, $nivel_usuario, $cpf_usuario, $telefone_aluno, $tel_tutor, $tel_tutora, $login_usuario, $senha_usuario, $tutor, $tutora, $status_usuario, $id_turma, $idparentesco) {
    $pdo = conexao();
    $pst = $pdo->prepare('INSERT INTO usuario (
            nome_usuario,
            nivel_usuario,
            cpf_usuario,
            telefone_aluno,
            tel_tutor,
            tel_tutora,
            login_usuario,
            senha_usuario, 
             tutor,
             tutora,
             status_usuario,
             id_turma, 
             idparentesco) 
             VALUES(
             :nome_usuario, 
             :nivel_usuario, 
             :cpf_usuario, 
             :telefone_aluno,
             :tel_tutor, 
             :tel_tutora,
             :login_usuario, 
             :senha_usuario, 
             :tutor, 
             :tutora,
             :status_usuario,
             :id_turma,
             :idparentesco)
             ');

    $pst->bindValue(":nome_usuario", $nome_usuario);
    $pst->bindValue(":nivel_usuario", $nivel_usuario);
    $pst->bindValue(":cpf_usuario", $cpf_usuario);
    $pst->bindValue(":telefone_aluno", $telefone_aluno);
    $pst->bindValue(":tel_tutor", $tel_tutor);
    $pst->bindValue(":tel_tutora", $tel_tutora);
    $pst->bindValue(":login_usuario", $login_usuario);
    $pst->bindValue(":senha_usuario", $senha_usuario);
    $pst->bindValue(":tutor", $tutor);
    $pst->bindValue(":tutora", $tutora);
    $pst->bindValue(":status_usuario", $status_usuario);
    $pst->bindValue(":id_turma", $id_turma);
    $pst->bindValue(":idparentesco", $idparentesco);
    $pst->execute();

    return $pst;
}

function buscaUsuario($nome_usuario) {
    $pdo = conexao();
    $pst = $pdo->prepare('SELECT * FROM usuario WHERE nome_usuario LIKE :nome_usuario');
    $pst->bindValue(":nome_usuario", $nome_usuario . "%");
    $pst->execute();
    $pdo = null;
    return $pst;
}

function buscarUsuarioId($id_usuario) {
    $pdo = conexao();
    $pst = $pdo->prepare('SELECT * FROM usuario WHERE id_usuario = :id');
    $pst->bindValue(":id", $id_usuario);
    $pst->execute();
    $pdo = null;
    return $pst;
}

function atualizaUsuario($nome_usuario, $nivel_usuario, $cpf_usuario, $telefone_aluno, $tel_tutor, $tel_tutora, $login_usuario, $senha_usuario, $tutor, $tutora, $status_usuario, $id_turma, $idparentesco, $id_usuario) {

    $pdo = conexao();
    $pst = $pdo->prepare("UPDATE usuario SET nome_usuario = :nome_usuario, nivel_usuario = :nivel_usario, cpf_usuario = :cpf_usuario , telefone_aluno = :telefone_aluno, "
            . "tel_tutor = :tel_tutor, tel_tutora = :tel_tutora, login_usuario = :login_usuario, senha_usuario = :senha_usuario,"
            . " tutor = :tutor, tutora = :tutora, status_usuario = :status_usuario, id_turma = :id_turma, idparentesco = :idparentesco  WHERE id_usuario = :iduser");
    ;
    $pst->bindValue(":nome_usuario", $nome_usuario);
    $pst->bindValue(":nivel_usario", $nivel_usuario);
    $pst->bindValue(":cpf_usuario", $cpf_usuario);
    $pst->bindValue(":telefone_aluno", $telefone_aluno);
    $pst->bindValue(":tel_tutor", $tel_tutor);
    $pst->bindValue(":tel_tutora", $tel_tutora);
    $pst->bindValue(":login_usuario", $login_usuario);
    $pst->bindValue(":senha_usuario", $senha_usuario);
    $pst->bindValue(":tutor", $tutor);
    $pst->bindValue(":tutora", $tutora);
    $pst->bindValue(":status_usuario", $status_usuario);
    $pst->bindValue(":id_turma", $id_turma);
    $pst->bindValue(":idparentesco", $idparentesco);
    $pst->bindValue(":iduser", $id_usuario);
    $pst->execute();
    $pdo = null;


    return $pst;
}
