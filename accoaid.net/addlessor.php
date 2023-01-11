<?php
    
	include "dbconnect.php";
	//$TID=AUTO
	$Name=$_POST['Name'];
	$Gender=$_POST['Gender'];
	$DOB=$_POST['DOB'];
	$Address=$_POST['Address'];
	$PhoneNo=$_POST['PhoneNo'];
	$Email=$_POST['Email'];
	$Occupation=$_POST['Occupation'];
	$Password=$_POST['Password'];
	$CPassword=$_POST['CPassword'];
	

	$rs=mysqli_query($Con, "select LID from Lessor where email='".$Email."'");
	if($data=mysqli_fetch_row($rs))
	{
		include "ERR002.php";
		return;
	}	
	
	$sql="insert into Lessor(Name,Gender,DOB, Address, PhoneNo, Email, Occupation,Password) values('".$Name."','".$Gender."','".$DOB."','".$Address."','".$PhoneNo."','".$Email."','".$Occupation."','".$Password."')";
	mysqli_query($Con,$sql);
	include "ACK002.php";
	
?>
	
	
	
	
	

