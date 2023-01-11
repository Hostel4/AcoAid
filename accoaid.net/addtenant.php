<?php
    
	include "dbconnect.php";
	//$TID=AUTO
	$Name=$_POST['Name'];
	$Gender=$_POST['Gender'];
	$DOB=$_POST['DOB'];
	$Address=$_POST['Address'];
	$PhoneNo=$_POST['PhoneNo'];
	$Email=$_POST['Email'];
	$CollegeID=$_POST['CollegeID'];
	$Branch=$_POST['Branch'];
	$Sem=$_POST['Sem'];
	$RegNo=$_POST['RegNo'];
	$Password=$_POST['Password'];
	$CPassword=$_POST['CPassword'];
	
    $rs=mysqli_query($Con, "select TID from tenant where email='".$Email."'");
	if($data=mysqli_fetch_row($rs))
	{
		include "ERR001.php";
		return;
	}	
	
	$sql="insert into tenant(Name,Gender,DOB, Address, PhoneNo, Email, CollegeID, Branch, Sem, RegNo,Password) values('".$Name."','".$Gender."','".$DOB."','".$Address."','".$PhoneNo."','".$Email."','".$CollegeID."','".$Branch."','".$Sem."','".$RegNo."','".$Password."')";
	mysqli_query($Con,$sql);
	include "ACK001.php";
	
?>
	
	
	
	
	

