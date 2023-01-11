<?php
  
    include "dbconnect.php";

    if(session_id()==="") 
	{
		session_start();
	}
	
	//$PID=AUTO;
	$LID=$_SESSION['LID'];
	$PropertyType=$_POST['PropertyType'];
	$FirnishedStatus=$_POST['FirnishedStatus'];
	$Floor=$_POST['Floor'];
	$Rent=$_POST['Rent'];
	$Deposit=$_POST['Deposit'];
	$Description=$_POST['Description'];
	$Area=$_POST['Area'];
	$Address=$_POST['Address'];
	$Status=$_POST['Status'];
	
	
	
	
	
	
    $filename = $_FILES["UploadFile"]["name"];

    $tempname = $_FILES["UploadFile"]["tmp_name"];  
    $folder = "propertyimages/"."LID".$LID.$filename;
	$Image=$folder;
	
	if (move_uploaded_file($tempname, $folder)) 
	 {
      $msg = "Image uploaded successfully";
     }
	 else
	 {
            $msg = "Failed to upload image";
     }

     $sql="insert into Property(LID,PropertyType, FirnishedStatus, Floor, Rent, DepositAmount, Description, Area, Address, Status, Image) values('".$LID."','".$PropertyType."','".$FirnishedStatus."','".$Floor."','".$Rent."','".$Deposit."','".$Description."','".$Area."','".$Address."','".$Status."','".$Image."')";
     mysqli_query($Con,$sql);
     include "ACK003.php";
	 
   
?>
