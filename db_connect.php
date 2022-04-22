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

    $user = $_POST["username"];
    $pwd = $_POST["password"];

    $sql = "SELECT * FROM `admin` WHERE Username = '$user' and Password = '$pwd'";

    echo $sql;

    
    $result = $conn->query($sql);
    // echo "x = " . $result->num_rows ;
    if ($result->num_rows == 1) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo " <br>- Name: " . $row["Firstname"]. " " . $row["Lastname"]. "<br>";
      }
      header("Location: select.php");
    }
    else {
      header("Location: index.html");
    }
?>