<?php

    $doctor_id = $_REQUEST["Doctor_id"];
    $consulting_room_id= $_REQUEST["consulting_room_id"];
    $Time = $_REQUEST["Time"];

    //Conexión a la base de datos

    $host = "localhost";
    $dbname = "Pet_Shop";
    $username = "root";
    $password = "";

    $cnx = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
   
    //Construir la sentencia sql
    $sql = "SELECT Doctor_id, Name FROM Doctor";
    //Prepara la sentencia SQL
    $q = $cnx->prepare($sql);
    // Ejecutar sentencia SQL
    $result = $q->execute();  
    $doctors = $q->fetchAll();

     //Construir la sentencia sql
     $sql = "SELECT Id, Name FROM Pet";
     //Prepara la sentencia SQL
     $q = $cnx->prepare($sql);
     // Ejecutar sentencia SQL
     $result = $q->execute();  
     $pets = $q->fetchAll();
  

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./styles/css/">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create appointment</title>
</head>
<body>

    <form action="save-appointment.php" method = "POST">
        Doctor 
        <select name="Doctor">
        <?php
            for($i=0; $i<count($doctors); $i++){
        ?>
        <option value="<?php echo $doctors[$i]["Doctor_id"] ?>"> <?php echo $doctors[$i]["Name"] ?> </option>
        <?php
            }
        ?>
        </select>  <br>
        Pets 
        <select name="Pet" >
        <?php
            for($i=0; $i<count($pets); $i++){
        ?>
        <option value="<?php echo $pets[$i]["Id"] ?>"> <?php echo $pets[$i]["Name"] ?> </option>
        <?php
            }
        ?>
        </select>  
         <br/>
        Time <input type="date" placeholder="2021-03-01" name="Time"><br/>
        
        <br/><br/>
        <input type="submit" value="Save Pet">
    
    </form>
    
</body>
</html>