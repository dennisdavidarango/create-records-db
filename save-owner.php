<?php

    $name = $_REQUEST["Name"];
    $phone = $_REQUEST["Phone"];
    $email = $_REQUEST["Email"];
    

    //Conexión a la base de datos

    $host = "localhost";
    $dbname = "Pet_Shop";
    $username = "root";
    $password = "";

    $cnx = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
   
    //Construir la sentencia sql
    $sql = "INSERT INTO Owner (Id, Name, Phone, Email) VALUES (NULL, '$name', '$phone', '$email')";

    //Prepara la sentencia SQL
    $q = $cnx->prepare($sql);
    
    // Ejecutar sentencia SQL
    $result = $q->execute();  

    if($result){
        echo "Owner saved seccessfully";
    }else{
        echo "There was an error creating the owner";
    }

?>