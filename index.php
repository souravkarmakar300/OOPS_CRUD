<?php
require_once 'db.php';
require_once 'function.php';

$user = new allfunctions();

if($_POST['submit']){
    $user->addRecord($_POST);
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>

<body>
    <div class="container">
        <a href="read.php">All user</a>
        <form method="POST">
            Name: <input type="text" name="name">
            <br>
            Email: <input type="email" name="email">
            <br>
            <input type="submit" name="submit" value="Add">
        </form>
    </div>

</body>

</html>