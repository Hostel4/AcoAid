<?php

  include "dbconnect.php";
  if(session_id()==="") session_start();
  $TID=$_SESSION['TID'];
  $PID=$_POST['PID'];
  $BookingDate=date('Y-m-d');
  $BookingTime=date('H:i:s');
  $sql="insert Booking(BookingDate, BookingTime,TID, PID) values('".$BookingDate."','".$BookingTime."','".$TID."','".$PID."')";
  mysqli_query($Con, $sql);
  
  include "ACK005.php";
?>
  