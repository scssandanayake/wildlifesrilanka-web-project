<?php
    const DB_HOST = 'localhost';
    const DB_USER = 'u190354275_root';
    const DB_PASS = 'chammarox123#ABC';
    const DB_NAME = 'u190354275_forumdb';

    $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if(!$connection){
        die("Connection Failed: ".mysqli_connect_error());
    } else {  
        mysqli_select_db($connection, 'u190354275_forumdb');
    } 
?>