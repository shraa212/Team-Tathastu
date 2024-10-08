<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Team Tathastu: Life Insurance Plans</title>
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
        	height: 330px;
        	width: 1000px;
        	padding: 10px 0px 0px 0px;
        	margin: 10px 0px 24px 0px;
        	position: relative;
        }
        .h1{
        	background-color: #01008C;
        	font-family: helvetica;
        	font-size: 29px;
        	padding: 27px 0px 0px 0px;
        	height: 60px;
        	width: 900px;
        	left: 50px;
        	border-radius: 50px;
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
        	height: 160px;
        	width: 860px;
        	border-radius: 25px;
        	background-color: white;
        	top: 85px;
        	left: 45px;
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
    	<div><h1 class="h1">Life Insurance Plans</h1></div>
    	<div class="plan-list">
    		&#x2022;<a href="insurance.php" target="_blank">Insurance Plans</a><br>
    		&#x2022;<a href="pension.php" target="_blank">Pension Plans</a><br>
    		&#x2022;<a href="unitlinked.php" target="_blank">Unit Linked Plans</a><br>
    		&#x2022;<a href="microinsurance.php" target="_blank">Micro Insurance Plans</a><br>
    		&#x2022;<a href="health.php" target="_blank">Health Plans</a>
    	</div>
    </div>
    </center>
  	<?php include"footer.php"; ?>
</body>
</html>