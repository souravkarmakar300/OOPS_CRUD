<?php
require_once 'function.php';

$user = new allfunctions();
$record = $user->read();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read All data</title>
</head>

<body>
    
        <a href="index.php">Add Page</a>

    <table border="1" width="40%">

        <tr>
            <th>Sl No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        <?php $i = 1; ?>

        <?php foreach ($record as $value): ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $value['name']; ?></td>
                <td><?php echo $value['email']; ?></td>
                <td>
                    <a href="edit.php?editid=<?php echo $value['id']; ?>">Edit</a>
                    <a href="delete.php?deleteid=<?php echo $value['id']; ?>" onclick="return confirm('Are you sure you want to delete?')">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>


    </table>

</body>

</html>