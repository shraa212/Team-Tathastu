<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tathastu's LIC & Star Health Point</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		body{
			margin: 0px 0px 0px 0px;
			background-color: #f0f8ff;
		}
		.slider-container{
			flex: 2.7;
		    width: 900px;
      		height: 566px;
      		position: relative;
      		overflow: hidden;
      		margin: 20px 25px 20px 25px;
      		box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.7);
    	}
    	.slider-image{
      		width: 100%;
      		height: 100%;
      		display: none;
      		margin: 0px 0px 0px 0px;
    	}
    	.slider-image.active{
      		display: block;
    	}
    	.slider-controls{
      		position: absolute;
      		top: 50%;
      		transform: translateY(-50%);
      		width: 100%;
      		display: flex;
      		justify-content: space-between;
      		align-items: center;
      		z-index: 1;
    	}
    	.slider-controls button{
      		background: transparent;
      		border: none;
      		padding: 0;
      		color: #ffffff;
      		cursor: pointer;
    	}
    	.slider-controls button:focus{
      		outline: none;
    	}
    	.slider-controls button:hover{
      		color: #000000;
    	}
    	.slider-controls .prev-btn{
      		margin-left: 15px;
      		font-size: 45px;
      		font-weight: bold;
    	}
    	.slider-controls .next-btn{
      		margin-right: 15px;
      		font-size: 45px;
      		font-weight: bold;
    	}
        #h1{
        	font-size: 49px;
            color: red;
            font-family: Brush Script MT;
            font-weight: bold;
            font-style: italic;
            margin: 100px 0px 0px 0px;
        }
        #h2{
        	font-size: 29px;
            color: red;
            line-height: 35px;
            font-family: cursive;
            font-weight: bold;
            margin: 0px 0px 0px 0px;
        }
        .founder{
        	display: flex;
        	flex-direction: row;
        	height: 300px;
        	width: 610px;
        	margin: 0px 0px 10px 0px;
        }   	
        .founder1{
        	flex: 1;
        	margin: 30px 30px 30px 30px;
        }
        .founder2{
        	flex: 1;
        	margin: 30px 30px 30px 30px;
        }
        h2{
        	margin: 50px 0px 0px 0px;
        	font-size: 30px;
        	font-family: cambria;
        	font-weight: bold;
        	color: #01008C;
        }
        h3{
        	margin: 10px 0px 0px 0px;
        	font-size: 19px;
        	font-family: verdana;
        	color: #000000;
        	text-align: center;
        }
        p{
        	margin: 10px 0px 0px 0px;
        	font-size: 16px;
        	font-family: verdana;
        	color: #000000;
        	text-align: center;
        }
        .founderimg{
        	height: 180px;
        	width: 180px;
        	border-radius: 100%;
        	border: 3px solid #01008C;
        	margin: 0;
        }
		.blink{
			padding: 7px 7px 3px 7px;
			height: 515px;
			width: 935px;
			border-radius: 50px;
			margin-bottom: 7px;
		}
		.blink-text{
			display: flex;
			flex-direction: row;
			width: 870px;
			height: 370px;
		}
		.blink-text1{
			flex: 1;
			background-color: #FFF5EE;
			padding: 55px 0px 11px 0px;
			border-radius: 17px;
			box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
		}
		.blink-text2{
			flex: 1;
			background-color: #FFF5EE;
			padding: 55px 0px 11px 0px;
			border-radius: 17px;
			box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
		}
		.blink h3{
			margin: 43px 0px 27px 0px;
			line-height: 20px;
			text-align: center;
			font-family: arial;
			font-size: 30px;
			font-weight: bold;
			animation: p 1s infinite;
		}
		.blink p{
			margin: 19px 0px 0px 30px;
			line-height: 19px;
			text-align: justify;
			font-family: arial;
			font-size: 21px;
			font-weight: bold;
			animation: p 1s infinite;
		}
		@keyframes p{
			0%{
				color: blue;
			}
			100%{
				color: navy;
			}
		}
		#ad{
			margin: 0px 0px 0px 0px;
			height: 321px; 
			width: 962px; 
			border-radius: 10px;
		}
		.main{
			display: flex;
			flex-direction: row;
		}
		.title{
			flex: 1;
			height: 500px;
			background-color: #FFF5EE;
			border-radius: 35px;
			margin: 55px 0px 0px 25px;
			box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.7);
		}
		.title h3{
			font-family: Brush Script MT;
			font-size: 25px;
			color: red;
			margin: 10px 0px 0px 0px;
		}
	</style>
