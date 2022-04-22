<?php

$servername = "localhost";
$username = "root";
$password = "abc123";
$dbname = "project_1";

$conn = new mysqli($servername, $username, $password, $dbname);
    if(mysqli_connect_error($conn)){
        echo 'Failed to connect';
    }


?>