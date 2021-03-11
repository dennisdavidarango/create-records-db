<?php

    $doctor = $_REQUEST["Doctor"];
    $pet= $_REQUEST["Pet"];
    $time = $_REQUEST["Time"];

    //Conexión a la base de datos

    $host = "localhost";
    $dbname = "Pet_Shop";
    $username = "root";
    $password = "";

    $cnx = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
   
    //Construir la sentencia sql
    $sql = "INSERT INTO appointments (Id, Doctor, Pet, Time) VALUES (NULL, '$doctor', '$Pet', '$time')";

    //Prepara la sentencia SQL
    $q = $cnx->prepare($sql);
    
    // Ejecutar sentencia SQL
    $result = $q->execute();  

    if($result){
        echo "appointment saved seccessfully";
    }else{
        echo "There was an error creating the Apointment";
    }

?>