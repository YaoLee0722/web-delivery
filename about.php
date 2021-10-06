<!DOCTYPE HTML>

	<html>



	<head>

		<title>Cavallo Ice Cream</title>

		<meta charset="UTF-8"/>

		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<link rel="stylesheet" href="cavallo.css?id=123345" type="text/css" />
        <script>
        function disappear() {
            document.getElementById("msg").innerHTML = "";
        }
        function menu() {
            window.location.href='./cavallo.php';
        }
    </script>
	</head>



	<body>
	<section class="header" style="height: 20vh">
		<nav class="navbar">
			<div class="navbar-box">
				<div class="logo1"><img src="Cavallo_logo.png"/></div>
				<h3 class="heading-tertiary"></h3>
			</div>
			<ul class="navbar-list">
				<li class="navbar-item">
					<a href="cavallo.php" class="navbar-link">Home</a>
				</li>
				<li class="navbar-item">
					<a href="cavallo.php#Menu" class="navbar-link">Menu</a>
				</li>
				<li class="navbar-item">
					<a href="login.php" class="navbar-link">Login</a>
				</li>
				<li class="navbar-item">
					<a href="cavallo.php#Address" class="navbar-link">Address&My Account</a>
				</li>

        <li class="navbar-item">
					<a href="about.php" class="navbar-link">About</a>
        </li>
        <li class="navbar-item">
					<a href="logout.php" class="navbar-link">Logout</a>
				</li>
				<li class="navbar-item">
					<a href="./order.php" class="navbar-link-Order">Order</a>
				</li>
			</ul>
			<div class="toggle">
				<div class="line1">	</div>
				<div class="line2">	</div>
				<div class="line3">	</div>
				</div>
		</nav>

    </section>

    <section class= "orderList or" style="width:80%;margin-left:10%;background-color:#fff;">

        <div class="orderListContent">

            <div class="left-b">
                <p class="first-word">WE’RE OPENING AT 11:00 - 18:00</p>
                <h1>EAT ICE-CREAM, </h1>
                <h1>BE A MONSTER.</h1>
                <p class="second-word">Cavallo is an ice cream shop in Seaton  Delaval, Northumberland, serving delicious healthy products everyday.</p>
                <button class="home-btn" onclick="menu()"> ORDER NOW </button>
            </div>

            <div class="right-b"><img src="bigice.png"></div>

        </div>
    </section>
    <section class= "orderList or" style="width:80%;margin-left:10%;background-color:#fff;margin-top:50px;">
        <div class="about-info">
            <h3>orders per month</h3>
            <table>
                <tr style="background-color: grey;">
                <td>Month</td>
                <td>Order Count</td>
                </tr>
                <?php
                require "db.php";
                $sql = "select DATE_FORMAT(t.time,'%Y-%m') month,count(t.id) minute from ice_order t
        group by month
        order by  month";
                $re = $conn->query($sql);
                $r = $re->fetch_all();
                //var_dump($r);
                foreach ($r as $key => $value) {
                echo "<tr>";
                echo "<td>".$value[0]."</td>";
                echo "<td>".$value[1]."</td>";
                echo "</tr>";
                }
                ?>
            </table>

            <h3>orders per day</h3>
            <table>
                <tr style="background-color: grey;">
                <td>Day</td>
                <td>Order Count</td>
                </tr>
                <?php
                $sql2 = "select DATE_FORMAT(t.time,'%Y-%m-%d') day,count(t.id) minute from ice_order t
        group by day
        order by  day";
                $re2 = $conn->query($sql2);
                $r2 = $re2->fetch_all();
                //var_dump($r);
                foreach ($r2 as $key => $value) {
                echo "<tr>";
                echo "<td>".$value[0]."</td>";
                echo "<td>".$value[1]."</td>";
                echo "</tr>";
                }
                ?>
            </table>

            <h3>oders peer week</h3>
            <table>
                <tr style="background-color: grey;">
                <td>Week</td>
                <td>Order Count</td>
                </tr>
                <?php
                $sql3= "select concat(concat(year(t.time), '-'), week(t.time))  week,count(t.id) minute from ice_order t
        group by week
        order by  week";
                $re3 = $conn->query($sql3);
                $r3 = $re3->fetch_all();
                //var_dump($r);
                foreach ($r3 as $key => $value) {
                echo "<tr>";
                echo "<td>".$value[0]."week</td>";
                echo "<td>".$value[1]."</td>";
                echo "</tr>";
                }
                ?>
            </table>

            <h3>The most popular taste</h3>
            <table>
                <tr style="background-color: grey;">
                <td>taste</td>
                <td>Order Count</td>
                </tr>
                <?php
                $sql4= "select product, count(*) c
        from ice_order
        group by product order by c desc";
                $re4 = $conn->query($sql4);
                $r4 = $re4->fetch_all();
                //var_dump($r);
                foreach ($r4 as $key => $value) {
                echo "<tr>";
                echo "<td>".$value[0]."</td>";
                echo "<td>".$value[1]."</td>";
                echo "</tr>";
                }
                ?>
            </table>

            </div>
            <br>
            <br>
    </section>

	<footer class="footer">
		<div class="footer-Cavallo">
			<div class = "footerlogo">
			<img src="Cavallo_logo.png" />
			</div>
			<p>Avenue Cresent, Seaton Delaval, Northumberland &nbsp; NE25 0DN</p>
			<p>+44 1234567890</p>
			<div class="SocialMedia">
				<a href="../manage/login.php"><img src="admin.png"/></a>
				<a href="https://www.facebook.com/cavallo.icecream"><img src="facebook.png" /></a>
				<a href="https://www.instagram.com/cavalloicecream/"><img src="instagram.png"/></a>
				<a href="https://twitter.com/cavalloicecream"><img src="twitter.png"/></a>
			</div>
		</div>
		<ul class="footer-NewcastleUni">
			<li>
				<h2><img src="NUlogo.jpg"/>Newcastle University</h2>
				<ul class="box">
					<li><a href="https://www.ncl.ac.uk/computing/">School of Computing</a></li>
					<li>Software Engineering Group Project 2020-2021</li>
					<li>Team 7</li>
				</ul>
			</li>
			<li class="TeamMembers">
				<h2>Team Members</h2>
				<ul class="box">
					<li>Suri Zhou</li>
					<li>Yao Li</li>
					<li>Alan Li</li>
					<li>Finlay Murray</li>
					<li>Erfan Bashiri</li>
					<li>Keran Mao</li>
					<li>Dengxin Zhang</li>
					<li>Chun Leung</li>
					<li>Chakshu Goyal</li>
					<li>Haoyang Zhen</li>
				</ul>
			</li>
		</ul>
    </footer>
    <script>


    </script>
	</body>
	</html>