</head>
<body>
	<?php include"header.php"; ?>
	<br><br><br><br><br><br><br>
    <div class="main">
    <div class="title"><br>
    <center>
    	<h1 id="h1">||Team Tathastu||</h1>
    	<h3>&nbsp;&nbsp;Mann Mein Hai Vishwas..!</h3><br><br><br>
    	<h2 id="h2">&nbsp;LIC & Star Health <br>Recruitment Point</h2>
    </center>
    </div>
  	<div class="slider-container">
    	<img class="slider-image active" src="photos\firm\1.jpeg" alt="Image 1">
    	<img class="slider-image" src="photos\firm\2.jpeg" alt="Image 2">
    	<img class="slider-image" src="photos\firm\3.jpeg" alt="Image 3">
    	<div class="slider-controls">
      		<button class="prev-btn">&#8249;</button>
      		<button class="next-btn">&#8250;</button>
    	</div>
  	</div>	
    </div>
    <br>
    <center>
    <div class="blink">
    	<h3>&#9679; Our Services &#9679;</h3>
		<div class="blink-text">
			<div class="blink-text1">
				<p>-&nbsp;&nbsp;&nbsp;LIC Premium Reminder Notice</p>
				<p>-&nbsp;&nbsp;&nbsp;LIC Policy Status</p>
				<p>-&nbsp;&nbsp;&nbsp;LIC Policy Tax Certificate</p>
				<p>-&nbsp;&nbsp;&nbsp;Premium Deposit</p>
				<p>-&nbsp;&nbsp;&nbsp;Policy Revival</p>				
			</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<div class="blink-text2">
				<p>-&nbsp;&nbsp;&nbsp;Information About New Plans</p>
				<p>-&nbsp;&nbsp;&nbsp;Policy Assignment</p>
				<p>-&nbsp;&nbsp;&nbsp;Policy Loan</p>
				<p>-&nbsp;&nbsp;&nbsp;Maturity Claims And Death Claims</p>
				<p>-&nbsp;&nbsp;&nbsp;Policy Branch Transfer</p>
			</div>
		</div>	
	</div>
	<img src="photos\ad.jpg" id="ad">
	</center>
  	<center>
  		<h2>Our Co-founders</h2>
  		<div class="founder">
  			<div class="founder1">
  				<img src="photos\co_founder\td.jpg" class="founderimg">
  				<br>
  				<h3>Mr. Tushar Deshmukh</h3>
  				<p>BCS DBM, MBS</p>
  			</div>
  			<div class="founder2">
  				<img src="photos\co_founder\dc.jpg" class="founderimg">
  				<br>
  				<h3>Mr. Dhiraj Chhajed</h3>
  				<p>B.Com</p>
  			</div>
  		</div>
  	</center>
  	<?php include"footer.php"; ?>
  	<script>
		const prevBtn = document.querySelector('.prev-btn');
    	const nextBtn = document.querySelector('.next-btn');
    	const sliderImages = document.querySelectorAll('.slider-image');
    	let currentImageIndex = 0;
    	function showImage(index)
    	{
      		sliderImages.forEach
      		(
      			(image, i) => 
      			{
        			if (i === index) 
        			{
	          			image.classList.add('active');
        			} 
        			else 
        			{
          				image.classList.remove('active');
        			}
      			}
      		);
    	}
    	function showNextImage() 
    	{
      		currentImageIndex = (currentImageIndex + 1) % sliderImages.length;
		    showImage(currentImageIndex);
    	}
    	function showPreviousImage() 
    	{
      		currentImageIndex = (currentImageIndex - 1 + sliderImages.length) % sliderImages.length;
      		showImage(currentImageIndex);
    	}
    	nextBtn.addEventListener('click', showNextImage);
    	prevBtn.addEventListener('click', showPreviousImage);
    	setInterval(showNextImage, 4000);
	</script>
</body>
</html>