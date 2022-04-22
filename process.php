<?php include 'connect.php';?>
<?php

    //print_r($_POST);
    $User_name = $_POST['Username'];
    $pass_word = $_POST['password'];
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $status = $_POST['status'];


    $sql="INSERT INTO admin (Username, Password, Firstname, Lastname, Addess, Phone, Status)
    VALUES ('$User_name','$pass_word','$first_name','$last_name','$address','$phone','$status')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  header("Location: select.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

echo $User_name." ".$pass_word." ".$first_name." ".$last_name." ".$address." ".$phone." ".$status;
?>