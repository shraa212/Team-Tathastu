<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Team Tathastu: Star Insurance Agency</title>
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
	</style>
</head>
<body class="body">
	<?php include"header.php"; ?>
	<br><br><br><br><br><br>
    <center>
        <h1 id="h1">|| Team Tathastu ||</h1>
        <h2 id="h2">LIC & Star Health Recruitment Point</h2>
    </center>
	<?php
    
    if(isset($_POST['submit']))
     {
         //echo"<script>window.location.href='tb2.php'</script>";
         //$id=$_POST['id'];
         $fname=$_POST['fname'];
         $mname=$_POST['mname'];
         $lname=$_POST['lname'];
         $dob=$_POST['date'];
		 $address=$_POST['address'];
         $phone=$_POST['phone'];
         $email=$_POST['email'];
         $quali=$_POST['quali'];
         $pan=$_POST['pan'];
         $adhar=$_POST['adhar'];
		 include "connection.php" ;
			{
				$sql = "insert into healthagents VALUES('".$fname."','".$mname."','".$lname."','$dob','".$address."','$phone','".$email."','".$quali."','$pan','$adhar')";
			
				$r= mysqli_query($conn, $sql);
				if($r)
				{
							echo"<script>window.location.href='thankagent.php'</script>";
				}
				else 
				{
					echo "Error " ;
				}
			}
	}
 ?>

     <style>
     #container {
       width: 600px;
       margin: 100px auto;
       margin-bottom: 20px;
       margin-top: 20px;
       background: linear-gradient(180deg,#3498DB  0%,#F7DC6F  100%);
       background-img:'lic.jpg';
       padding: 20px;
       border-radius: 10px;
       border-color: #FFFFFF;
       box-shadow: 0 0 5px rgba(0, 0, 1, 5);
     }
     .container img 
	 {
      max-width: 100%;
      max-height: 100%;
	}
	 .labelClass
	 	{
            float: left;
            width: 113px;
			font-size: 18px;
        }
	input[type="text"] 
		{
			height: 30px;
			width: 300px;
		}
		input[type="date"] 
		{
			height: 30px;
			width: 300px;
		}
		input[type="email"] 
		{
			height: 30px;
			width: 300px;
		}
		input[type="checkbox"] 
		{
			height: 15px;
			width: 15px;
		}
		label {
      text-align: right;
    }
	input[type="submit"]  {
            background-color: green; /* Green background color */
            color: white; /* Text color */
            border: none; /* Remove border */
            padding: 10px 20px; /* Add padding */
            font-size: 16px; /* Set font size */
            cursor: pointer; /* Add cursor on hover */
            border-radius: 4px; /* Add rounded corners */
        }

        /* Style for the submit button on hover */
        input[type="submit"] :hover {
            background-color: #45a049; /* Darker green background color */
        }
		.error {
            border: 1px solid red;
            /*background-image: url('error-icon.png');  Replace with your own error icon */
            background-position: right center;
            background-repeat: no-repeat;
            background-size: 20px;
            padding-right: 10px; /* Adjust padding to make space for the error icon */
        }
		.error-message 
		{
            color: red;
            font-size: 12px;
        }
     </style>
			<form method="POST" >
        <center >
            <div id="container">
				<h1 style="color:black;">
				Agent Recruitment
				</h1>
					<input type="hidden" id="cate" name="cate" value="Health Insurance">
					<label class="labelClass">First Name :</label>
					<input type='text' placeholder="First name" name='fname' id="fname"required>

					<br>
					<br>
					<label class="labelClass">Middle Name :</label>
					<input type='text' placeholder="Middle name" name="mname" id="mname"required>
					
					<br>
					<br>
					<label class="labelClass">Last Name :</label>
					<input type='text' placeholder="Last name" name='lname' id="lname"required>
					
					<br>
					<br>
					
						<label class="labelClass">DOB :</label>
						<input type='date'  placeholder="DOB" name='date' id="date"required>
						
					<br>
					<br>
					
					<label class="labelClass">Address:</label>
					<input type="text" placeholder="Address name" name="address" id="address" required>
					<br>
					<br>
					<label class="labelClass">Phone No:</label>
					<input type='text' placeholder="+91 xxxxx xxxxx" maxlength="10"  id="phone" name='phone'required onblur="validatePhoneNumber();">
					<br>
					<span id="phoneError" class="error-message"></span>
					<br>
					<br>
					<label class="labelClass">Email :</label>
					<input type='email' placeholder="Email" id="email" name='email'required onblur="validateEmail();">
					<br>
					<span id="emailError" class="error-message"></span>
					<br>
					<br>
					<label class="labelClass">Qualification :</label>
					<input type='text' placeholder="Qualification" name='quali' id="quali"required>
					<br>
					<br>
					<br>
					
					<label class="labelClass">PAN No :</label>
					<input type='text' placeholder="PAN" name='pan' id="pan" onblur="validatePAN()" required>
					<br>
					<span id="PANError" class="error-message"></span>
					<br>
					<br>
					<label class="labelClass">Aadhaar no :</label>
					<input type='text' placeholder="Aadhaar Number" id="aadhaar" maxlength="12" onblur="validateAadhaar();"  oninput="checkForm();" name='adhar'required>
					<br>
					<span id="aadhaarError" class="error-message"></span>
					 
					 <br>
					 <br>
					<input type="submit" value="Submit" id="submitBtn"name="submit" disabled>
					</div>
			</center>
			
				<script>
				 function validatePhoneNumber() 
				 {
					var phoneNumberInput = document.getElementById("phone");
					var phoneNumber = phoneNumberInput.value;
					var phonePattern = /^[0-9]{10}$/;
					var errorSpan = document.getElementById("phoneError");
					if ((!phonePattern.test(phoneNumber)) &&( !/^[6-9]\d{9}$/.test(phoneNumber)))
					{
						errorSpan.innerHTML = "Please enter a valid Phone Number.";
						//phoneNumberInput.classList.add("error"); // Add 'error' class
						phoneNumberInput.focus();
						return false;
					} 
					else 
					{
							if ( !/^[6-9]\d{9}$/.test(phoneNumber))
							{
								errorSpan.innerHTML = "Please enter a valid Phone Number.";
								//phoneNumberInput.classList.add("error"); // Add 'error' class
								phoneNumberInput.focus();
								return false;
							} 
							else
							{
								errorSpan.innerHTML = " ";
								phoneNumberInput.classList.remove("error"); // Remove 'error' class
							}
					}

					return true;
				}
				function validateEmail() 
				{
					var emailInput = document.getElementById("email");
					var email = emailInput.value;
					var emailPattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
					var errorSpan = document.getElementById("emailError");
					if (!emailPattern.test(email)) 
					{
						errorSpan.innerHTML = "Please enter a valid email address.";
						//emailInput.value = ""; // Clear the input field
						emailInput.classList.add("error");
						emailInput.focus();
						return false;
					}
					else
					{
						emailInput.classList.remove("error");
						errorSpan.innerHTML = " ";
						return true;
					}
        		}
				function validatePAN()
				{
						var panInput = document.getElementById("pan");
						var panVal= panInput.value;
						var regpan = /^([a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}?$/;
						var errorSpan = document.getElementById("PANError");
						if(!regpan.test(panVal))
						{
							
							errorSpan.innerHTML = "Please enter a valid PAN number.";
							//emailInput.value = ""; // Clear the input field
							panInput.classList.add("error");
							panInput.focus();
							return false;
						// valid pan card number
						}
						else 
						{
							panInput.classList.remove("error");
							errorSpan.innerHTML = " ";
							return true;
						}// invalid pan card number
				}
				
				function validateAadhaar() 
				{
					var aadhaarInput = document.getElementById("aadhaar");
					var aadhaar = aadhaarInput.value;
					var aadhaarPattern = /^\d{12}$/;
					var errorSpan = document.getElementById("aadhaarError");
					if (!aadhaarPattern.test(aadhaar)) 
					{
						aadhaarInput.focus();
						errorSpan.innerHTML = "Please enter valid Aadhaar number";
						aadhaarInput.classList.add("error");
						aadhaarInput.value = ""; // Clear the input field
						return false;
					}
					else
					{
						
						aadhaarInput.classList.remove("error");
						errorSpan.innerHTML = " ";
						return true;
					}
        		}
				function checkForm() 
				{
					var fnameInput = document.getElementById("fname");
					var mnameInput = document.getElementById("mname");
					var lnameInput = document.getElementById("lname");
					var dateInput = document.getElementById("date");
					var addressInput = document.getElementById("address");
					var phoneInput = document.getElementById("phone");
					var emailInput = document.getElementById("email");
					var panInput = document.getElementById("pan");
					var aadhaarInput = document.getElementById("aadhaar");
					var submitButton = document.getElementById("submitBtn");
					if (fnameInput.value !== "" && mnameInput.value !== "" && lnameInput.value !== "" && dateInput.value !== "" && addressInput.value !== "" && emailInput.value !== "" && phoneInput.value !== "" && panInput.value !== "" && aadhaarInput.value !== "") 
					{	
						submitButton.disabled = false;
					} 
					else 
					{
						submitButton.disabled = true;
					}
				}
			</script>
            </form>
  	<?php include"footer.php"; ?>
</body>
</html>