<?php

   require_once '../database/db.php';
  
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
        $sql1="SELECT * FROM candidatos WHERE telefone=$telefone or bi=$bi";
        $result=$conn->query($sql1);
        $re=mysqli_fetch_assoc($result);
        if($telefone==$re['telefone'] ||$bi==$re['bi']){
            $_SESSION['flash_message']="Ocorreu um erro, por favor insira um número de telefone ou bi que não esteja registado";
            header('location: ../frontend/src/views/telaCadastrar.php');
        }else{
                $sql="INSERT INTO `candidatos`(`nome`, `idade`, `sexo`, `telefone`, `bi`,`media_final`, `antiga_Escola`, `curso`, `estado`) 
                VALUES ('$nome', '$idade', '$sexo', '$telefone', '$bi', '$media_final', '$antiga_escola', '$curso',0)";
                if ($conn->query($sql)) {
            $_SESSION['flash_message']="Cadastrado com sucesso";
            header('location: ../frontend/src/views/telaCadastrar.php');
        } else {
            $_SESSION['flash_message']="Ocorreu um erro, por favor tente novamente";
            header('location: ../frontend/src/views/telaCadastrar.php');
        }
        }
    }
    $conn->close();