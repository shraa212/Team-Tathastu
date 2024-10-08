<!DOCTYPE html>
<html>
<head>
	<title>Team Tathastu: Header</title>
	<style type="text/css">
		.header{
			background-color: #FDF502;
			position: fixed;
			width: 100%;
			height: 90px;
			display: flex;
			flex-direction: row;
			box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
			z-index: 300;
		}
		.logo{
			flex: 0.4;
		}
		.logoimg{
			margin: 0px 0px 0px 10px;
			height: 90px;
			width: 130px;
			mix-blend-mode: multiply;
		}
		ul{
			flex: 3.7;
			margin: 35px 0px 0px 0px;
			z-index: 100;
		}
		li{
			display: inline;
		}
		a{
			font-family: Verdana, sans-serif;
			font-size: 20px;
			color: #000000;
			text-decoration: none;
		}
		li a:hover{
			padding: 42px 9px 32px 9px;
  			color: #01008C;
		}
		li.dropdown, .sidebar-dd{
			display: inline-block;
		}
		.dropdown-content{
 			display: none;
  			position: absolute;
  			margin: 31px 0px 0px 0px;
  			color: #01008C;
  			width: 223px;
  			background-color: #FDF502;
  			opacity: 0.8;
  			box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.7);
		}
		.dropdown-content a{
  			color: #000000;
  			padding: 10px 10px 10px 10px;
  			text-decoration: none;
  			display: block;
  			text-align: left;
		}
		.dropdown-content a:hover{
			background-color: #f1f1f1;
			padding: 10px 10px 10px 10px;
		}
		.dd-content{
 			display: none;
  			position: absolute;
  			background-color: #000000;
  			color: #01008C;
  			width: 223px;
  			box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.7);
		}
		.dd-content a{
  			color: #000000;
  			padding: 10px 10px 10px 10px;
  			text-decoration: none;
  			display: block;
  			text-align: left;
		}
		.dd-content a:hover{
			background-color: #f1f1f1;
			padding: 10px 10px 10px 10px;
		}
		.dropdown:hover .dropdown-content, .sidebar-dd:hover .dd-content{
  			display: block;
		}
		.sidebar{
			display: none;
			height:100%;
			width:350px;
			background-color: rgba(0,0,0,1);
			position:fixed !important;
			right: 0px;
			box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.7);
			z-index: 100;
		}
		.sidebar-content{
			margin: 0px 0px 0px 50px;
			color: #ffffff;
			font-size: 35px;
			opacity: 0.7;
		}
		.sidebar-content a:hover{
			color: #FDC30B;
		}
		.sidebar button{
			height: 30px;
			width: 350px;
			border: none;
			background-color: rgba(0,0,0,0);
			margin: 23px 0px 0px 0px;
			text-align: center;
			color: #ffffff;
			font-size: 35px;
			opacity: 0.7;
		}
		img{
			height: 23px;
			width: 30px;
			border: none;
			background-color: #FDF502;
			margin: 30px 35px 0px 0px;
		}
		.sidebar a{
			color: #ffffff;
		}
	</style>
</head>
<body>
	<header>
		<div class="header">
			<div class="logo">
				<form method="POST" action="index.php">
					<input type="image" src="photos\logo.jpeg" class="logoimg">
				</form>
			</div>
			<ul>
				<li class="dropdown">
					<a href="">Careers</a>
					<div class="dropdown-content">
						<a href="lifeagent.php">Life Insurance</a>
						<a href="healthagent.php">Star Insurance</a>
					</div>
				</li>
				&nbsp;&nbsp;&nbsp;
				<li><a href="cust.php">Customer services</a></li>
				&nbsp;&nbsp;&nbsp;
				<li class="dropdown">
					<a href="">Achievements corner</a>
					<div class="dropdown-content">
						<a href="agentstories.php">Agent stories</a>
						<a href="feedback.php">Client stories</a>
					</div>
				</li>
			</ul>
			<div class="sidebar" id="mySidebar">
				<button onclick="Close()">&times;</button>
  				<div class="sidebar-content">
  					<br><br>
  					<a href="index.php">Home</a>
  					<br><br>
  					<div class="sidebar-dd">
  						<a href="">Careers</a>
  						<div class="dd-content">
							<a href="lifeagent.php">Life Insurance</a>
							<a href="healthagent.php">Star Insurance</a>
						</div>
  					</div>
  					<br><br>
  					<a href="cust.php">Customer services</a>
  					<br><br>
  					<div class="sidebar-dd">
  						<a href="">Achievements corner</a>
  						<div class="dd-content">
							<a href="agentstories.php">Agent stories</a>
							<a href="feedback.php">Client stories</a>
						</div>
  					</div>
  					<br><br>
  					<div class="sidebar-dd">
  						<a href="">Products</a>
  						<div class="dd-content">
							<a href="licplans.php">Life Insurance Plans</a>
							<a href="starplans.php">Star Health Plans</a>
						</div>
  					</div>
  					<br><br>
  					<a href="aboutus.php">About us</a>
  					<br><br>
  					<a href="faq.php">Help</a>
  				</div>
			</div>
			<div>
				<div>
  					<img src="photos\hamburger_dropdown.png" onclick="Open()">
				</div>
			</div>			
		</div>
	</header>
	<script type="text/javascript">
		function Open()
		{
  			document.getElementById("mySidebar").style.display = "block";
		}
		function Close()
		{
  			document.getElementById("mySidebar").style.display = "none";
		}
	</script>
</body>
</html>