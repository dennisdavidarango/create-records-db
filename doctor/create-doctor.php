<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./styles/css/">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Doctor</title>
</head>
<body>

    <form action="save-doctor.php" method = "POST">
        Name <input type="text" name="Name"> <br/>
        Consulting Room 
        <select name="Consulting_room">
            <option value="1"> 1 </option> 
            <option value="2"> 2 </option> 
            <option value="3"> 3 </option> 
            <option value="4"> 4 </option> 
            <option value="5"> 5 </option> 
        </select>
         <br/>
        Turnos <br/>
        <input type="number" name="Turnos">
       
        <br/><br/>
        <input type="submit" value="Save Doctor">
    
    </form>
    
</body>
</html>