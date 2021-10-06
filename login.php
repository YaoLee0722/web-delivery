
<!DOCTYPE HTML>

	<html>



	<head>

		<title>Cavallo Ice Cream</title>

		<meta charset="UTF-8"/>

		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<link rel="stylesheet" href="cavallo.css?id=1233415" type="text/css" />

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
					<a href="./login.php" class="navbar-link">Login</a>
				</li>
				<li class="navbar-item">
					<a href="./cavallo.php#Address" class="navbar-link">Address&My Account</a>
				</li>
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

    <section class= "orderList">

        <div class="orderListContent">
            <div class="a-tab">
              <div id="MyAccount" class="MyAccount-form">
                <form class="form" action="./info.php" method="POST">
                  <h1 class="MyAccount-heading">Sign In</h1>
                  <div class="form-group"> <!--each blank bar in the form -->
                    <input type="text" class="input" id="name" placeholder="Please enter your FullName" required name="username">
                    <label for="name">name</label>
                  </div>

                  <div class="form-group">
                    <input type="password" class="input" id="Password" name="password" placeholder="Please enter your Password"
                     required>
                    <label for="Password">Password</label>
                  </div>

                  <button class="ma-b" id="a-btn" type="submit">Login</button>
                  <a href="#" class="ma-b">Cancel</a>
									<br>
									<h2>do not have an account?<a href='./register.php'>register</a></h2>
                </form>


              </div>

            </div>
        </div>
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
