<?php

   include "dbconnect.php";
   $UserID=$_POST['UserID'];
   $Password=$_POST['Password'];

   $rs=mysqli_query($Con,"select * from admin where userID='".$UserID. "' and Password='".$Password."'");
   if($data=mysqli_fetch_row($rs))
   {
	   session_start();
	   
	   header("Location: adminsection.php");
	   
   }	   
   else
   {
	   include "ERR005.php";
	   return;
   }	   
?>
   