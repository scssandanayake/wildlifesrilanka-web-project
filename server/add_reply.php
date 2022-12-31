<?php
include 'db.php';
if (isset($_POST['savereply'])) {
    $name = $_POST['name'];
    $reply = $_POST['reply'];
    $comment_id = $_POST['comment_id'];

    $query = "INSERT INTO replies (replier_name, reply, comment_id) VALUES ('".$name."', '".$reply."', ".$comment_id.")";
    mysqli_query($connection, $query);
    header("Location: ../index.php");
}