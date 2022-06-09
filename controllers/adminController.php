<?php
session_start();
   // require '../database/db.php';
   $dbhost='localhost';
   $dbuser='root';
   $dbpassword='';
   $dbname='school';
   $port=3306;

   $conn =new mysqli($dbhost,$dbuser,$dbpassword,$dbname,$port);
   

   if($conn->connect_error){
       die("A conexão falhou".$conn->connect_error);
   }
  
   $email=$_POST['email'];
   $senha=$_POST['senha'];
    
    $sql="SELECT * FROM `usuarios` WHERE email='$email' and senha='$senha'" ;
    $envio=$conn->query($sql);
    $result=mysqli_fetch_assoc($envio);
    //var_dump($result['email']);
    //$_SESSION['sessao']=0;
   if($email==$result['email'] || $senha==$result['senha']){
      if(isset($result['email'])){
         $_SESSION['sessao']=$result['email'];
     // $_SESSION['senha']=$result['senha'];
      header('location: ../frontend/src/views/telaHomeLogin');
      }
   }else{
    $_SESSION['flash_message']="O seu email ou senha está incorreta, por favor tente novamente!";
    header('location: ../frontend/src/views/telaLogin.php');
   }

     $conn->close();

    ?>



