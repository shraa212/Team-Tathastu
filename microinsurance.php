<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Team Tathastu: Micro Insurance Plans</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		body{
			margin: 0px 0px 0px 0px;
			background-color: aliceblue;
		}
    	#h1{
        	font-size: 37px;
            color: red;
            font-family: times of roman;
            font-weight: bold;
            font-style: italic;
            margin: 0px 0px 0px 0px;
        }
        #h2{
        	font-size: 33px;
            color: red;
            font-family: times of roman;
            font-weight: bold;
            margin: 0px 0px 0px 0px;
        }
        .plan-container{
        	height: 670px;
        	width: 1150px;
        	padding: 10px 0px 0px 0px;
        	margin: 15px 0px 30px 0px;
        	position: relative;
        }
        .plan-container img{
        	margin-top: 0px;
        	height: 97px;
        	width: 97px;
        }
        .plan-list h2{
        	color: blue;
        	font-family: calibri;
        	font-size: 27px;
        }
        .plan-list p{
        	z-index: 100;
        	height: 55px;
        	width: 950px;
        	font-family: calibri;
        	font-size: 19px;
        	text-align: justify;
        	margin-top: 9px;
        	margin-bottom: 0px;
        }
        .h1{
        	background-color: #01008C;
        	color: #ffffff;
        	font-family: helvetica;
        	font-size: 30px;
        	padding: 37px 0px 0px 0px;
        	height: 70px;
        	width: 1040px;
        	left: 55px;
        	border-radius: 90px;
        	position: absolute;
        	box-shadow: rgba(0, 0, 0, 0.5) 0px 3px 8px;
        	z-index: 100;
        	animation: h1 1s infinite;
        }
        @keyframes h1{
        	0%{
        		color: #ffff99;
        	}
        	100%{
        		color: #ffff00;
        	}
        }
        .plan-list{
        	position: absolute;
        	height: 480px;
        	width: 1000px;
        	border-radius: 25px;
        	background-color: white;
        	top: 100px;
        	left: 50px;
        	text-align: left;
        	padding: 60px 0px 0px 50px;
        	box-shadow: rgba(0, 0, 0, 0.9) 0px 3px 8px;
        }
        .plan-list a{
        	margin-left: 10px;
        	font-size: 20px;
        	font-family: calibri;
        	color: blue;
        	text-decoration: none;
        }
		.copyright{
			font-family: times of roman;
			text-align: right;
			margin: 7px 17px 0px 0px;
		}
	</style>
</head>
<body>
	<?php include"header.php"; ?>
	<br><br><br><br><br><br>
    <center>
        <h1 id="h1">|| Team Tathastu ||</h1>
        <h2 id="h2">LIC & Star Health Recruitment Point</h2>
    <div class="plan-container">
    	<span><h1 class="h1">Micro Insurance Plans</h1></span>
    	<div class="plan-list">
    		<p>LIC’s Micro Insurance Plans are not plans but opportunities that knock on your door once in a lifetime. These plans are a perfect blend of insurance, investment and a lifetime of happiness!.</p>
    		<img src="photos\plans\planc.jpg"><br>
    		<h2>Endowment Plans</h2>
    	</div>
    	<?php include"microinsuranceplans.php"?>
    </div>
    </center>
  	<?php include"footer.php"; ?>
</body>
</html>