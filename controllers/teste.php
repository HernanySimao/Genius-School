<?php
$username='root';
$password='';
$pdo = new PDO('mysql:host=localhost;dbname=school', $username, $password);

$consulta = $pdo->query("SELECT * FROM candidatos;");
   while( $res= $consulta->fetch(PDO::FETCH_ASSOC)){
       var_dump($res);
   }

   /*
$pdo = require_once 'conexao.php';


$name=$_POST['nome'];
$idade=$_POST['idade'];
$sexo=$_POST['sexo'];
$telefone=$_POST['telefone'];
$bi=$_POST['bi'];
$media=$_POST['media'];
$antiga_escola=$_POST['antiga_escola'];
$curso=$_POST['curso'];
$estado=0;


$sql = 'INSERT INTO publishers(name) VALUES(:name)';

$statement = $pdo->prepare($sql);


	$statement->execute([
		':name' => $name,
		':idade' => $idade,
		':sexo' => $sexo,
		':telefone' => $telefone,
		':bi' => $bi,
		':media_final' => $media,
		':antiga_escola' => $antiga_escola,
		':curso' => $curso,
		':estado' => $estado
	]);



*/
    