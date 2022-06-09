<?php
error_reporting(0);
//require_once '../database/db.php';
$dbhost='localhost';
$dbuser='root';
$dbpassword='';
$dbname='school';
$port=3306;

$conn =new mysqli($dbhost,$dbuser,$dbpassword,$dbname,$port);
//$consulta=$_POST['pesquisa'];
//var_dump($consulta);

 

$pesquisa=$_POST['pesquisa'];
 $sql="SELECT * FROM candidatos as ca JOIN cursos as cu WHERE  ca.curso=cu.id AND telefone='$pesquisa' or bi='$pesquisa'";

 $result=$conn->query($sql);

 $res=mysqli_fetch_all($result);
 
 


 $conn->close();
