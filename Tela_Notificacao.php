<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>




<!DOCTYPE html>
<html lang="BR">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TELA CADASTRAR</title>

        <link rel="stylesheet" href="style.css" type="text/css"/>
    
      
        <link rel="stylesheet" href="bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="bootstrap.min.css" type="text/css"/>
       
       
       

    </head>
    <body>
        <div class="box-parent-enviar">
            <div class="well bg-white box-enviar" style="background-color:#008B00">
                <h4 class="enviar"> NOTIFICAÇÕES</h4>
                <form role="form" style="height: 550px;">
                    
                    <div class="container">
                        <div class="form-group noti">
                            <label for="men">MENSAGEM:</label>
                            <textarea class="form-control " style="height: 300px; width:600px;background-color: white;"></textarea>

                        </div>
                    </div>
                    
                     <div class="container">
                    <div class="box-actions2">
                        <button type="submit" class="btn btn-primary" style="margin-top: 5px;">ENVIAR</button>
                        <button type="submit" class="btn btn-primary" style="margin-top: 5px;">LIMPAR</button>
                        <a href="index.php" class="btn btn-primary" style="margin-top: 5px;">VOLTAR</a>
                    
                    </div>
                     </div>
        
      
                    <div class="container" style="margin-top: -350px;margin-left: 900px;">
                            
                         <select class="form-groupdesti "style=";background-color: cadetblue;" >

                        <option value="ESCOLHA">ESCOLHA O DESTINATÁRIO</option>
                        <option value="RP">TODAS AS TURMAS</option>
                        <option value="TI">TURMA DE INFORMATICA</option>
                        <option value="TQ">TURMA DE QUIMICA</option>
                        <option value="TA">TURMA DE ALIMENTOS</option>
                        <option value="TS">TURMA DE SECRETARIADO</option>
                        <option value="TPA">TODAS OS TUTORES E ALUNOS</option>
                        <option value="RE">TUTOR ESPECIFICO</option>
                        <option value="AS"> ALUNO ESPECIFICO</option>
                    </select>
                     </div>
                </form>
         
               
            </div>
        </div>
    </body>
</html>



                  













