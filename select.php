<!DOCTYPE HTML>
<!--
	Hyperspace by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->

<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Sidebar -->
			<section id="sidebar">
				<div class="inner">
					<nav>
						<ul>
							<li><a href="#intro">ยินดีต้อนรับ</a></li>
							<li><a href="#one">จัดการผู้ดูแลระบบ</a></li>
							<li><a href="#two">จัดการโมเดล</a></li>
							<li><a href="#three">----</a></li>
						</ul>
					</nav>
				</div>
			</section>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Intro -->
					<section id="intro" class="wrapper style1 fullscreen fade-up">
						<div class="inner">
							
							<h1>ยินดีต้อนรับ</h1>
							<p>นี่คือโปรแกรมออนไลน์ที่สามารถทำนายการเกิดโรคหลอดเลือดสมอง <br>โดยผู้ใช้สามารถป้อนปัจจัยต่างๆ จากนั้นระบบจะทำนายว่าเป็นโรคหลอดเลือดสมองหรือไม่<br />
							</p>
							<ul class="actions">
								<li><a href="#one" class="button scrolly">รายละเอียดเพิ่มเติม</a></li>
							</ul>
						</div>
					</section>

				<!-- One -->
					<section id="one" class="wrapper style2 spotlights">
						<section>
							<div class="content">
								<div class="inner">
									<h2>รายชื่อผู้ดูแลระบบ</h2>
									<form action="connect.php">
									<ul class="actions">
										<li><a href="generic.html" class="button" style="position:relative; left:600px" >เพิ่มผู้ดูแลระบบ</a></li>
									</ul>
									<?php
