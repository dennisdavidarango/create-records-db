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
        <br/><br/>
        <input type="submit" value="Save Pet">
    
    </form>
    
</body>
</html>