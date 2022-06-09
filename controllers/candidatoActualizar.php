<?php

   require_once '../database/db.php';
  //require 'actualizarCandidato.php';
    session_start();
    

    $nome=$_POST['nome'];
    $idade=$_POST['idade'];
    $sexo=$_POST['sexo'];
    $telefone=$_POST['telemovel'];
    $bi=$_POST['bilhete'];
    $media_final=$_POST['mediaFinal'];
    $antiga_escola=$_POST['escolaAntiga'];
    $curso=$_POST['cursosDaEscola'];

 

    if ($idade<=20 || $idade>=12) {
        $sql="UPDATE `candidatos` SET `nome`='$nome',`idade`='$idade',
        `sexo`='$sexo',`telefone`='$telefone',`bi`='$bi',
        `media_final`='$media_final',`antiga_Escola`='$antiga_escola',`curso`='$curso' WHERE id=23";
        if ($conn->query($sql)) {
            $_SESSION['flash_message']="Actualizado com sucesso";
            header('location: ../frontend/src/views/telaConsultar.php');
        } else {
            $_SESSION['flash_message']="Ocorreu um erro, por favor tente novamente";
            header('location: ../frontend/src/views/telaConsultar.php');
        }
    }
    $conn->close();