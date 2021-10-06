<?php
session_start();
?>
<!DOCTYPE HTML>
	<html>
	<head>
		<title>Cavallo Ice Cream</title>
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="stylesheet" href="cavallo.css?id=1s223" type="text/css" />
		<script>
		function disappear() {
            document.getElementById("msg").innerHTML = "";
        }
			</script>
	</head>
	<body>
	<section class="header">
		<nav class="navbar">
			<div class="navbar-box">
				<div class="logo1"><img src="Cavallo_logo.png"/></div>
				<h3 class="heading-tertiary"></h3>
			</div>
			<ul class="navbar-list">
				<li class="navbar-item">
					<a href="#" class="navbar-link">Home</a>
				</li>
				<li class="navbar-item">
					<a href="#Menu" class="navbar-link">Menu</a>
				</li>
				<li class="navbar-item">
					<a href="./login.php" class="navbar-link">Login</a>
				</li>
				<li class="navbar-item">
					<a href="#Address" class="navbar-link">Address&My Account</a>
				</li>
				<li class="navbar-item">
					<a href="about.php" class="navbar-link">About</a>
				</li>
				<li class="navbar-item">
					<a href="logout.php" class="navbar-link">Logout</a>
				</li>
				<li class="navbar-item">
					<a href="order.php" class="navbar-link-Order">Order</a>
				</li>
			</ul>
			<div class="toggle">
				<div class="line1">	</div>
				<div class="line2">	</div>
				<div class="line3">	</div>
				</div>
		</nav>
		<div class="header-container">
			<div class="video">
				<video loop muted autoplay id="video">
					<source src="welcomepage.mp4" type="video/mp4">
						This file type can not be supported
				</video>
			</div>
			<div class="header-box">
				<h1 class="heading-primary">
					Traditional <br><span id="bold">Italian </span> <br>Ice Cream
				</h1>
				<p class="lead">Too bad you can't lick the screen.</p>
				<a href="./order.php" class="order-now">Click for Order</a>
				</div>

			</div>
	</section>
	<?php if(isset($_GET['msg'])) {?>
        <div  id="msg"><a href="javascript:void(0)" onclick="disappear()" style="color: white;font-size:x-large;margin-left:45%;">Confirm Successful! </a></div>
    <?php }?>
	<section id="Menu" class="menu">   <!-- Menu. Needs changing guys? -->
		<div class="container">
			<div class="menu-h">Menu</div>
			<div class="menu-g">
				<div class="menu-hold"> <!--this Div is for each menu item-->
					<div class="menu-container">
						<div class="img-RumAndRaisin">
							&nbsp; <!--  Info:non-breaking space -->
						</div>
						<h1 class="menuRumAndRaisin">Rum and Raisin</h1>
						<p class="menu-p">Rum dairy ice cream with West Indies Rum (2%) and rum soaked raisins (11%).<br>This rich flavour is an indulgent combination of creamy dairy rum ice cream and punchy rum soaked raisins. It is the perfect addition to any dessert to share with family and friends.</p>
						<ul class="menu-ul">
							<li><a class="menu-btn" href="./addBasket.php?product=Rum and Raisin&size=s">S</a></li>
							<li><a class="menu-btn" href="./addBasket.php?product=Rum and Raisin&size=m">M</a></li>
							<li><a class="menu-btn" href="./addBasket.php?product=Rum and Raisin&size=l">L</a></li>
							<li><a class="menu-btn" href="./addBasket.php?product=Rum and Raisin&size=xl">XL</a></li>
							<li><a class="menu-btn" href="./addBasket.php?product=Rum and Raisin&size=xxl">XXL</a></li>
						</ul>
					</div>
				</div>
					<div class="menu-hold">
					<div class="menu-container">
						<div class="img-Chocolate">
							&nbsp; <!--  Info:non-breaking space -->
						</div>
						<h1 class="menuChocolate">Chocolate</h1>
						<p class="menu-p">chocolate ice cream (2% dark chocolate, 70% cocoa solids, from Ecuador) with dark chocolate pieces (70% cocoa solids, from Ecuador) (2.5%).<br>This classic flavour is an indulgent combination of rich chocolate ice cream and tasty chocolate pieces. It is the perfect addition to any dessert to share with family and friends. Our divine chocolate ice cream is Rainforest Alliance Certified.</p>
						<ul class="menu-ul">
							<li><a class="menu-btn" href="./addBasket.php?product=Chocolate&size=s">S</a></li>
							<li><a class="menu-btn" href="./addBasket.php?product=Chocolate&size=m">M</a></li>
							<li><a class="menu-btn" href="./addBasket.php?product=Chocolate&size=l">L</a></li>
							<li><a class="menu-btn" href="./addBasket.php?product=Chocolate&size=xl">XL</a></li>
							<li><a class="menu-btn" href="./addBasket.php?product=Chocolate&size=xxl">XXL</a></li>
						</ul>
					</div>
				</div>
				<div class="menu-hold">
					<div class="menu-container">
						<div class="img-HoneyComb">
							&nbsp; <!--  Info:non-breaking space -->
						</div>
						<h1 class="menuHoneyComb">Honey Comb</h1>
						<p class="menu-p">Whole Milk (56%), Whipping Cream (20%), Sugar, Honeycomb (7%) (Sugar, Glucose Syrup, Sodium Bicarbonate), Milk Solids, Glycerine, Emulsifier (Mono- and Diglycerides of Fatty Acids), Pasteurised Free Range Eggs, Stabilisers.<br>Smooth dairy ice cream made with our organic milk and flavoured with honey, all mixed with lots of crunchy honeycomb pieces.</p>
						<ul class="menu-ul">
							<li><a class="menu-btn" href="./addBasket.php?product=Honey Comb&size=s">S</a></li>
							<li><a class="menu-btn" href="./addBasket.php?product=Honey Comb&size=m">M</a></li>
							<li><a class="menu-btn" href="./addBasket.php?product=Honey Comb&size=l">L</a></li>
							<li><a class="menu-btn" href="./addBasket.php?product=Honey Comb&size=xl">XL</a></li>
							<li><a class="menu-btn" href="./addBasket.php?product=Honey Comb&size=xxl">XXL</a></li>
						</ul>
					</div>
				</div>
				<div class="menu-hold">
					<div class="menu-container">
						<div class="img-PlainVanilla">
							&nbsp; <!--  Info:non-breaking space -->
						</div>
						<h1 class="menuPlainVanilla">Plain Vanilla</h1>
						<p class="menu-p"> Vanilla ice cream with macadamia nut brittle (10%). Vanilla ice cream with caramel swirl (11%) and caramelised pecan nuts (7%). Vanilla ice cream with cookies (6%).<br>Spoil yourself with a moment of creamy, vanilla delight. Irresistibly smooth Vanilla ice cream made with real Madagascan vanilla for a delicious, authentic taste.<br><b>Also available as plant based</b></p>
						<ul class="menu-ul">
							<li><a class="menu-btn" href="./addBasket.php?product=Plain Vanilla&size=s">S</a></li>
							<li><a class="menu-btn" href="./addBasket.php?product=Plain Vanilla&size=m">M</a></li>
							<li><a class="menu-btn" href="./addBasket.php?product=Plain Vanilla&size=l">L</a></li>
							<li><a class="menu-btn" href="./addBasket.php?product=Plain Vanilla&size=xl">XL</a></li>
							<li><a class="menu-btn" href="./addBasket.php?product=Plain Vanilla&size=xxl">XXL</a></li>
						</ul>
					</div>
				</div>
				<div class="menu-hold">
					<div class="menu-container">
						<div class="img-SaltedCaramel">
							&nbsp; <!--  Info:non-breaking space -->
						</div>
						<h1 class="menuSaltedCaramel">Salted Caramel</h1>
						<p class="menu-p">Water, Soluble corn fibre, Sugar, Vegetable fats and oils, ALMOND (4.2%), Fructose-glucose syrup, Glucose syrup, Dextrose, Emulsifier, Natural flavouring, Sea salt, Stabilisers, Modified starch, Caramelized sugar.<br> Indulge yourself in our delicious salted caramel ice cream, made with rich pieces of caramel and smooth sea salted caramel ice cream.<br><b>This product has £0.75 extra fee</b></p>
						<ul class="menu-ul">
							<li><a class="menu-btn" href="./addBasket.php?product=Salted Caramel&size=s">S</a></li>
							<li><a class="menu-btn" href="./addBasket.php?product=Salted Caramel&size=m">M</a></li>
							<li><a class="menu-btn" href="./addBasket.php?product=Salted Caramel&size=l">L</a></li>
							<li><a class="menu-btn" href="./addBasket.php?product=Salted Caramel&size=xl">XL</a></li>
							<li><a class="menu-btn" href="./addBasket.php?product=Salted Caramel&size=xxl">XXL</a></li>
						</ul>
					</div>
				</div>
				<div class="menu-hold">
					<div class="menu-container">
						<div class="img-Strawberry">
							&nbsp; <!--  Info:non-breaking space -->
						</div>
						<h1 class="menuStrawberry">Strawberry</h1>
						<p class="menu-p">Milk, Strawberry Sauce (14%) , Glucose Syrup, Sugar, Coconut Oil, Lactose, Strawberry Puree, Water, Strawberry Pieces (2%), Fructose, Cows' Milk Proteins, Stabilisers.<br>Our Strawberry ice cream is a real taste from your childhood. Everybody remembers those childhood parties where pink ice cream was a special treat.</p>
						<ul class="menu-ul">
							<li><a class="menu-btn" href="./addBasket.php?product=Strawberry&size=s">S</a></li>
							<li><a class="menu-btn" href="./addBasket.php?product=Strawberry&size=m">M</a></li>
							<li><a class="menu-btn" href="./addBasket.php?product=Strawberry&size=l">L</a></li>
							<li><a class="menu-btn" href="./addBasket.php?product=Strawberry&size=xl">XL</a></li>
							<li><a class="menu-btn" href="./addBasket.php?product=Strawberry&size=xxl">XXL</a></li>
						</ul>
					</div>
				</div>
				<div class="menu-hold">
					<div class="menu-container">
						<div class="img-Mint">
							&nbsp; <!--  Info:non-breaking space -->
						</div>
						<h1 class="menuMint">Mint</h1>
						<p class="menu-p">Cream (MILK) (30%), water, condensed skimmed MILK, sugar, coconut fat, free range EGG yolk, fat-reduced cocoa powder, natural peppermint flavouring, stabilisers, MILK fat, emulsifier, vanilla extract.<br>Delicious when served on its own, but why not try a scoop of our Mint Chocolate ice cream on the side of warm cookies?</p>
						<ul class="menu-ul">
							<li><a class="menu-btn" href="./addBasket.php?product=Mint&size=s">S</a></li>
							<li><a class="menu-btn" href="./addBasket.php?product=Mint&size=m">M</a></li>
							<li><a class="menu-btn" href="./addBasket.php?product=Mint&size=l">L</a></li>
							<li><a class="menu-btn" href="./addBasket.php?product=Mint&size=xl">XL</a></li>
							<li><a class="menu-btn" href="./addBasket.php?product=Mint&size=xxl">XXL</a></li>
						</ul>
					</div>
				</div>
				<div class="menu-hold">
					<div class="menu-container">
						<div class="img-Cherry">
							&nbsp; <!--  Info:non-breaking space -->
						</div>
						<h1 class="menuCherry">Cherry</h1>
						<p class="menu-p">Reconstituted Skimmed Milk Concentrate, Cherry Sauce (14%), Glucose Syrup, Sugar, Cherry (6%), Sugar, Colour, Coconut Oil, Partially Reconstituted Whey Powder, Palm Stearin, Palm Oil, Emulsifier, Stabilisers, Flavouring, Colour.<br> This cherry flavoured ice cream is made in our luxury double cream ice cream. We’ve then swirled in a cherry ripple and added black cherry chunks to every tub!</p>
						<ul class="menu-ul">
							<li><a class="menu-btn" href="./addBasket.php?product=Cherry&size=s">S</a></li>
							<li><a class="menu-btn" href="./addBasket.php?product=Cherry&size=m">M</a></li>
							<li><a class="menu-btn" href="./addBasket.php?product=Cherry&size=l">L</a></li>
							<li><a class="menu-btn" href="./addBasket.php?product=Cherry&size=xl">XL</a></li>
							<li><a class="menu-btn" href="./addBasket.php?product=Cherry&size=xxl">XXL</a></li>
						</ul>

					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="Address" class= "MyAccount"><!--Change "contact" button's title to My account in the nav bar -->
		<div class="MyAccount-content">
			<div class="left">
				<div class="MyAccount-info">
					<h1 class="mapheading">Our Address</h1>
				</div>
				<iframe class="iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2284.2498879135037!2d-1.5272367841996013!3d55.073875080377256!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487e727a740811c7%3A0xa99b0eca1ea7fcb4!2sAvenue%20Cres%2C%20Seaton%20Delaval%2C%20Whitley%20Bay%20NE25%200DN!5e0!3m2!1sen!2suk!4v1613128184679!5m2!1sen!2suk" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                <p id="demo">click this botton, get your location：</p>
                <button onclick="getLocation()">click</button>
                <script>
                    var x=document.getElementById("demo");
                    var PI = Math.PI;
                    var EARTH_RADIUS = 6378137.0;

                    function getRad(d){
                        return d*PI/180.0;
                    }

                    function getLocation()
                    {
                        if (navigator.geolocation)
                        {
                            navigator.geolocation.getCurrentPosition(showPosition,showError);
                        }
                        else{x.innerHTML="Geolocation is not supported by this browser.";}
                    }

                    function showPosition(position)
                    {
                        var radLat1 =  -1.52528 * Math.PI / 180.0;
                        var radLat2 = position.coords.longitude * Math.PI / 180.0;
                        var a = radLat1 - radLat2;
                        var b = 55.07334 * Math.PI / 180.0 - position.coords.latitude * Math.PI / 180.0;
                        var s = 2 * Math.asin(Math.sqrt(Math.pow(Math.sin(a / 2), 2) + Math.cos(radLat1) * Math.cos(radLat2) * Math.pow(Math.sin(b / 2), 2)));
                        s = s * 6378.137;
                        s = Math.round(s) * 0.62;

                        if(s < 5){
                            x.innerHTML = "The distance between you and shop is " + s + " miles, in the delivery area.";
                        }else{
                            x.innerHTML =  "Sorry, the distance between you and shop is " + s + " miles, out the delivery area, we cannot delivery food to you.";
                        }
                    }
                    function showError(error)
                    {
                        switch(error.code)
                        {
                            case error.PERMISSION_DENIED:
                                x.innerHTML="User denied the request for Geolocation."
                                break;
                            case error.POSITION_UNAVAILABLE:
                                x.innerHTML="Location information is unavailable."
                                break;
                            case error.TIMEOUT:
                                x.innerHTML="The request to get user location timed out."
                                break;
                            case error.UNKNOWN_ERROR:
                                x.innerHTML="An unknown error occurred."
                                break;
                        }
                    }
                </script>
			</div>
			<div class="right">
				<div id="MyAccount" class="MyAccount-form">
					<ul class="user">
						<li class="user-img">
							<img src="user-img.png" >
						</li>
						<li class="user-info">
							<span style="font-size: x-large">
							Name: <?php echo isset($_SESSION['username'])?$_SESSION['username']:"";?><br><br>
							Address: <?php echo isset($_SESSION['address'])?$_SESSION['address']:"";?><br><br>
							Phone: <?php echo isset($_SESSION['phone'])?$_SESSION['phone']:"";?><br>
						</span>
						</li>
					</ul>


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
	</body>
	</html>
