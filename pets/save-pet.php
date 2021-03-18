<?php

    $name = $_REQUEST["Name"];
    $race = $_REQUEST["Race"];
    $gender = $_REQUEST["Gender"];
    $tipo = $_REQUEST["Tipo"];
    $doctor_id = $_REQUEST["Doctor_id"];
    

    //Conexión a la base de datos

    $host = "localhost";
    $dbname = "Pet_Shop";
    $username = "root";
    $password = "";

    $cnx = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
   
    //Construir la sentencia sql
    $sql = "INSERT INTO Pet (Id, Name, Race,  Gender, Tipo, Doctor_id) VALUES (NULL, '$name', '$race', '$gender', '$tipo', '$doctor_id')";

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