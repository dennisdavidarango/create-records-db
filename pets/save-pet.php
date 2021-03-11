<?php

    $name = $_REQUEST["Name"];
    $race = $_REQUEST["Race"];
    $gender = $_REQUEST["Gender"];
    $tipo = $_REQUEST["Tipo"];
    

    //Conexión a la base de datos

    $host = "localhost";
    $dbname = "Pet_Shop";
    $username = "root";
    $password = "";

    $cnx = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
   
    //Construir la sentencia sql
    $sql = "INSERT INTO Pet (Id, Name, Race,  Gender, Tipo) VALUES (NULL, '$name', '$race', '$gender', '$tipo')";

    //Prepara la sentencia SQL
    $q = $cnx->prepare($sql);
    
    // Ejecutar sentencia SQL
    $result = $q->execute();  

    if($result){
        echo "Pet saved seccessfully";
    }else{
        echo "There was an error creating the Pet $name";
    }

?>