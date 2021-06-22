<?php
try {
    $connection =  new PDO('mysql:host=localhost;dbname=products_crud', 'root', 'root');
} catch (PDOException $e) {
    print "Error : " . $e->getMessage() . "</br>";
}


//CREATE
//READ
//UPDATE
//DELETE


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products CRUD</title>
</head>

<body>

</body>

</html>