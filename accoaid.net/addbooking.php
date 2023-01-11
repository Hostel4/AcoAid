<?php

  include "dbconnect.php";
  if(session_id()==="") session_start();
  $TID=$_SESSION['TID'];
  $PID=$_POST['PID'];
  $BookingDate=date('Y-m-d');
  $BookingTime=date('H:i:s');
  $VisitingDateTime=$_POST['BookingTime'];
  $VisitingDate=substr($VisitingDateTime,0,10);
  $VisitingTime=substr($VisitingDateTime,11,10);
  $sql="insert BookingRegister(BookingDate, BookingTime, VisitingDate, VisitingTime,TID, PID) values('".$BookingDate."','".$BookingTime."','".$VisitingDate."','".$VisitingTime."','".$TID."','".$PID."')";
  mysqli_query($Con, $sql);
  
  include "ACK004.php";
?>
  