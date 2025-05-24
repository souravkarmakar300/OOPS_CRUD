<?php

include_once 'db.php';
include_once 'function.php';

$user = new allfunctions();

if (isset($_GET['editid'])) {
    if (isset($_GET['editid'])) {
        $editdata = $user->getfromdata($_GET['editid']);
    }

    if (isset($_POST['update'])) {
        $user->updatedata($_POST, $_GET['editid']);
    }
} else {
    header("Location: read.php");
    exit();
}




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
</head>

<body>
    <div class="container">
        <form method="POST">
            <h3>Update User</h3>
            Name: <input type="text" name="name" value="<?php echo $editdata['name']; ?>">
            <br>
            Email: <input type="email" name="email" value="<?php echo $editdata['email']; ?>">
            <br>
            <input type="submit" name="update" value="Update Data">
        </form>
    </div>

</body>

</html>