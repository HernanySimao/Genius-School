<?php

//mysqli_set_charset('utf8');
//header("Content-type: text/html; charset=utf-8");   
//require_once '../database/db.php';
$dbhost='localhost';
$dbuser='root';
$dbpassword='';
$dbname='school';
$port=3306;
$conn =new mysqli($dbhost,$dbuser,$dbpassword,$dbname,$port);
//$consulta=$_POST['pesquisa'];
//var_dump($consulta);
//default character set = utf8
 
$sqlSexoM="SELECT sexo FROM candidatos WHERE sexo='M' AND estado=1";
$sqlSexoF="SELECT sexo FROM candidatos WHERE sexo='F' AND estado=1";

$sql="SELECT sexo FROM candidatos WHERE estado=1";
$sqlInformatica="SELECT curso FROM candidatos WHERE curso=1 AND estado=1";
$sqlElectricidade="SELECT curso FROM candidatos WHERE curso=2 AND estado=1";
$sqlQuimica="SELECT curso FROM candidatos WHERE curso=3 AND estado=1";
$sqlConstrucao="SELECT curso FROM candidatos WHERE curso=4 AND estado=1";
$sqlMecanica="SELECT curso FROM candidatos WHERE curso=5 AND estado=1";
$sqlMedicina="SELECT curso FROM candidatos WHERE curso=6 AND estado=1";


$resultSexoM=$conn->query($sqlSexoM);
$resultSexoF=$conn->query($sqlSexoF);

 $result=$conn->query($sql);
 $resultInformatica=$conn->query($sqlInformatica);
 $resultElectricidade=$conn->query($sqlElectricidade);
 $resultQuimica=$conn->query($sqlQuimica);
 $resultConstrucao=$conn->query($sqlConstrucao);
 $resultMecanica=$conn->query($sqlMecanica);
 $resultMedicina=$conn->query($sqlMedicina);
 
 $totalSexoM=mysqli_num_rows($resultSexoM);
 $totalSexoF=mysqli_num_rows($resultSexoF);

$totalunos=mysqli_num_rows($result);
$totalInfo=mysqli_num_rows($resultInformatica);
$totalElec=mysqli_num_rows($resultElectricidade);
$totalQuimi=mysqli_num_rows($resultQuimica);
$totalConstru=mysqli_num_rows($resultConstrucao);
$totalMeca=mysqli_num_rows($resultMecanica);
$totalMedi=mysqli_num_rows($resultMedicina);

if($totalunos>0){
    $perSexoM=($totalSexoM/$totalunos)*100;
    $perSexoF=($totalSexoF/$totalunos)*100;
    
    $perInfo=($totalInfo/$totalunos)*100;
    $perElec=($totalElec/$totalunos)*100;
    $perQuimi=($totalQuimi/$totalunos)*100;
    $perConstru=($totalConstru/$totalunos)*100;
    $perMeca=($totalMeca/$totalunos)*100;
    $perMedi=($totalMedi/$totalunos)*100;
    
    
    $perTotal=$perInfo+$perElec+$perQuimi+$perConstru+$perMeca+$perMedi;
    
    $perTotalSexo=$perSexoM+$perSexoF;
        
}else{
    $perSexoM=0;
    $perSexoF=0;
    
    $perInfo=0;
    $perElec=0;
    $perQuimi=0;
    $perConstru=0;
    $perMeca=0;
    $perMedi=0;
    
    
    $perTotal=0;
    
    $perTotalSexo=0;
}





 $conn->close();
