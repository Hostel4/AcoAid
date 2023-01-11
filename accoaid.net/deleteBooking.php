<?php
   include "dbconnect.php";
   mysqli_query($Con,"delete from Booking where PID='".$_GET['PID']."'");
   include "lessorsection.php";
 ?>
 