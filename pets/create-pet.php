
<?php

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
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./styles/css/">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Pet</title>
</head>
<body>

    <form action="save-pet.php" method = "POST">
        Name <input type="text" name="Name"> <br/>
        Race <input type="text" name="Race"><br/>
        Gender <br/>
        <input type="radio" name="Gender" value="0"/> Female
        <input type="radio" name="Gender" value="1"/> Male <br/>
        Tipo<br/> 
        <select name="Tipo">
            <option value="Dog"> Dog </option> 
            <option value="Cat"> Cat </option> 
        </select>
        <br><br>
        Doctor 
        <select name="Doctor" >
        <?php
            for($i=0; $i<count($doctors); $i++){
        ?>
        <option value="<?php echo $doctors[$i]["Doctor_id"] ?>"> <?php echo $doctors[$i]["Name"] ?> </option>
        <?php
            }
        ?>
        </select>  <br> <br>
        <br/><br/>
        <input type="submit" value="Save Pet">
    
    </form>
    
</body>
</html>