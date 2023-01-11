<?php

   include "dbconnect.php";
   $Email=$_POST['Email'];
   $Password=$_POST['Password'];

   $rs=mysqli_query($Con,"select * from lessor where Email='".$Email. "' and Password='".$Password."'");
   if($data=mysqli_fetch_row($rs))
   {
	   session_start();
	   $_SESSION['LID']=$data[0];
	   $_SESSION['Name']=$data[1];
	   
	   header("Location: lessorsection.php");
	   
   }	   
   else
   {
	   include "ERR004.php";
	   return;
   }	   
?>
   