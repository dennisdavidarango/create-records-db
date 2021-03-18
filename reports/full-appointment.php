<?php

    //Conexión a la base de datos

    $host = "localhost";
    $dbname = "Pet_Shop";
    $username = "root";
    $password = "";

    $cnx = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
   
    //Construir la sentencia sql
    $sql = "SELECT d.Name as doctor_name, d.Consulting_room, p.Name as pet_name, p.Gender, p.Tipo, p.Race, a.Time FROM Doctor as d JOIN appointments as a ON d.Doctor_id = a.Doctor_id JOIN Pet p ON a.Doctor_id = p.Id  ORDER BY d.Name ASC";

    //Prepara la sentencia SQL
    $q = $cnx->prepare($sql);
    
    // Ejecutar sentencia SQL
    $result = $q->execute();  

    $appointments = $q->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointments List</title>
</head>
<body>
<h1>Reports List</h1>
    <table> 
        <tr>
            <td>Doctor Name</td>
            <td>Consulting room</td>
            <td>Pet Name</td>
            <td>Genter</td>
            <td>Tipo</td>
            <td>Race</td>
            <td>Time</td>
        </tr>

<?php
    for($i = 0; $i<count($appointments); $i++){
?>       
        <tr>
            <td>
                <?php echo $appointments[$i]["doctor_name"] ?>
            </td>
            <td><?php echo $appointments[$i]["Consulting_room"] ?></td>
            <td><?php echo $appointments[$i]["pet_name"] ?></td>
            <td><?php echo $appointments[$i]["Gender"] ?></td>
            <td><?php echo $appointments[$i]["Tipo"] ?></td>
            <td><?php echo $appointments[$i]["Race"] ?></td>
            <td><?php echo $appointments[$i]["Time"] ?></td>
        </tr>
<?php
    }
?>

    </table>
</body>
</html>