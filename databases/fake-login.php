<?php

$user = null;
$query = null;

if(!empty($_POST)){
    require_once 'config.php';
    // esta forma no es segura
    // $query = "SELECT * FROM users WHERE email = '" .$_POST['email'] . "' AND password = '" . md5($_POST['pass']) ."'";
    $query = "SELECT * FROM users WHERE email = :email AND password = :password";
    // $queryResult = $pdo->query($query);
    $prepared = $pdo->prepare($query);
    $prepared->execute([
        'email' => $_POST['email'],
        'password' => md5($_POST['pass'])
    ]);
    $user = $prepared->fetch(PDO::FETCH_ASSOC);
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
        <h1>Fake Login</h1>
        <a href="index.php">Home</a>
        <form action="fake-login.php" method="post">
        <label for="email">Email</label>
        <input type="text" name="email" id="email">
        <br>
        <label for="pass">Password</label>
        <input type="password" name="pass" id="pass">
        <br>
        <input type="submit" value="Login">
        </form>
        <h2>Query</h2>
        <div>
           <?php 
            print_r($query);
           ?>
        </div>
        <h2>User Data</h2>
        <div>
            <?php
                print_r($user);
            ?>
        </div>
    </div>
</body>
</html>