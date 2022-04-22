<meta charset="UTF-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<?php
//1. เชื่อมต่อ database:
include('connect.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
//2. query ข้อมูลจากตาราง tb_member:
$query = "SELECT * FROM admin ORDER BY ID asc" or die("Error:" . mysqli_error());
//3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
$result = mysqli_query($conn, $query);
//4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล:
echo "<div class='container'>";
echo "<div class='row'>";
echo "<div class='col-md-8'>";
echo '<h4 align="center"> Display Data From database with foreach Loop </h4>';
echo "<table border='1' align='center' class='table table-hover'>";
  echo "
  <tr align='center' bgcolor='#CCCCCC'>
    <td>รหัส</td>
    <td>Uername</td>
    <td>password</td>
    <td>ชื่อ</td>
    <td>นามสกุล</td>
    <td>ที่อยู่</td>
    <td>เบอร์</td>
    <td>สถานะการใช้งาน</td>
  </tr>";
  foreach( $result as $value ) {
  echo "<tr>";
    echo "<td>" .$value["ID"] .  "</td> ";
    echo "<td>" .$value["Username"] .  "</td> ";
    echo "<td>" .$value["Password"] .  "</td> ";
    echo "<td>" .$value["Fristname"] .  "</td> ";
    echo "<td>" .$value["Lastname"] .  "</td> ";
    echo "<td>" .$value["Addess"] .  "</td> ";
    echo "<td>" .$value["Phone"] .  "</td> ";
    echo "<td>" .$value["Status"] .  "</td> ";
  echo "</tr>";
  }
echo "</table>";
//5. close connection
echo '<hr>';

?>
<?php 
mysqli_close($con);
?>