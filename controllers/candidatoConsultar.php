<?php
session_start();
error_reporting(0);
//mysqli_set_charset('utf8');
//header("Content-type: text/html; charset=utf-8");   

$dbhost='localhost';
$dbuser='root';
$dbpassword='';
$dbname='school';
$port=3306;
$conn =new mysqli($dbhost,$dbuser,$dbpassword,$dbname,$port);

 
 
 $pesquisa=$_POST['pesquisa'];
 $sql="SELECT * FROM candidatos as ca JOIN cursos as cu WHERE  ca.curso=cu.id AND telefone='$pesquisa' or bi='$pesquisa'";
 $result=$conn->query($sql);

 


 $res=mysqli_fetch_all($result);

 

 
 


 $conn->close();
 