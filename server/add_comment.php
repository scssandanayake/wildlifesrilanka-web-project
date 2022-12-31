<?php
include 'db.php';
if (isset($_POST['savecomment'])) {
    $name = $_POST['name'];
    $msg = $_POST['msg'];

    $query = "INSERT INTO comments (commentor_name, comment) VALUES ('".$name."', '".$msg."')";
    mysqli_query($connection, $query);
    header("Location: ../index.php");
}