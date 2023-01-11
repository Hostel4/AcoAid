<?php

   include "dbconnect.php";
   $Email=$_POST['Email'];
   $Password=$_POST['Password'];

   $rs=mysqli_query($Con,"select * from Tenant where Email='".$Email. "' and Password='".$Password."'");
   if($data=mysqli_fetch_row($rs))
   {
	   
	   if(session_id()==="") session_start();
	   $_SESSION['TID']=$data[0];
	   $_SESSION['TName']=$data[1];
	   
	   header("Location: tenantsection.php");
	  
   }	   
   else
   {
	   include "ERR003.php";
	   return;
   }	   
?>
   