//1. เชื่อมต่อ database:
include('connect.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
//2. query ข้อมูลจากตาราง tb_member:
$query = "SELECT * FROM admin ORDER BY ID asc" or die("Error:" . mysqli_error());
//3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
$result = mysqli_query($conn, $query);
//4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล:
echo "<table class='responstable' border=1 width= “500” height= “400” >";
  echo "
  <tr>
    <th>ลำดับเลข</th>
    <th>ชื่อผู้ใช้</th>
    <th>รหัสผ่าน</th>
    <th>ชื่อ</th>
    <th>นามสกุล</th>
    <th>ที่อยู่</th>
    <th>เบอร์</th>
    <th>สถานะการใช้งาน</th>
    <th>ลบ</th>
	<th>แก้ไข</th>
  </tr>";
  foreach( $result as $value ) {
  echo "<tr>";
    echo "<td>" .$value["ID"] .  "</td> ";
    echo "<td>" .$value["Username"] .  "</td> ";
    echo "<td>" .$value["Password"] .  "</td> ";
    echo "<td>" .$value["Firstname"] .  "</td> ";
    echo "<td>" .$value["Lastname"] .  "</td> ";
    echo "<td>" .$value["Addess"] .  "</td> ";
    echo "<td>" .$value["Phone"] .  "</td> ";
    echo "<td>" .$value["Status"] .  "</td>";

	$editURL = "editform.php?eid=".$value['ID'];
    ?>
    <td><a href="delete.page?id=1" onclick="return confirm('ต้องการลบหรือไม่?')">
	<img src="icons/delete1.png" title="Delete" style="width:30px;height: 30px;"  ></a></td>                 
	<td><a href="<?=$editURL?>"><img src="icons/edit1.png" title="Edit" style="width:30px;height: 30px;"  ></td>
<?php 
  echo "</tr>";
  }
echo "</table>";
//5. close connection
echo '<hr>';

?>
<?php 
mysqli_close($con);
?>	
									</form>
									
								</div>
							</div>
						</section>
				<!-- Two -->
					<section id="two" class="wrapper style3 fade-up">
						<!-- <div class="inner">
							<h2>What we do</h2>
							<p>Phasellus convallis elit id ullamcorper pulvinar. Duis aliquam turpis mauris, eu ultricies erat malesuada quis. Aliquam dapibus, lacus eget hendrerit bibendum, urna est aliquam sem, sit amet imperdiet est velit quis lorem.</p>
							<div class="features">
								<section>
									<span class="icon solid major fa-code"></span>
									<h3>Lorem ipsum amet</h3>
									<p>Phasellus convallis elit id ullam corper amet et pulvinar. Duis aliquam turpis mauris, sed ultricies erat dapibus.</p>
								</section>
								<section>
									<span class="icon solid major fa-lock"></span>
									<h3>Aliquam sed nullam</h3>
									<p>Phasellus convallis elit id ullam corper amet et pulvinar. Duis aliquam turpis mauris, sed ultricies erat dapibus.</p>
								</section>
								<section>
									<span class="icon solid major fa-cog"></span>
									<h3>Sed erat ullam corper</h3>
									<p>Phasellus convallis elit id ullam corper amet et pulvinar. Duis aliquam turpis mauris, sed ultricies erat dapibus.</p>
								</section>
								<section>
									<span class="icon solid major fa-desktop"></span>
									<h3>Veroeros quis lorem</h3>
									<p>Phasellus convallis elit id ullam corper amet et pulvinar. Duis aliquam turpis mauris, sed ultricies erat dapibus.</p>
								</section>
								<section>
									<span class="icon solid major fa-link"></span>
									<h3>Urna quis bibendum</h3>
									<p>Phasellus convallis elit id ullam corper amet et pulvinar. Duis aliquam turpis mauris, sed ultricies erat dapibus.</p>
								</section>
								<section>
									<span class="icon major fa-gem"></span>
									<h3>Aliquam urna dapibus</h3>
									<p>Phasellus convallis elit id ullam corper amet et pulvinar. Duis aliquam turpis mauris, sed ultricies erat dapibus.</p>
								</section>
							</div>
							<ul class="actions">
								<li><a href="generic.html" class="button">Learn more</a></li>
							</ul>
						</div> -->
					</section>

				<!-- Three -->
					<section id="three" class="wrapper style1 fade-up">
						<!-- <div class="inner">
							<h2>Get in touch</h2>
							<p>Phasellus convallis elit id ullamcorper pulvinar. Duis aliquam turpis mauris, eu ultricies erat malesuada quis. Aliquam dapibus, lacus eget hendrerit bibendum, urna est aliquam sem, sit amet imperdiet est velit quis lorem.</p>
							<div class="split style1">
								<section>
									<form method="post" action="#">
										<div class="fields">
											<div class="field half">
												<label for="name">Name</label>
												<input type="text" name="name" id="name" />
											</div>
											<div class="field half">
												<label for="email">Email</label>
												<input type="text" name="email" id="email" />
											</div>
											<div class="field">
												<label for="message">Message</label>
												<textarea name="message" id="message" rows="5"></textarea>
											</div>
										</div>
										<ul class="actions">
											<li><a href="" class="button submit">Send Message</a></li>
										</ul>
									</form>
								</section>
								<section>
									<ul class="contact">
										<li>
											<h3>Address</h3>
											<span>12345 Somewhere Road #654<br />
											Nashville, TN 00000-0000<br />
											USA</span>
										</li>
										<li>
											<h3>Email</h3>
											<a href="#">user@untitled.tld</a>
										</li>
										<li>
											<h3>Phone</h3>
											<span>(000) 000-0000</span>
										</li>
										<li>
											<h3>Social</h3>
											<ul class="icons">
												<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
												<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
												<li><a href="#" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
												<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
												<li><a href="#" class="icon brands fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
											</ul>
										</li>
									</ul>
								</section>
							</div>
						</div> -->
					</section>

			</div>

		<!-- Footer -->
			<footer id="footer" class="wrapper style1-alt">
				<!-- <div class="inner">
					<ul class="menu">
						<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</div> -->
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