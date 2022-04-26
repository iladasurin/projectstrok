<?php include('connect.php');?>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "abc123";
    $dbname = "project_1";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if($conn->connect_error){
        die("con fail" . $conn->connect_error);
    }else{
        echo "connect success <br>";
    }

    $ID = $_REQUEST['id'];

    $sql = "DELETE FROM admin WHERE ID = '$ID'";



    $result = $conn->query($sql);
    // echo "x = " . $result->num_rows ;
    header("Location: select.php");
?>