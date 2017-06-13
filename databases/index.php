<?php
$dbHost = 'localhost';
$dbName = 'cursoPHP';
$dbUser = 'root';
$dbPass = ''; 
    try{
        $pdo =  new PDO("mysql:host=$dbHost; dbname=$dbName", $dbUser, $dbPass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(Exception $e){
        echo $e->getMessage();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
</head>
<body>
    <div class="container">
        <h1>Databases</h1>
        <ul>
            <li><a href="">List Users</a></li>
            <li><a href="">Add Users</a></li>
            <li><a href=""></a></li>
        </ul>
    </div>
</body>
</html>