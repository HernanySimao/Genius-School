<?php 

 $dbhost='localhost';
    $dbuser='root';
   $dbpassword='';
 $dbname='school';
 $port=3306;


 $id=$_POST['id'];
 $id2=$_POST['id2'];
 $id3=$_POST['id3'];
                                
                                
$conn =new mysqli($dbhost, $dbuser, $dbpassword, $dbname, $port);
                                
                                
if (!empty($id)){
    $sql="UPDATE `candidatos` SET `estado`=1 WHERE id=$id";
    if ($conn->query($sql)==true) {
        $conn->close();
        header('location: ../frontend/src/views/telaListar');
    }
}else{
   $sql="UPDATE `candidatos` SET `estado`=0 WHERE id=$id2";
   if ($conn->query($sql)==true) {
       $conn->close();
       header('location: ../frontend/src/views/telaListar');
   }
}

if(!empty($id3)){ 
 $sql = "DELETE FROM `candidatos` WHERE `candidatos`.`id` = $id3";
 if ($conn->query($sql)==true) {
    $conn->close();
    header('location: ../frontend/src/views/telaListar');
   
}
}
?>