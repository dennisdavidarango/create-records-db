<?php

    $name = $_REQUEST["Name"];
    $consulting_room = $_REQUEST["Consulting_room"];
    $turnos = $_REQUEST["Turnos"];

    //Conexión a la base de datos

    $host = "localhost";
    $dbname = "Pet_Shop";
    $username = "root";
    $password = "";

    $cnx = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
   
    //Construir la sentencia sql
    $sql = "INSERT INTO Doctor (Doctor_id, Name, Consulting_room, Turnos) VALUES (NULL, '$name', '$consulting_room', '$turnos')";

    //Prepara la sentencia SQL
    $q = $cnx->prepare($sql);
    
    // Ejecutar sentencia SQL
    $result = $q->execute();  

    if($result){
        echo "Doctor saved seccessfully";
    }else{
        echo "There was an error creating the Doctor";
    }

?>