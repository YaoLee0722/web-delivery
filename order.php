<?php session_start(); ?>
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
					<a href="#" class="navbar-link-Order">Order</a>
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
                <button class="tab-button" onclick="checkAll()">Check out Basket</button>
								&nbsp;&nbsp;<span style='font-size:large;'> Total Price: </span>
								<?php
								include "db.php";
								if (isset($_SESSION['username'])) {
									$sql0 = "select sum(price*count)as pric from ice_order where customer_name='".$_SESSION['username']."'";
									$retrieve_feed_result0 = $conn->query($sql0);
									$result0 = $retrieve_feed_result0->fetch_all();
									echo "<span style='font-size:large;color:red;'>￡ ".$result0[0][0]."</span>";
								}

								?>

								<br>
								<form class="form" id="mustin">
									<select style="display:inline;width:250px;" class="input" id="arrive">
										<option>1 hour</option>
										<option>2 hours</option>
										<option>3 hours or more</option>
									</select>
										<input style="display:inline;width:250px;" type="text" class="input" id="name" placeholder="Your Name" required name="name">
										<input style="display:inline;width:250px;" type="tel" class="input" id="address" name="address" placeholder="Your Address"
										required>
										<input style="display:inline;width:250px;" type="tel" class="input" id="postcode" name="postcode" placeholder="Your Postcode"
										required>
										<h2 style="display: inline"> <input style="font-size:x-large;transform: scale(1.6,1.6);" id="collection" name="collection" type="checkbox"/> Collection</h2>
										<h2 style="display: inline"> <input style="font-size:x-large;transform: scale(1.6,1.6);" id="dairy_free" name="dairy_free" type="checkbox"/> Dairy Free</h2>
								</form>
                <hr>
								<?php
					if (isset($_SESSION['username'])) {
							$sql = "select id, dispatch,price,time,ispay,product,count from ice_order where customer_name='".$_SESSION['username']."' order by time desc";
							$retrieve_feed_result = $conn->query($sql);
							$result = $retrieve_feed_result->fetch_all();
							foreach ($result as $key=> $value) {
								echo '<br><div class="product">
										<img class="product-img" src="'.str_replace("and","" , str_replace(" ", "", $value[5])).'.jpg">
										<div class="description">
											<div class="product-title">'.$value[5].'</div>
											<div class="product-price">￡'.$value[2].' <img src="yes.png" style="width:20px;">&nbsp;<span style="color: rgb(51, 194, 247)">prime</span></div>
											<div class="product-price-info">In Stock</div>
																	<div class="tab-link"><a href="#">Save 5% now with Subscribe & Save</a></div>
										</div>
										<div class="option-area">
											<button class="option-btn option-num" onclick="des('.$value[0].')">&nbsp;-&nbsp;</button>
											<input class="option-input" type="text" readonly value="'.$value[6].'" id="product-'.$value[0].'-count">
											<button class="option-btn option-num" onclick="asc('.$value[0].')">&nbsp;+&nbsp;</button>
											<button class="option-btn" style="width:80px" onclick="del('.$value[0].')">Delete</button>
											<button class="option-btn" style="width:130px" onclick="save('.$value[0].')">Save for later</button>
											';
											if ($value[4] == 1 || $value[4] == true || $value[4]== '1') {
												echo "<a href='./confirm.php?id=".$value[0]."&price=".$value[2]."'
													class='option-btn c-btn' style='pointer-events:none;'>Confirmed</a>";
											} else {
												echo "<a href='#' class='option-btn c-btn' onclick='confirm(".$value[0].", ".$value[2].")'>Confirm</a>";
											}
											echo '<br>
											<a href="#" style="text-decoration: none;font-size:large;">See more like this</a>
											<br>
										</div>
										<br><br>
										<hr>
									</div>';
							}
						}
	              ?>
								<br>

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
		// window.onload=function(){
		//
		// }
		function checkAll() {
			let arrive = document.getElementById("arrive").value;
			let name = document.getElementById("name").value;
			let address = document.getElementById("address").value;
			let postcode = document.getElementById("postcode").value;
			let collection = document.getElementById("collection").checked;
			let dairy_free = document.getElementById("dairy_free").checked;
			if (arrive=='' || name==''||address==''||postcode=='') {
				window.location.href = './order.php';
			}else {
				window.location.href = './confirmAll.php?username='+name+'&arrive_time='+arrive+'&address='+address+'&postcode='+postcode+'&collection='+collection+'&dairy_free='+dairy_free;
			}
		}

		function confirm(id, price) {
			let arrive = document.getElementById("arrive").value;
			let name = document.getElementById("name").value;
			let address = document.getElementById("address").value;
			let postcode = document.getElementById("postcode").value;
			let collection = document.getElementById("collection").checked;
			let dairy_free = document.getElementById("dairy_free").checked;
			if (arrive=='' || name==''||address==''||postcode=='') {
				window.location.href = './order.php';
			} else {
				let url = "./confirm.php?id="+id+"&price="+price+'&arrive_time='+arrive+'&address='+address+'&postcode='+postcode+'&username='+name+'&collection='+collection+'&dairy_free='+dairy_free;;
				window.location.href = url;
			}
		}

        function des(num) {
            var n = "product-" + num + "-count";
            console.log(n);
            if (parseInt(document.getElementById(n).value) > 1) {
                document.getElementById(n).value=parseInt(document.getElementById(n).value) - 1;
            }
        }

        function asc(num) {
            var n = "product-" + num + "-count";
            console.log(n);
            if (parseInt(document.getElementById(n).value) < 99) {
                document.getElementById(n).value=parseInt(document.getElementById(n).value) + 1;
            }
        }

				function save(id){
					var n = "product-" + id + "-count";
					let num = document.getElementById(n).value;
					var httpRequest = new XMLHttpRequest();
					let data = {"num": num, "test": "test"};
					let url =  './updateCount.php?id='+id+'&c='+num;
					httpRequest.open('GET',url , true);
					httpRequest.setRequestHeader("Content-type","application/x-www-form-urlencoded");
					httpRequest.send(JSON.stringify(data));

					httpRequest.onreadystatechange = function () {
						if (httpRequest.readyState == 4 && httpRequest.status == 200) {
							var json = httpRequest.responseText;
							location.reload();
						}
					};
				}

				function del(id) {
					var httpRequest = new XMLHttpRequest();
					let url =  './del.php?id='+id;
					let data = {};
					httpRequest.open('GET',url , true);
					httpRequest.setRequestHeader("Content-type","application/x-www-form-urlencoded");
					httpRequest.send(JSON.stringify(data));
					httpRequest.onreadystatechange = function () {
						if (httpRequest.readyState == 4 && httpRequest.status == 200) {
							var json = httpRequest.responseText;
							location.reload();
						}
					};
				}

    </script>
	</body>
	</html>
