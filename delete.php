<?php
require_once 'db.php';
require_once 'function.php';

if (isset($_GET['deleteid'])) {
    $user = new allfunctions();
    $user->delete($_GET['deleteid']);
    header("Location: read.php");
    exit;
}

?>