<?php
    $dbhost='localhost';
    $dbuser='root';
    $dbpassword='';
    $dbname='school';
    $port=3306;

    $conn =new mysqli($dbhost,$dbuser,$dbpassword,$dbname,$port);
    

    if($conn->connect_error){
        die("A conexão falhou".$conn->connect_error);
    }

    

    