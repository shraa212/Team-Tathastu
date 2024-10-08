<?php
	$conn= mysqli_connect("localhost", "root","", "tathastu");	//establishing connection
	if(! $conn)		//check if connection established or not
		alert("Connection Failed!!!");
?>