<?php include('connect.php');?>
<?php

    $id = $_POST['id'];
    $User_name = $_POST['Username'];
    $pass_word = $_POST['password'];
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $status = $_POST['status'];


    $sql = "UPDATE admin SET Username='$User_name',Password='$pass_word',
    Firstname='$first_name',Lastname='$last_name',Addess='$address',Phone='$phone',Status='$status' WHERE ID = $id";


    if(!$conn->query($sql)){
        echo "error";
    }
    echo $sql;
    mysqli_close($conn);
    header("Location: select.php");
    //header("Location: select.php");


?>