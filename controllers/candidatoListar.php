<?php
//mysqli_set_charset('utf8');
//header("Content-type: text/html; charset=utf-8");
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
    
   // mysqli_set_charset('utf8');
    
    
    $sql="SELECT * FROM candidatos as ca JOIN cursos as cu WHERE ca.curso=cu.id";
    
    $result=$conn->query($sql);
    
    $res=mysqli_fetch_all($result);
    
  //var_dump($res);

    $conn->close();

    ?>



