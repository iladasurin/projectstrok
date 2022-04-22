<!DOCTYPE HTML>
<!--
	Hyperspace by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Generic - Hyperspace by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Header -->
			<header id="header">
				<a href="select.php" class="title"><img src="images/pngwing.com.png" title="Edit" style="width:30px;height: 30px;"  ></a>
				<nav>
					<ul>
						<li><a href="select.php">หน้าแรก</a></li>
						<li><a href="generic.html" class="active">แก้ไขผู้ดูแล</a></li>
						<li><a href="elements.html">---</a></li>
					</ul>
				</nav>
			</header>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<section id="main" class="wrapper">
						<div class="inner">
							<h1 class="major">แก้ไขผู้ดูแลระบบ</h1>
							<body class="body">
								<table width="1024" border="0" align="center" cellpadding="0" cellspacing="0">
								  <tr>
									  <tr>
										<td width="190" align="center"><br />
										<button formaction= "select.php" class="button button1" >ย้อนกลับ</button><br /></td>
										<td width="538"></td>
										<td width="165">&nbsp;</td>
									  </tr>
									  <tr>
										<td>&nbsp;</td>
										<td>
											<div>
                                    <?php 
                                        $id = $_GET["eid"];
                                        include('connect.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
                                        //2. query ข้อมูลจากตาราง tb_member:
                                        $query = "SELECT * FROM admin WHERE ID = $id" or die("Error:" . mysqli_error());
                                        //3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
                                        $result = mysqli_query($conn, $query);
                                        //4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล:
                                        // echo "<table class='responstable' border=1 width= “500” height= “400” >";
                                        //   echo "
                                        //   <tr>
                                        //     <th>ลำดับเลข</th>
                                        //     <th>ชื่อผู้ใช้</th>
                                        //     <th>รหัสผ่าน</th>
                                        //     <th>ชื่อ</th>
                                        //     <th>นามสกุล</th>
                                        //     <th>ที่อยู่</th>
                                        //     <th>เบอร์</th>
                                        //     <th>สถานะการใช้งาน</th>
                                        //     <th>ลบ</th>
                                        //     <th>แก้ไข</th>
                                        //   </tr>";
                                           foreach( $result as $value ) {
                                        //   echo "<tr>";
                                        //     echo "<td>" .$value["ID"] .  "</td> ";
                                        //     echo "<td>" .$value["Password"] .  "</td> ";
                                        //     echo "<td>" .$value["Firstname"] .  "</td> ";
                                        //     echo "<td>" .$value["Lastname"] .  "</td> ";
                                        //     echo "<td>" .$value["Addess"] .  "</td> ";
                                        //     echo "<td>" .$value["Phone"] .  "</td> ";
                                        //     echo "<td>" .$value["Status"] .  "</td>";
                                        
                                    ?>
								  <form action="editadmin.php" method="POST">
                                    <label for="id">รหัส</label>
									<input type="text" id="id" name="id" value ="<?php echo $value["ID"]; ?>">

									<label for="Uname">ชื่อผู้ใช้</label>
									<input type="text" id="Uname" name="Username" value ="<?php echo $value["Username"]; ?>">
								
									<label for="Pass">รหัสผ่าน</label>
									<input type="text" id="Pass" name="password" value = "<?php echo $value["Password"]; ?>">
									
									<label for="fname">ชื่อ</label>
									<input type="text" id="fname" name="firstname" value = "<?php echo $value["Firstname"]; ?>">
								
									<label for="lname">นามสกุล</label>
									<input type="text" id="lname" name="lastname" value = "<?php echo $value["Lastname"]; ?>">
									
									<label for="add">ที่อยู่</label>
									<input type="text" id="add" name="address" value = "<?php echo $value["Addess"];?>">
								
									<label for="phone">เบอร์ติดต่อ</label>
									<input type="text" id="phone" name="phone" value = "<?php echo $value["Phone"]; ?>">
								
									<label for="status">สถานะการใช้งาน</label>
									<select id="status" name="status">
									  <option <?php if($value['Status']== กำลังใช้งาน ){echo("selected");}?> >กำลังใช้งาน</option>
									  <option <?php if($value['Status']== ไม่ใช้งาน){echo("selected");}?> >ไม่ใช้งาน</option>
									</select>
								  <br>
									<input type="submit" value="ยืนยัน">
                                    <?php } ?>
								  </form>
								</div>
										</td>
										<td>&nbsp;</td>
									  </tr>
									  <tr>
										<td height="22">&nbsp;</td>
										<td>&nbsp;</td>
										<td>&nbsp;</td>
									  </tr>
									</table></td>
								  </tr>
								  <tr>
								  </tr>
								</table>
                                <?php 
                                    mysqli_close($conn);
                                ?>
								</body>
						</div>
					</section>

			</div>

		<!-- Footer -->
			<footer id="footer" class="wrapper alt">
				<div class="inner">
					<ul class="menu">
						<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>